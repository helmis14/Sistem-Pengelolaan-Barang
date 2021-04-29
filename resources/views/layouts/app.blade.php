<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
        <script src="{{ asset('assets/js/charts-lines.js') }}" defer></script>
        <script src="{{ asset('assets/js/charts-pie.js') }}" defer></script>
        <style>
            #loader {
              transition: all 0.3s ease-in-out;
              opacity: 1;
              visibility: visible;
              position: fixed;
              height: 100vh;
              width: 100%;
              background: #fff;
              z-index: 90000;
            }

            #loader.fadeOut {
              opacity: 0;
              visibility: hidden;
            }

            .spinner {
              width: 40px;
              height: 40px;
              position: absolute;
              top: calc(50% - 20px);
              left: calc(50% - 20px);
              background-color: #333;
              border-radius: 100%;
              -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
              animation: sk-scaleout 1.0s infinite ease-in-out;
            }

            @-webkit-keyframes sk-scaleout {
              0% { -webkit-transform: scale(0) }
              100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
              }
            }

            @keyframes sk-scaleout {
              0% {
                -webkit-transform: scale(0);
                transform: scale(0);
              } 100% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
                opacity: 0;
              }
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        @include('sweet::alert')
        <div id='loader'>
            <div class="spinner"></div>
        </div>
        <script>
            window.addEventListener('load', function load() {
                const loader = document.getElementById('loader');
                setTimeout(function() {
                    loader.classList.add('fadeOut');
                }, 300);
            });
        </script>
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

            @include('components.sidebar')

            <div class="flex flex-col flex-1 w-full">

                @include('components.heading')

                <main class="h-full overflow-y-auto">
                    <div class="container px-6 my-6 py-auto mx-auto grid">

                        {{ $slot }}

                      	{{-- @yield('content') --}}

                    </div>
                </main>
            </div>
        </div>
        @if (Session::has('sweet_alert.alert'))
        <script>
          swal({
              text: "{!! Session::get('sweet_alert.text') !!}",
              title: "{!! Session::get('sweet_alert.title') !!}",
              timer: {!! Session::get('sweet_alert.timer') !!},
              icon: "{!! Session::get('sweet_alert.type') !!}",
              buttons: "{!! Session::get('sweet_alert.buttons') !!}",


          });
        </script>
        @endif
    </body>
</html>
