<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kingsunitedindia</title>
    @include('partial.styleLink')
</head>

<body>
    @include('partial.header')
    @yield('content')
    @include('partial.footer')
    @include('partial.jsLink')
</body>

</html>