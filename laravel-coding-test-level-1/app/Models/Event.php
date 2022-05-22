<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getDateStartAttribute()
    {
        return Carbon::parse($this->startAt)->format('Y-m-d\TH:i');
    }

    public function getDateEndAttribute($value)
    {
        return Carbon::parse($this->endAt)->format('Y-m-d\TH:i');
    }
}
