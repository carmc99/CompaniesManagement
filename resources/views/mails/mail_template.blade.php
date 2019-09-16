@component('mail::message')
    Hola **{{$name}}**,
    Se acaba de registar una nueva empresa en tu pagina web!

    Presiona click aqui, para ver mas detalles:
    <a href="{{ $link }}">{{ $link }}</a>
    Sinceramente,
    CompanyManagement Team.
@endcomponent