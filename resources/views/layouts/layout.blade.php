<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    @stack('head-scripts')
</head>
<body>

@include('partials.menu')

@yield('content')

@include('partials.footer')

</body>
</html>
