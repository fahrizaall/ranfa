<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css')}}">

</head>
<body>
    <div id="app">

        <div id="navbar">
            <div class="brand">
            <a href="/" class="brand-name">Ranfa</a>
            </div>
            <div class="auth">
                 
                @guest
                    <div class="btn login">
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                    @if (Route::has('register'))
                    <div class="btn register">
                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                    @endif

                    @else
                    
                    <a href="{{ route('logout') }}"
                    id="lg"
                    style="display: none"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>

                    
                    @if (Auth::check())
                        <a href="{{ route('blog.create') }}" class="create-post-btn">create post</a>
                    @endif
                    
                    <span class="user" onclick="toggleLg()">{{ Auth::user()->name }}</span>
                @endguest
            </div>  
        </div>

        <div class="py-4">
            @yield('content')
        </div>
    </div>

    <script>
        function toggleLg() {
            var x = document.getElementById("lg");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>
</html>
