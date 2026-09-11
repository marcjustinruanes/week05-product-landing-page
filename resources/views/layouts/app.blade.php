<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Badong Footwear — locally rooted footwear from Liliw, Laguna.">
    <title>@yield('title', 'Badong Footwear')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cream text-espresso antialiased">
    @yield('content')
</body>
</html>
