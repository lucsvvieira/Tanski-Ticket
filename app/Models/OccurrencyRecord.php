<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccurrencyRecord extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'messages'
    ];
}
