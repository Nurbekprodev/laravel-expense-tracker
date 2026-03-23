<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header >
        <nav>
            <div class="nav-links container">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
                <x-nav-link href="/expenses" :active="request()->is('expenses')">Expenses</x-nav-link>
            </div>
            <div>
                <x-button href="/expenses/create">Add Expense</x-button>
            </div>
        </nav>
    </header>

    <div class="container">
        <main>
            <h1>{{ $heading }}</h1>
            <div>
                {{ $slot }}
            </div>
        </main>
    </div>
    
</body>
</html>