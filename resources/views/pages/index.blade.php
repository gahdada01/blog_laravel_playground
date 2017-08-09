@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
    <p> Richard's Blog..</p>
        <p>
            <a class="btn btn-lg btn-primary" href="/login" role="button">Login</a> 
            <a class="btn btn-lg btn-success" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection