@php
    $segment1 = request()->segment(1);
    $segment2 = request()->segment(2);
    $segment3 = request()->segment(3);
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/category') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    @guest
        <!-- SidebarSearch Form -->
        <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
            </div>
        </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header"><b>List Berita</b></li>
                @foreach ($posts as $post)
                <li class="nav-item">
                <a href={{ route('show', $post->slug )}} class="nav-link">
                    <p>
                        {{ $post->title }}
                    </p>
                </a>
                </li>

                @endforeach
            </ul>
        </nav>
    @endguest

    @auth
        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/seePost') }}" class="nav-link {{ $segment1 == 'seePost' ? 'active' : null }}">
                    <i class="nav-icon fas fa-solid fa-bars"></i>
                    <p>
                        List Berita
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/category') }}" class="nav-link {{ $segment1 == 'category' ? 'active' : null }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Kategori Berita
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/post') }}" class="nav-link {{ $segment1 == 'post' ? 'active' : null }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Kelola Berita
                    </p>
                    </a>
                </li>
            </ul>
        </nav>
    @endauth
    <!-- /.sidebar -->
  </aside>
