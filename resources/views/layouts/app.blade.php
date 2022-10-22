<!DOCTYPE HTML>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
<div class="container content-wrapper" id="demo-content" style="margin-bottom:50px;">
@yield('content')
</div>
@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>