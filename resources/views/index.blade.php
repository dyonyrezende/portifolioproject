@extends('layouts.layout')

<body>


    <header>

    </header>

        <main>
            <div style="background-image: url({{url(asset('images/bg-image.jpg'))}}); background-repeat: repeat-y; height:100%; width:100%; background-size: cover">

                @component('components.navbar')
                @endcomponent

                <hr class="hr-color">


                <div class="container">

                </div>

            </div>
        </main>




</body>
