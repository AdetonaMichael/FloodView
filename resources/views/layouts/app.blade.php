<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Michael Adetona" />
        <title>{{ config('app.name', 'Flood View') }}</title>

                <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
                <meta property="og:site_name" content="" /> <!-- website name -->
                <meta property="og:site" content="" /> <!-- website link -->
                <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
                <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
                <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
                <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
                <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="css/styles.css" rel="stylesheet" />
        @yield('css')
        @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
        <script src="https://cdn.tiny.cloud/1/914cbs1n4e1r1683f7ere86yes0kemwesp1tctsdsft2pq6k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            {{-- <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                </div>
            </header> --}}

            <!-- Page Content -->
            <main>

             @yield('content')

            </main>
        </div>
           <!-- Scripts -->

           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
           <script src="{{ mix('js/app.js') }}" defer></script>
        @livewireScripts
        <script src="{{ asset('js/toastr.min.js') }}"></script>

        <script>
        @if(Session::has('success'))
        toastr.success("{{ session()->get('success') }}")
        @elseif (Session::has('error'))
        toastr.error("{{ session()->get('success')  }}")
        @endif
        </script>

        @yield('script')
    </body>
</html>
