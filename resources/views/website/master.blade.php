<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Protfolio-1</title>
    @include('website.include.style')
</head>

<body>
    @include('website.include.header')

    @yield('body')

    @include('website.include.footer')
    @include('website.include.script')
</body>

</html>
