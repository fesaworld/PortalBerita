@extends('mainpage.layouts.single')

@section('articlesingle')
    <article>
        <h1 class="h2">{{ $post->title }}</h1>
        <div class="post-slider mt-2 mb-2">
            <img src="{{ asset('mainpage/images/post/post-2.jpg') }}" class="card-img" alt="post-thumb">
        </div>
        <ul class="card-meta my-3 list-inline">
            <li class="list-inline-item">
                <span class="ti-calendar"> Published :
                    {{ $post->created_at->diffForHumans() }} </span>
            </li>
            <li class="list-inline-item">
                <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item">
                        <a href="/categories/">{{ $post->category->category_name }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="content">
            {!! $post->body !!}
        </div>
    </article>
@endsection
