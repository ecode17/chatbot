<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AIService;

class AIController extends Controller
{
    protected $aiService;

    public function __construct(AIService $aiService)
    {
        $this->aiService = $aiService;
    }

    public function showForm()
    {
        $messages = session()->get('messages', []);
        return view('index', ['messages' => $messages]);
    }

    public function processInput(Request $request)
    {
        $request->validate([
            'user_input' => 'required|string',
        ]);

        $userInput = $request->input('user_input');

        // Get the previous messages from the session
        $messages = session()->get('messages', []);
        $messages[] = ['role' => 'user', 'content' => $userInput];

        // Call the AI service to get the response
        $aiResponse = $this->aiService->getResponse($userInput);

        // Add the AI's response to the messages
        $messages[] = ['role' => 'ai', 'content' => $aiResponse];

        // Save the messages back to the session
        session()->put('messages', $messages);

        // Return the updated view with the messages
        return view('index', ['messages' => $messages]);
    }
}
