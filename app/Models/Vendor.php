<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'name',
        'description',
        'category',
        'img1',
        'img2',
        'img3',
        'rate'
    ];
}
