<!DOCTYPE html>
<head>
    <title>My Portfolio</title>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">

</head>


<body>

    <div style="background-image: url({{url(asset('images/bg-image.jpg'))}}); background-repeat: repeat-y; height:100%; width:100%; background-size: cover">

        @component('components.navbar')
        @endcomponent

        <hr class="hr-color">

            @hasSection('content')
                @yield('content')
            @endif
    </div>





<footer class="footer-style">
    <div class="container">

        TESTE
    </div>
</footer>

</body>
</html>
