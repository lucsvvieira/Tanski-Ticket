<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccurrencyStatus extends Model
{
    use HasFactory;

    protected $table = 'occurrency_status';

    protected $fillable = [
        'status'
    ];
}
