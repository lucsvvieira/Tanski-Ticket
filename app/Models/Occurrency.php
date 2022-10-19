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
        'category_id',
        'department_id',
        'priority_id',
        'occurrency_status_id',
        'sla_id',
        'user_id',
        'user_client_id'
    ];

    public function OccurrencyRecord() {
        return $this->belongsTo(OccurrencyRecord::class);
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function priority() {
        return $this->belongsTo(Priority::class, 'priority_id');
    }

    public function OccurrencyStatus() {
        return $this->belongsTo(OccurrencyStatus::class, 'occurrency_status_id');
    }

    public function sla() {
        return $this->belongsTo(Sla::class, 'sla_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userClient() {
        return $this->belongsTo(User::class, 'user_client_id');
    }

    public function getFotoAttribute()
    {
        return env('APP_URL') . 'storage/' . $this->attach_photos;
    }
}
