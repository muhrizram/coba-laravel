@extends('layouts.main')

@section('isi')
    @foreach ($posts as $post)
        <h3>{{ $post['title'] }}</h3>
        <h4>By: {{ $post['author'] }}</h4>
        <p>{{ $post['body'] }}</p>        
    @endforeach

@endsection