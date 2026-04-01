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
                <div class="flex gap-4">
                    @guest
                        <x-nav-link href="/login"  :active="request()->is('login')">Login</x-nav-link>
                        <x-nav-link href="/register"  :active="request()->is('register')">Register</x-nav-link>
                    @endguest

                    @auth 
                        <form action="/logout" method="POST">
                            @csrf 

                            <x-form-button>Logout</x-form-button>
                        </form>                     
                    @endauth
                </div>
            </div>

            <!-- Hero -->
            <div class=" bg-gray-200  border-b-2 shadow-lg  flex justify-center">
                <div class="container flex items-center justify-between p-10 ">
                    <div >
                        <h1 class="text-black text-2xl">{{ $heading }}</h1>
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
        <div class="mt-4">
            {{ $slot }}
        </div>
    </main>
</body>
</html>