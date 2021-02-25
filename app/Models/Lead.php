<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    const STATUS_NEW = 1;
    const STATUS_CONVERTED = 2;
    const STATUS_CANCELED = 3;

    protected $fillable = [
        'name',
        'affiliate_id',
        'lead_status_id',
        'brand_id'
    ];

    public function leadStatus(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(LeadStatus::class);
    }
}
