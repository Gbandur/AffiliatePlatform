<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadStatusLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'lead_status_id',
    ];
}
