<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResponse extends Model
{
    protected $fillable = [
    'wedding_day',
    'dinner_day',
    'favorite_food',
    'dress_style',
    'kids',
    'weekend_activity',
    'honeymoon',
    'anniversary_trip'
];
}
