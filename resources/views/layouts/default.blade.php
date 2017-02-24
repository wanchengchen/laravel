<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'WELCOME') - WanChengCheng Blog</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/default.css">
</head>
<body>
@include('layouts._header')

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared.messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
</body>
</html>