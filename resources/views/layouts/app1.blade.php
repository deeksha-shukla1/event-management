<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font Awesome -->
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

        <!-- Scripts -->
		@vite(['resources/js/app.js'])
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/datatables.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('js/jszip.min.js') }}"></script>
        <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
    </head>
    <body class="antialiased">
        <div class="wrapper">
            {{-- Main Content Container --}}
            <div class="main">
                {{-- Main Content Area --}}
                <main class="content">
                    <div class="w-100 h-100" data-simplebar>
                        @yield('content')
                    </div>
                </main>				
            </div>
        </div>
        {{-- sweetalert --}}
        {{-- @include('sweetalert::alert') --}}

        <script src="{{ asset('js/app.js') }}"></script>
		</script>
    </body>
</html>
