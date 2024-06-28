<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statistic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'year_2010',
        'year_2011',
        'year_2012',
        'year_2013',
        'year_2014',
        'year_2015',
        'year_2016',
        'year_2017',
        'year_2018',
        'year_2019',
        'year_2020',
        'year_2021',
        'year_2022',
    ];
}
