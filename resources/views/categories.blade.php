@extends('layouts.main')

@section('container')
    
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/categories/{{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        {{-- <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div> --}}
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            {{-- <p>
                                <small class="text-muted">
                                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                </small>
                                </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primaru">Read more</a> --}}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection

