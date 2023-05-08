@extends('layouts.app')


@section('pageMain')

<ul>
 @foreach ($trains as $train )
    
    <li>  
        {{$train->company}} - {{$train->departure_station}} - {{$train->departure_time}};
        <br>
    </li> 
    
    
 @endforeach
</ul>


@endsection
