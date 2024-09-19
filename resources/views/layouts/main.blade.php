<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indigo Zenith Pc</title>
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/x-icon">
    @vite("resources/css/app.css")
</head>
<body class=" bg-white">
    <x-navbar />
    @yield('content')
</body>
</html>