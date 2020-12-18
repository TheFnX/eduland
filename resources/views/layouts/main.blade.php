<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
		
		<!-- Title -->
		<title>Eduland &minus; Education & Courses</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		
		<!-- Web Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">	
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <main class="py-4">
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </main>
    </body>
</html>