@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h2>

    {{-- <h5>{{ $post["author"] }}</h5> --}}

    {!! $post->body !!}

<a href="/posts">Back to Posts</a>

@endsection