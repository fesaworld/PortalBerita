@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Selamat Datang Di Kopet News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="content">
                <div class="row">
                    @foreach ($posts as $post)
                        <!-- Default box -->
                        <div class="col-4">
                            <div class="card">
                                @if($post->image)
                                    <img src={{ asset('assets/image/' . $post->image) }} alt={{ $post->title }} class="card-img-top" width="500" height="250">
                                @endif
                                <div class="card-header">
                                    <h3 class="card-title"><b>{{ $post->title }}</b></h3>
                                    <div class="card-body">
                                        <p class="card-text">{!! Str::limit($post->body, 10) !!}</p>
                                        <a href={{ route('show', $post->slug )}} class="btn btn-primary">Lihat Berita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- /.card -->
                </div>

        </div>
      </section>
      <!-- /.content -->
@endsection
