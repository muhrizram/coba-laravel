@extends('layouts.main')

@section('isi')
    <h1>Semua Category</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
            </li>
        </ul> 
    @endforeach 

@endsection