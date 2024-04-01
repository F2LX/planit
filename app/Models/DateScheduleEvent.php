<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateScheduleEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'idevent',
        'idvendor',
        'iduser',
        'date',
        'schedule_title',
        'isDone'
    ];
}
