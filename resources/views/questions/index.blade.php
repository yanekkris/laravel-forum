@extends('layouts/layout')

@section('content')
        <section id="banner">
            <div class="container">
                <h1>Questions</h1>
            </div>
        </section>
        
        <section id="questions">
            <div class="container">
                @foreach ($questions as $q)
                <div class="question">
                    <div class="question-left">
                        <div class="question-name">
                        <a href="/questions/{{$q->id}}">{{$q->title}}</a>
                        </div>
                        <div class="question-info">
                            asked at {{$q->created_at}} by <a href="">Alan</a>
                        </div>
                    </div>
                    <div class="question-right">
                        <div class="question-stat">
                        <span>{{count($q->answer)}}</span>
                            <label>responses</label>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

@endsection