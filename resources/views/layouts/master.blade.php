<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{--Icons--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>{{config('app.name' , 'PixiTechnologies')}}</title>

    {{--Scripts--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    @include('includes.header')

    <div class="container">
    @yield('content')
    </div>

    @include('includes.footer')
</body>
</html>