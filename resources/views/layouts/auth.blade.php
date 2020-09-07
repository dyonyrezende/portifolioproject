<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">


</head>


<body class="img-background">



@component('components.navbar')
@endcomponent

<hr class="hr-color">

@hasSection('content')
    @yield('content')
@endif


</body>
</html>
