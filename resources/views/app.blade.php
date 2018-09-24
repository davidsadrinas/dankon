<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Figured Blog') }}</title>
    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Figured Blog
                </a>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        @guest
                            
                                <a class="btn pull-right" href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                            
                                <a class="btn pull-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                            
                        @else
                            
                                <a id="navbarDropdown" class="btn pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>
                               <a class="btn pull-right" href="{{ url('/dashboard-admin') }}">
                                    Panel Admin
                                </a>

                                <a class="btn pull-right" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
                    
                </div>

            </div>
        </nav>
            <main class="py-4 container">
                    @yield('content')
            </main>
            
    </div>
</body>
</html>
