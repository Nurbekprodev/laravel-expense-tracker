<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-blue-400">
        <div class="container mx-auto flex justify-between items-center p-6">
            
            <nav class="flex gap-8">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
                <x-nav-link href="/expenses" :active="request()->is('expenses')">Expenses</x-nav-link>
            </nav>

            <div class="flex gap-4">
                @guest
                    <x-nav-link href="/login">Login</x-nav-link>
                    <x-nav-link href="/register">Register</x-nav-link>
                @endguest

                @auth 
                    <form action="/logout" method="POST">
                        @csrf 
                        <x-form-button>Logout</x-form-button>
                    </form>                     
                @endauth
            </div>

        </div>
    </header>

    <!-- Hero -->
    <div class="bg-gray-100 border-b shadow">
        <div class="container mx-auto flex justify-between items-center p-6">
            <h1 class="text-3xl  font-semibold">{{ $heading }}</h1>

            <x-button href="/expenses/create">
                Add Expense
            </x-button>
        </div>
    </div>

    <main class="container mx-auto mt-6">
        {{ $slot }}
    </main>
</body>
</html>