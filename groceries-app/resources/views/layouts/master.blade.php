<!doctype html>
<html>
    <head>
        <title>@yield('title', 'Simple Grocery Vue.js App')</title>
        @include('layouts.head')
    </head>
    <body>
        @yield('content')
        @include('layouts.js')
    </body>
</html>
