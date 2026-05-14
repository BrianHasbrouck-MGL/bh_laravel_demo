<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} | {{ config('app.name') }}</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; background: #f7f7f7; color: #1f2937; }
            header { background: #111827; color: #fff; padding: 1rem 2rem; }
            nav a { color: #fff; margin-right: 1rem; text-decoration: none; font-weight: 600; }
            main { max-width: 800px; margin: 2rem auto; background: #fff; padding: 2rem; border-radius: 8px; }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </nav>
        </header>
        <main>
            <h1>{{ $heading }}</h1>
            <p>{{ $content }}</p>
        </main>
    </body>
</html>
