<!doctype html>
<html lang="en">

@section('htmlheader')
   @include('partials.htmlheader')
@show
{{--Si no és diu res d'utilitza aquesta, sino la que es dóna a la secció-show--}}


<body>

@yield('content')

@include('partials.footer')

@section('scripts')
    @include('partials.scripts')
@show

</body>
</html>