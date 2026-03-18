<?php

namespace App\Http\Controllers;

use App\Models\FintechContact;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    // ── Hiển thị trang contact ────────────────────────────────
    public function index()
    {
        $categories = Category::where('status', 1)
            ->orderBy('name')
            ->get();

        // Load tất cả sub_categories kèm category_id để JS filter
        $subCategories = SubCategory::where('status', 1)
            ->orderBy('name')
            ->get(['id', 'category_id', 'name']);

        return view('pages.contact', compact('categories', 'subCategories'));
    }

    // ── Xử lý submit form ─────────────────────────────────────
    public function store(Request $request)
    {
        // 1. Kiểm tra Honeypot — nếu có dữ liệu = bot
        if (!empty($request->input('website'))) {
            return response()->json([
                'success' => false,
                'message' => 'Spam detected.',
            ], 422);
        }

        // 2. Kiểm tra thời gian submit — dưới 3 giây là bot
        $jsTime = (int) $request->input('submitted_at_js', 0);
        if ($jsTime > 0) {
            $elapsed = (time() * 1000) - $jsTime;
            if ($elapsed < 3000) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please slow down.',
                ], 422);
            }
        }

        // 3. Rate limiting: max 5 lần / 60 phút theo IP
        $ip  = $request->ip();
        $key = 'contact:' . $ip;

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return response()->json([
                'success' => false,
                'message' => "Too many attempts. Please wait {$seconds} seconds.",
            ], 429);
        }
        RateLimiter::hit($key, 3600);

        // 4. Validate dữ liệu
        $validated = $request->validate([
            'full_name'       => 'required|string|min:2|max:150',
            'email'           => 'required|email|max:255',
            'phone_number'    => ['required', 'string', 'regex:/^\+?[\d\s\-().]{10,20}$/'],
            'category_id'     => 'required|integer|exists:fintech_categories,id',
            'sub_category_id' => 'nullable|integer|exists:fintech_sub_categories,id',
            'message'         => 'required|string|min:20|max:1000',
        ], [
            'full_name.required'    => 'Full name is required.',
            'full_name.min'         => 'Full name must be at least 2 characters.',
            'email.required'        => 'Email address is required.',
            'email.email'           => 'Please enter a valid email address.',
            'phone_number.required' => 'Phone number is required.',
            'phone_number.regex'    => 'Please enter a valid phone number (at least 10 digits).',
            'category_id.required'  => 'Please select a category.',
            'category_id.exists'    => 'Invalid category selected.',
            'message.required'      => 'Message is required.',
            'message.min'           => 'Message must be at least 20 characters.',
        ]);

        // 5. Lưu vào database
        $contact = FintechContact::create([
            'full_name'       => $validated['full_name'],
            'email'           => $validated['email'],
            'phone_number'    => $validated['phone_number'],
            'category_id'     => $validated['category_id'],
            'sub_category_id' => $validated['sub_category_id'] ?? null,
            'message'         => $validated['message'],
            'honeypot_field'  => null,
            'submitted_at_js' => $jsTime ?: null,
            'ip_address'      => $ip,
            'user_agent'      => $request->userAgent(),
            'status'          => 'new',
        ]);

        // 6. Tạo reference number từ ID
        $ref = 'EF-' . str_pad($contact->id, 6, '0', STR_PAD_LEFT);

        return response()->json([
            'success'   => true,
            'message'   => 'Your message has been sent successfully.',
            'ref'       => $ref,
        ]);
    }
}