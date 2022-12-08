@extends('dashboard.layout')
@section('content')
        <h1>Post {{ $post->title }}</h1>
        <hr>
        <p>{{ $post->posted }}</p>
        <p>{{ $post->description }}</p>
        <p>{{ $post->content }}</p>
       
    
@endsection