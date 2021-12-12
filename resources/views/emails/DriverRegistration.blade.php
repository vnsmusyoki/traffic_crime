@component('mail::message')
    # Welcome and
    Hi {{ $receiver }}
    <h4><strong>Title: </strong>{{ $topic }}</h4>
    {{ $message }}
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
