@extends('layouts.main')

@section('isi')
    <h1>Semua Post</h1>
    @foreach ($posts as $post)
        <article class="mt-4">
            <h3><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h3>
            <h4>By: {{ $post['author'] }}</h4>
            <p>{{ $post['body'] }}</p>
        </article>        
    @endforeach

@endsection