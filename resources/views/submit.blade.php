@extends('layouts.app')

@section('content')
    <h1>Submit Your Thoughts</h1>
    <p>Use this form to submit a thought that will be saved to history.</p>

    <form method="POST" action="{{ route('submit.store') }}">
        @csrf
        <label for="message">Thought</label>
        <textarea id="message" name="message" required>{{ old('message') }}</textarea>
        @error('message')
            <p class="error">{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
@endsection
