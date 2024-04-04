<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $fillable=[
        'idvendor',
        'vendorname',
        'title',
        'description',
        'category',
        'price',
        'image'
    ];
}
