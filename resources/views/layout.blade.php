<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    @include('head')
</head>
<body>
<div class="body_page  d-flex flex-column justify-content-between">
    <header class="header active">@include('header')</header>
    <main id="app">
        @if(session()->has('message'))
            <div class="alert alert-success  main-container" role="alert">
                <strong>success</strong>
                <h1>{{session()->get('message')}}</h1>
                <a href="{{asset('storage/uploads/'.request()->upload_file)}}">your file</a>
            </div>
        @endif
        @yield('content')
    </main>
    <footer>@include('footer')</footer>
    @include('scripts')
</div>
</body>
</html>
