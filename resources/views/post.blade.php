@extends('layouts.main')

@section('isi')
    <article>
        <h2 class="mb-4">{{ $post->title }}</h2>
        <p>By: <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/blog"> Back to Blog</a>
@endsection