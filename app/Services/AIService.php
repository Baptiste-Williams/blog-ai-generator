<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AIService
{
    public function generateText(string $prompt, string $tone): string
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.openai.key'),
            'Content-Type' => 'application/json',
        ])->post(config('services.openai.url') . '/chat/completions', [
            'model' => config('services.openai.model'),
            'messages' => [
                ['role' => 'user', 'content' => "You are a tech blogger. Write a blog post titled '{$prompt}' in a {$tone} tone. Make it informative and around 500 words."],
            ],
            'temperature' => 0.7,
            'max_tokens' => 500,
        ]);

        if (!$response->successful()) {
            throw new \Exception('API error: ' . $response->body());
        }

        return $response['choices'][0]['message']['content'] ?? 'No output received';
    }
}
