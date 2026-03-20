<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Services\AdvertiserPostbackService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertiserPostbackController extends Controller
{
    public function __construct(
        protected AdvertiserPostbackService $advertiserPostbackService
    ) {}

    public function handle(Request $request, int $network): JsonResponse
    {
        $networkModel = Network::query()
            ->where('id', $network)
            ->where('status', true)
            ->first();

        if (! $networkModel) {
            throw new NotFoundHttpException('Network not found or inactive.');
        }

        $result = $this->advertiserPostbackService->handleInbound($request, $networkModel);

        return response()->json([
            'success' => $result['success'],
            'message' => $result['message'],
            'duplicate' => $result['duplicate'] ?? false,
            'tracklink_id' => $result['tracklink']->id ?? null,
            'outbound' => $result['outbound'] ?? null,
        ], $result['code'] ?? 200);
    }
}