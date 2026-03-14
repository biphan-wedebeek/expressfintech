<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanExport extends Model
{
    protected $table = 'app_loan_exports';
    
    protected $fillable = [
        'application_id',
        'exported_at',
        'file_name',
        'exported_by',
    ];
    
    protected $casts = [
        'exported_at' => 'datetime',
    ];
    
    public function application()
    {
        return $this->belongsTo(LoanApplication::class, 'application_id');
    }
    
    public function exportedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'exported_by');
    }
}