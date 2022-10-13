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
        'attach_photos',
        'occurrency_record_id',
        'category_id',
        'department_id',
        'priorities_id',
        'occurrency_status_id',
        'sla_id',
        'user_client_id'
    ];

    public function OccurrencyRecord() {
        return $this->belongsTo(OccurrencyRecord::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function priority() {
        return $this->belongsTo(Priority::class);
    }

    public function OccurrencyStatus() {
        return $this->belongsTo(OcurrencyStatus::class);
    }

    public function sla() {
        return $this->belongsTo(Sla::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getFotoAttribute()
    {
        return env('APP_URL') . 'storage/' . $this->attach_photos;
    }
}
