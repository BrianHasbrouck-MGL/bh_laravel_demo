@extends('layouts.app')

@section('content')
    <h1>History</h1>
    <p>Every message submitted appears below in chronological order.</p>

    <div class="history-stack">
        @forelse ($submissions as $submission)
            <div class="history-item">
                <div>{{ $submission->message }}</div>
                <small>{{ $submission->created_at->format('Y-m-d H:i:s') }}</small>
            </div>
        @empty
            <p>No submissions yet.</p>
        @endforelse
    </div>
@endsection
