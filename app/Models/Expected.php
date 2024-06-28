<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expected extends Model
{
    use HasFactory;
    protected $fillable = [
        'kasblar',
        'O`R',
        'QR',
        'AN',
        'BX',
        'JZ',
        'QD',
        'NY',
        'NM',
        'SM',
        'SX',
        'SR',
        'TV',
        'FA',
        'XR',
        'TSH',
    ];
}
