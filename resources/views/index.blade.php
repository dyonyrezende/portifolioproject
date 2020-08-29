@extends('layouts.layout')

<body>

@section('content')
    <div class="container">
        Dyony Rezende
    </div>

    <div class="content-profile">
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

@endsection

</body>
