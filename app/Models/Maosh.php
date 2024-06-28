<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maosh extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'widh',
        'grafik',
        'oylik',
        'foiz'
    ];
}
