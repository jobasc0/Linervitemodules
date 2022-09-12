<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead

</head>
<body>
 <div class="theme-layout">   
 @inertia
</div>
</body>
</html>

