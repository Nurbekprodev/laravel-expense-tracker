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
    <header>
        <div class="">
            <div class=" bg-blue-400 flex justify-center  p-10">
                <nav class="container flex justify-center items-center gap-12">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
                    <x-nav-link href="/expenses" :active="request()->is('expenses')">Expenses</x-nav-link>
                </nav>
            </div>

            <!-- Hero -->
            <div class=" bg-blue-900 flex justify-center">
                <div class="container flex items-center justify-between p-10">
                    <div>
                        <h1 class="text-white text-2xl">{{ $heading }}</h1>
                    </div>
                    <div class="">
                        <div class="flex justify-end items-center container">            
                            <x-button href="/expenses/create" :active="request()->is('expenses/create')">Add Expense</x-button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </header>

    <main>
        <div>
            {{ $slot }}
        </div>
    </main>
</body>
</html>