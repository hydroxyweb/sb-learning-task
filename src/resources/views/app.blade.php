<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
@include('layouts.header')
@include('pages.index')
@include('layouts.footer')
</body>
</html>
