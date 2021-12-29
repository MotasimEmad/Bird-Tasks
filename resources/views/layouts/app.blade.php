<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="/css/app.css">
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <div id="app">
        <nav class="mx-auto flex items-center justify-between bg-white border-b-2 py-2 px-12">
            <a href="{{ route('projects.index') }}" class="text-gray-800 font-bold text-2xl">Birdboard</a>
            <div class="flex flex-col md:-mx-4 md:flex-row text-black font-semibold"
                :class="isOpen ? 'block' : ['hidden' , 'md:block']">
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    @if (Route::has('register'))
                        <a class="ml-4 mr-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                        <div class="flex flex-row items-center">
                           
                            <h1 class="ml-2">
                                {{ Auth::user()->name }} |
                            </h1>
                            <a class="ml-2 text-red-400" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </div>
                    @endguest
                </div>
            </nav>
        <main class="mx-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>



<!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div> -->