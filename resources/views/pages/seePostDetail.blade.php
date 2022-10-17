@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/seePost">Home</a></li>
                <li class="breadcrumb-item"><a href="/seePost">Berita</a></li>
                <li class="breadcrumb-item">{{$post->title}}</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        @if($post->image)
                            <img src={{ asset('assets/image/' . $post->image) }} alt={{ $post->title }} class="card-img-top" width="500" height="500">
                        @endif
                    <div class="card-header">
                        <hr>
                        <h3 class="card-title">< <a href="{{ route('posts')}}">Back</a></h3>

                        <div class="card-body">
                                <h1>{{$post->title}}</h1>
                                <p>{!! $post->body !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
@endsection
