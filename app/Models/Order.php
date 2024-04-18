<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'iduser',
        'idvendor',
        'idvendorowner',
        'eventname',
        'date'
    ];
    protected $guarded = ['id'];
}
