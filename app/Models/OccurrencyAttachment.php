<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccurrencyAttachment extends Model
{
    use HasFactory;

    protected $table = 'occurrency_attachments';

    protected $fillable = [
        'original_name',
        'extension',
        'size',
        'file_name'
    ];
}
