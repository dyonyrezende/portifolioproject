@extends('layouts.layout')

<body class="img-background">

@section('content')

    <!-- animation -->
        <div id="logoAnimation">

        </div>

    <!-- buttons -->
        <div class="container" style="text-align: center">

            <div class="buttons-title">ACESSE MINHAS REDES SOCIAIS</div>


                <div class="social-buttons mt-3">
                    <a href="https://github.com/dyonyrezende" target="_blank">
                        <img src="{{url(asset('images/git_logo.png'))}}" class="social-buttons-icons"/>
                    </a>
                </div>


            <div class="social-buttons">
                <a href="https://www.linkedin.com/in/dyony-rezende-157588169/" target="_blank">
                    <img src="{{url(asset('images/linkedin_logo.png'))}}" class="social-buttons-icons"/>
                </a>
            </div>


        </div>

    <!-- profile section -->
        <div class="content-profile mt-5">
                <div class="container">
                   <div style="background-image: url({{url(asset('images/profile-picture.png'))}});" class="profile-picture-img">
                   </div>

                    <div class="profile-text">
                        Meu nome é Dyony Rezende, tenho 25 anos, moro em Uberlândia-MG. Atualmente estou cursando Análise e Desenvolvimento de Sistemas pela faculdade Pitágoras.
                        Sempre fui fascinado por tecnologia e aos 18 anos comecei a trabalhar como instrutor em uma escola de cursos profissionalizantes onde ministrava aulas de
                        alguns softwares como: Adobe Photoshop, Illustrator, Microsoft Excel, Word, PowerPoint. Hoje busco uma oportunidade para ingressar na área de Desenvolvimento,
                        tendo como base conhecimentos e cursos em: PHP, JavaScript, HTML5, CSS, MySql e Larável.
                    </div>
                </div>

        </div>

    <!-- contact form  -->
        <div class="container mt-5 mb-5">
            <div class="form-title">Entre em contato</div>
        <form class="mt-4" id="formContact">
            <div class="form-group row-cols-xl-3">
                <label class="label-form" for="nameForm">Nome</label>
                <input type="text" class="form-control" id="nameForm" placeholder="Digite seu Nome">
            </div>
            <div class="form-group row-cols-xl-3">
                <label class="label-form" for="emailForm">Email</label>
                <input type="email" class="form-control" id="emailForm" placeholder="Digite seu Email">
            </div>
            <div class="form-group">
                <label class="label-form" for="messageForm">Mensagem</label>
                <textarea class="form-control" id="messageForm" placeholder="Deixe aqui sua mensagem" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>
        </div>

            <script src="{{url(asset('js/lottie.js'))}}"></script>
            <script src="{{url(asset('js/animation.js'))}}"></script>

@endsection



</body>
