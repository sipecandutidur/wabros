{{ $auth->token }}

@foreach ($contacts as $contact)
    {{ $contact->user }}

@endforeach
