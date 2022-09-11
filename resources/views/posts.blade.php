@extends('layouts.main')

@section('isi')
    <h1>Semua Post</h1>
    @foreach ($posts as $post)
        <article class="mt-4 border-bottom pb-3">
            <h3><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
            <p>By: <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
        </article>        
    @endforeach 

@endsection