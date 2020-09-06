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
        <form class="mt-4" id="formContact" action="/" method="post">

            @csrf

            <div class="form-group row-cols-xl-3">
                <label class="label-form" for="nameForm">Nome</label>
                <input type="text" class="form-control @error('nameForm') is-invalid @enderror" id="nameForm" name="nameForm" placeholder="Digite seu Nome">
                @error('nameForm')
                    <div class="mt-1">
                        <small class="text-error">{{$message}}</small>
                    </div>
                @enderror
            </div>
            <div class="form-group row-cols-xl-3">
                <label class="label-form" for="emailForm">Email</label>
                <input type="email" class="form-control @error('emailForm') is-invalid @enderror" id="emailForm" name="emailForm" placeholder="Digite seu Email">
                @error('emailForm')
                <div class="mt-1">
                    <small class="text-error">{{$message}}</small>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="label-form" for="messageForm">Mensagem</label>
                <textarea class="form-control @error('messageForm') is-invalid @enderror" id="messageForm" name="messageForm" placeholder="Deixe aqui sua mensagem" rows="5"></textarea>
                @error('messageForm')
                <div class="mt-1">
                    <small class="text-error">{{$message}}</small>
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>


        </form>
        </div>


@if($confirm == 1)
    <div class="modal" id="modalEmail" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Email</h5>
                </div>
                <div class="modal-body">
                    <p>Email enviado com sucesso</p>
                </div>
                <div style="display: none" id="confirmVar">1</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" onclick="closeModal()">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    @endif



    <script src="{{url(asset('js/lottie.js'))}}"></script>
            <script src="{{url(asset('js/animation.js'))}}"></script>
            <script src="{{url(asset('js/app.js'))}}"></script>

@endsection

<script>

    setTimeout(showModal, 2000);

    function showModal(){
        if(document.querySelector('#confirmVar').innerHTML == 1){
            $('#modalEmail').modal('show');
        }
    }

    function closeModal(){
        $('#modalEmail').modal('hide');
    }

</script>

</body>


