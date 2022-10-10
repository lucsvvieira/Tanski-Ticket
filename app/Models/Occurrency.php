<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occurrency extends Model
{
    use HasFactory;

    protected $table = 'occurrency';

    protected $fillable = [
        'description',
        'open_date',
        'close_date',
        'attendanting_day',
        'opened_by',
        'attended_by',
        'priority',
        'attach_photos'
    ];
}
