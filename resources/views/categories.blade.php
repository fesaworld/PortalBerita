@extends('mainpage.layouts.main')

@section('article')
    <h2 class="h5 section-title">Category : </h2>
    @foreach ($categories as $category)
        <article class="card mb-2">
            <div class="card-body">
                <ul>
                    <h3><a href="/categories/{{ $category->category_slug }}">{{ $category->category_name }}</a></h3>
                </ul>
            </div>
        </article>
    @endforeach
@endsection
