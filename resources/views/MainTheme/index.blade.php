<!doctype html>
<html lang="en">

<head>
    @include('MainTheme/mainThemeHead')
</head>

<body>

    @include('MainTheme/navbar')

    @yield('body')



    @include('MainTheme/footer')


    @include('MainTheme/mainThemeJS')
</body>

</html>