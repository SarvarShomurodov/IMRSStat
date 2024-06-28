<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bandlik extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adress',
        'phone'
    ];
}
