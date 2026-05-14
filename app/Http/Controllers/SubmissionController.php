<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function submit()
    {
        return view('submit');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string'],
        ]);

        Submission::create($validated);

        return redirect()->route('history');
    }

    public function history()
    {
        $submissions = Submission::query()
            ->orderBy('created_at')
            ->get();

        return view('history', compact('submissions'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
