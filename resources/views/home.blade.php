@extends('layouts.app')


@section('pageMain')

<h1 >
    @foreach ($trains as $train )
    <div>
        {{$train}};
    </div>
    <br>
    @endforeach
</h1>

@endsection
