@extends('layouts/layout')

@section('content')
    
    @foreach ($questions as $q)
        <div>
        <h2>{{$q->title}}</h2>
            <p>{{$q->text}}</p>
        </div>

        
    @endforeach

@endsection