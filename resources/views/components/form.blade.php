@props(['method' => 'POST', "action" => ''])

<form role="form" method="{{$method === 'GET' ?: 'POST' }}" action="{{ $action }}">
    @csrf

    @if (!in_array($method, ['GET', 'POST']))
        @method($method)        
    @endif

    {{$slot}}

</form>