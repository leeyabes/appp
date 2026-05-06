<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel CRUD') }}</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7fafc; color: #1f2937; margin: 0; }
        .container { max-width: 860px; margin: 32px auto; padding: 0 16px; }
        .card { background: #ffffff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.08); }
        .button { display: inline-block; background: #2563eb; color: white; text-decoration: none; padding: 10px 16px; border-radius: 8px; }
        .button:hover { background: #1d4ed8; }
        .input, .textarea, .select { width: 100%; padding: 10px 12px; border: 1px solid #d1d5db; border-radius: 8px; margin-top: 6px; margin-bottom: 16px; }
        .error { color: #b91c1c; margin-bottom: 12px; }
        .flash { padding: 14px 18px; background: #ecfccb; border: 1px solid #d9f99d; border-radius: 10px; margin-bottom: 18px; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { padding: 12px 10px; border-bottom: 1px solid #e5e7eb; text-align: left; }
        th { background: #f3f4f6; }
        .actions a, .actions form { display: inline-block; margin-right: 8px; }
        .danger { background: #dc2626; }
        .danger:hover { background: #b91c1c; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <header style="display:flex; justify-content:space-between; align-items:center; margin-bottom:24px;">
                <div>
                    <h1 style="margin:0;">{{ config('app.name', 'Laravel CRUD') }}</h1>
                    <p style="margin:4px 0 0; color:#6b7280;">Aplikasi CRUD sederhana untuk tugas mandiri.</p>
                </div>
                <a class="button" href="{{ route('tasks.index') }}">Daftar Task</a>
            </header>

            @if(session('success'))
                <div class="flash">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>
