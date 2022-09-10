@extends('layouts.main')

@section('isi')
    <h1>Semua Post</h1>
    @foreach ($posts as $post)
        <article class="mt-4">
            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
        </article>        
    @endforeach 

@endsection