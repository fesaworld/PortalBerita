@extends('mainpage.layouts.main')


@section('article')
    <h2 class="h5 section-title">{{ $title }}</h2>
    @foreach ($posts as $post)
        <article class="card mb-4">
            <div class="post-slider">
                <img src="{{ asset('mainpage/images/post/post-10.jpg') }}" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
                {{-- <h3 class="mb-3"><a class="post-title" href="posts/{{ $post->slug }}">{{ $post->title }}</a></h3> --}}
                <h3 class="mb-3"><a class="post-title" href="single/{{ $post->slug }}">{{ $post->title }}</a></h3>
                <ul class="card-meta list-inline">
                    <li class="list-inline-item">
                        {{-- {{ $post->user->name }} --}}
                    </li>
                    <li class="list-inline-item">
                        <i class="ti-calendar">
                        </i> Published :
                        {{ $post->created_at->diffForHumans() }}
                    </li>
                    <li class="list-inline-item">
                        <ul class="card-meta-tag list-inline">
                            <li class="list-inline-item">
                                {{-- <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> --}}
                                <a href="/categories/">{{ $post->category->category_name }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                {{-- <p>{{ $post['excerpt'] }}</p> --}}
                {{-- <a href="posts/{{ $post->slug }}" class="btn btn-outline-primary">Read More</a> --}}
                <a href="single/{{ $post->slug }}" class="btn btn-outline-primary">Read More</a>
            </div>
        </article>
    @endforeach

    {{ $posts->links() }}
@endsection
{{-- @else
    @section('article')
        <article class="card mb-4">
            <div class="card-body">
                <h3 class="mb-3">Post Not Found.</h3>
            </div>
        </article>
    @endsection
@endif --}}


@section('search')
    <aside class="col-lg-4 sidebar-home">
        @include('mainpage.components.categories')
    </aside>
@endsection
