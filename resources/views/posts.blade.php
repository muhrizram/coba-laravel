@extends('layouts.main')

@section('isi')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h3><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h3>
            <h4>By: {{ $post['author'] }}</h4>
            <p>{{ $post['body'] }}</p>
        </article>        
    @endforeach

@endsection