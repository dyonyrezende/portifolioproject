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

        <footer class="footer-style">
            <div class="container">
                <div class="footer-title">
                    Tecnologias e Softwares utilizados na criação deste Website.
                    <div class="mt-4">
                        <img src="{{url(asset('images/softwares.png'))}}" class="img-footer"/>
                    </div>
                </div>
            </div>
        </footer>






</body>
</html>
