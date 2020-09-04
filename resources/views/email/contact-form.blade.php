@component('mail::message')

    #Thank you for your message<br>
    <strong>Name: </strong> {{$data['nameForm']}}<br>
    <strong>Email: </strong> {{$data['emailForm']}}<br>
    <strong>Mensagem: </strong> {{$data['messageForm']}}

@endcomponent
