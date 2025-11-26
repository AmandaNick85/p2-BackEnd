<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif; margin: 0; background: #f7fafc; }
        .container { max-width: 900px; margin: 2rem auto; background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        header { margin-bottom: 1rem; display: flex; justify-content: space-between; align-items: center; }
        a.button, button.button { display: inline-block; background: #2563eb; color: white; padding: 0.5rem 0.75rem; border-radius: 6px; text-decoration: none; border: none; cursor: pointer; }
        a.button.secondary { background: #64748b; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 0.5rem; border-bottom: 1px solid #e2e8f0; text-align: left; }
        .actions { display: flex; gap: 0.5rem; }
        .status { background: #dcfce7; color: #166534; padding: 0.5rem; border-radius: 6px; margin-bottom: 1rem; }
        form { display: grid; gap: 0.75rem; }
        input[type=text], textarea { width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 6px; }
        label { font-weight: 600; }
    </style>
    @yield('head')
</head>
<body>
<div class="container">
    <header>
        <h1>@yield('header', 'Categorias')</h1>
        <nav>
            <a class="button secondary" href="{{ url('/') }}">Home</a>
            <a class="button" href="{{ route('categories.index') }}">Categorias</a>
        </nav>
    </header>
    @if(session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif
    @yield('content')
</div>
</body>
</html>

