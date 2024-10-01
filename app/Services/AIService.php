<?php

namespace App\Services;

use OpenAI\Laravel\Facades\OpenAI;

class AIService
{
    protected $patterns = [
        [
            "tag" => "salam",
            "patterns" => ["Hello", "Hi", "Hey", "Halo", "Selamat pagi", "Selamat siang", "Selamat malam"],
            "responses" => ["Halo! Ada yang bisa saya bantu?", "Hai, bagaimana saya bisa membantu Anda?", "Hello! Ada pertanyaan yang ingin diajukan?"]
        ],
        [
            "tag" => "tentang perusahaan",
            "patterns" => ["Apa itu IDMETAFORA?", "Ceritakan tentang IDMETAFORA", "Perusahaan ini bergerak di bidang apa?"],
            "responses" => ["IDMETAFORA adalah perusahaan yang menyediakan solusi ERP (Enterprise Resource Planning) untuk berbagai industri. Kami membantu bisnis Anda dalam mengelola proses bisnis secara lebih efisien."]
        ],
        [
            "tag" => "Info kontak",
            "patterns" => ["Bagaimana cara menghubungi IDMETAFORA?", "Kontak IDMETAFORA", "Informasi kontak perusahaan ini"],
            "responses" => ["Jika ada pertanyaan lebih lanjut, anda bisa menghubungi HRD IDMETAFORA di nomor 0896 6423 0232."]
        ]
    ];

    // Check if input matches any predefined patterns
    public function getResponse(string $userInput): string
    {
        // Check for any matching pattern
        foreach ($this->patterns as $pattern) {
            foreach ($pattern['patterns'] as $p) {
                if (stripos($userInput, $p) !== false) {
                    return $this->getRandomResponse($pattern['responses']);
                }
            }
        }

        // Fallback to OpenAI if no match is found
        return $this->getAIResponse($userInput);
    }

    // Randomly select one of the responses
    private function getRandomResponse(array $responses): string
    {
        return $responses[array_rand($responses)];
    }

    // Use OpenAI to generate response
    private function getAIResponse(string $userInput): string
    {
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $userInput],
            ],
        ]);

        return $result->choices[0]->message->content;
    }
}
