<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AIController extends Controller
{
    public function ask(Request $request)
    {
        $ingredients = $request->input('ingredients', []);
        $prompt = "Suggest a recipe using these ingredients: " . implode(', ', $ingredients);

        $apiKey = "AIzaSyCg58srcvIRXvs1GNiJCfr7wffHPu39lGU";

        $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . $apiKey;

        $response = Http::post($url, [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $prompt]
                    ]
                ]
            ]
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'No response from AI.';
            return response()->json(['reply' => $text]);
        } else {
            return response()->json(['reply' => 'Error: ' . $response->body()], 500);
        }
    }
}
