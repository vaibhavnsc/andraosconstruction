<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body class="@if(request()->is('leads*')) leads-page @endif">
@include('partials.header')

<main>
    @yield('content')
</main>

 @include('partials.footer')

 @stack('scripts')

</body>
</html> 