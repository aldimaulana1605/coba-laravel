@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. Aldi Maulana Bahari in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {{-- <h5>{{ $post["author"] }}</h5> --}}

    {!! $post->body !!}

<a href="/posts">Back to Posts</a>

@endsection