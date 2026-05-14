<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Thought Archive' }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f8f9fb; color: #1f2937; }
        nav { background: #111827; padding: 1rem; display: flex; gap: 1rem; }
        nav a { color: #fff; text-decoration: none; }
        main { max-width: 720px; margin: 2rem auto; background: #fff; border-radius: 8px; padding: 1.5rem; box-shadow: 0 2px 6px rgba(0,0,0,.08); }
        textarea { width: 100%; min-height: 120px; padding: .5rem; }
        button { margin-top: .75rem; padding: .6rem 1rem; cursor: pointer; }
        .history-stack { max-height: 360px; overflow-y: auto; border: 1px solid #e5e7eb; border-radius: 6px; padding: .75rem; }
        .history-item { margin-bottom: .75rem; padding-bottom: .75rem; border-bottom: 1px solid #e5e7eb; }
        .history-item:last-child { margin-bottom: 0; border-bottom: none; padding-bottom: 0; }
        .error { color: #b91c1c; margin-top: .5rem; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('submit') }}">Submit</a>
        <a href="{{ route('history') }}">History</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
