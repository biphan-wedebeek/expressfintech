<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    protected $table = 'app_loan_applications';

    protected $fillable = [
        'tracklink_id',
        
        // Step 1: Loan Amount
        'loan_amount',
        
        // Step 2: Loan Info
        'credit',
        'loan_reason',
        
        // Step 3: Personal Info
        'first_name',
        'last_name',
        'date_of_birth',
        'ssn',
        
        // Step 4: Personal Info 2
        'military',
        'citizen',
        'dl_state',
        'own_home',
        'own_car',
        
        // Step 5: Contact Info
        'email',
        'phone',
        'home_phone',
        'contact_time',
        
        // Step 6: Address
        'address',
        'city',
        'state',
        'zipcode',
        'residence_months',
        'rent',
        
        // Step 7: Employment
        'job_title',
        'employer',
        'employed_months',
        'work_phone',
        
        // Step 8: Income
        'income',
        'income_type',
        'pay_frequency',
        'next_payday',
        'other_income',
        'debt',
        
        // Step 9: Bank Info
        'bank_name',
        'account_number',
        'aba',
        'bank_type',
        'bank_months',
        
        // Step 10: Bank Info 2
        'bank_phone',
        'direct_deposit',
        'trustedform_cert_url',
        
        // Status
        'status',
        'reason',
    ];

    protected $casts = [
        'date_of_birth' => 'date:Y-m-d',
        'next_payday' => 'date:Y-m-d',
        'military' => 'boolean',
        'citizen' => 'boolean',
        'own_home' => 'boolean',
        'own_car' => 'boolean',
        'direct_deposit' => 'boolean',
        'rent' => 'decimal:2',
        'income' => 'decimal:2',
        'other_income' => 'decimal:2',
        'debt' => 'decimal:2',
    ];

    public function getFullAddressAttribute()
    {
        return "{$this->address}, {$this->city}, {$this->state}";
    }

    public function tracklink()
    {
        return $this->belongsTo(Tracklink::class);
    }

    public function exports()
    {
        return $this->hasMany(LoanExport::class, 'application_id');
    }
    
    public function hasBeenExported(): bool
    {
        return $this->exports()->exists();
    }
    
    public function getLastExportedAt()
    {
        return $this->exports()->latest('exported_at')->first()?->exported_at;
    }
    
    public function getExportCount(): int
    {
        return $this->exports()->count();
    }
}