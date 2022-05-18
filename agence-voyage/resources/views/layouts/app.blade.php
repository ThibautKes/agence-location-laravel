<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LoCars') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:orangered;margin-left:10px;"><path d="M22.222 11.556c.245 0 .444.199.444.444v.454c0 .705-.823.879-1.436.879l-.965-1.778h1.957zm-1.281 3.116c.568 1.054.841 2.002.841 3.259 0 1.218-.353 2.252-.894 3.539v1.642c.001.49-.397.888-.888.888h-1.333c-.491 0-.889-.398-.889-.889v-.889h-11.556v.889c0 .491-.398.889-.889.889h-1.333c-.491 0-.889-.398-.889-.889v-1.642c-.541-1.287-.894-2.321-.894-3.539 0-1.257.273-2.205.841-3.259.737-1.366 1.646-3.069 2.604-4.668.736-1.229 1.122-1.517 2.025-1.679 1.363-.244 2.594-.324 4.313-.324s2.95.08 4.312.324c.903.162 1.289.451 2.025 1.679.959 1.6 1.868 3.303 2.604 4.669zm-14.274 2.661c0-.736-.597-1.333-1.334-1.333s-1.333.597-1.333 1.333.597 1.333 1.333 1.333 1.334-.596 1.334-1.333zm8.889.889c0-.245-.199-.444-.444-.444h-6.223c-.245 0-.444.199-.444.444s.199.444.444.444h6.222c.246.001.445-.198.445-.444zm2.614-4.913s-.658-1.623-1.45-2.793c-.179-.265-.458-.446-.773-.503-1.343-.242-2.52-.318-3.947-.318s-2.604.077-3.947.318c-.315.057-.593.238-.773.503-.792 1.17-1.45 2.793-1.45 2.793 1.458.278 3.83.442 6.17.442s4.712-.163 6.17-.442zm1.83 4.024c0-.736-.597-1.333-1.333-1.333s-1.333.597-1.333 1.333.597 1.333 1.333 1.333c.736.001 1.333-.596 1.333-1.333zm-16.265-5.777h-1.957c-.245 0-.444.199-.444.444v.454c0 .705.823.879 1.436.879l.965-1.777zm13.973-9.556h-5.708v-.608c.001-.814-.708-1.455-1.532-1.387l-4.173.464c-.732.061-1.294.664-1.294 1.387l-.001 3.286c0 .723.562 1.325 1.294 1.386l4.171.466c.825.069 1.535-.572 1.535-1.388v-.607h2.224l.808-.988.815.989.871-.988.811.988 1.471-1.294-1.292-1.706zm-10.708 3.534l-.664-.06c-.188-.015-.336-.166-.335-.344v-3.286c0-.177.148-.329.335-.344l.664-.059v4.093z"/></svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Se créer un compte') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link" href="/reservations" role="button" v-pre>
                                    Mes réservations
                                </a>

                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pb-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
