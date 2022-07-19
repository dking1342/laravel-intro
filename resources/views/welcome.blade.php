@extends("layouts.layout")

@section("content")
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <img src="/img/pizza-house.png" alt="pizza house">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 title">
                The North's Best Pizza
            </div>
            <p class="message">{{ session("message") }}</p>
            <a href="/pizzas/create">Order a Pizza</a>
        </div>
    </div>
@endsection