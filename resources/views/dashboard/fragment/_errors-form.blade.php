@if ($errors->any())
@foreach ($errors->all() as $e)
    <div>
        {{ $e }}
    </div>
@endforeach
@else

@endif