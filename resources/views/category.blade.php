@extends('layouts.main')

@section('isi')
    <h1>Post Category : {{ $category }}</h1>
    @forelse ($posts as $post)
        <article class="mt-4">
            <h3><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
        </article>  
    @empty
        <h4>*Empty*</h4>
    @endforelse
@endsection