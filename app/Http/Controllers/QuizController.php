<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QuizResponse;

class QuizController extends Controller
{
    public function store(Request $request)
    {
        $response = QuizResponse::create([
            'wedding_day' => $request->wedding_day,
            'dinner_day' => $request->dinner_day,
            'favorite_food' => $request->favorite_food,
            'dress_style' => $request->dress_style,
            'kids' => $request->kids,
            'weekend_activity' => $request->weekend_activity,
            'honeymoon' => $request->honeymoon,
            'anniversary_trip' => $request->anniversary_trip,
        ]);

        return response()->json([
            'message' => 'Response saved ❤️',
            'data' => $response
        ]);
    }

    public function index()
    {
        return QuizResponse::latest()->get();
    }
}