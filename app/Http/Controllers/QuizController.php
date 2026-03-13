<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QuizResponse;

class QuizController extends Controller
{
    public function store(Request $request)
    {
        $response = QuizResponse::create($request->all());

        return response()->json([
            "message" => "Saved",
            "data" => $response
        ]);

    }

    public function index()
    {
        return QuizResponse::latest()->get();
    }
}