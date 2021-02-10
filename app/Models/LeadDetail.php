<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'name',
        'first_name',
        'last_name',
        'email',
        'address',
        'post_code',
        'country',
        'phone_number',
        'promo_code',
        'password',
        'currency'
    ];

    public function lead(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }
}
