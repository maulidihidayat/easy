<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'message' => ['required', 'string'],
            'photo' => ['nullable', 'image', 'max:2048'],
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('feedback', 'public');
        }

        Feedback::create([
            'name' => $validated['name'],
            'email' => $validated['email'] ?? null,
            'rating' => $validated['rating'],
            'message' => $validated['message'],
            'photo_path' => $photoPath,
            'status' => 'pending',
        ]);

        return back()->with('success_feedback', 'Terima kasih! Feedback Anda telah dikirim dan akan segera kami review.');
    }
}



