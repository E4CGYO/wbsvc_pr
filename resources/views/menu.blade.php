@extends('layouts.layout2')

@section('title', 'Blog Home')

@section('content')

@if (session('success'))
    <p><strong>{{ session('success') }}</strong></p>
@endif

<h1>My Blog</h1>
<hr>

<form action="/menu" method="GET" class="mb-3">
    <input type="text" name="search"
           value="{{ $search ?? '' }}"
           placeholder="Cari post...">
    <button type="submit">Cari</button>

    @if ($search ?? false)
        <a href="/menu">clear</a>
    @endif
</form>

<hr>

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Menu Resep</h2>
        <a href="/post/create" class="btn btn-primary">
            + Tambah Post Baru
        </a>
    </div>

    <div class="container-fluid py-5" style="background:#FFE6C9;">

    @foreach($posts as $index => $post)

        <div class="container mb-5">
            <div class="row align-items-center">

                {{-- TEKS --}}
                <div class="col-md-6 {{ $index % 2 == 0 ? '' : 'order-md-2' }}">
                    <h2 class="fw-bold">
                        {{ $post->title }}
                    </h2>

                    <p class="text-muted mt-3">
                        {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}
                    </p>

                    <a href="{{ route('post.show', $post->id) }}"
                       class="btn btn-danger rounded-pill px-4 mt-3">
                        Resep
                    </a>
                </div>

                {{-- GAMBAR --}}
                <div class="col-md-6 text-center {{ $index % 2 == 0 ? '' : 'order-md-1' }}">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}"
                             class="img-fluid hero-img">
                    @else
                        <img src="/images/default.jpg"
                             class="img-fluid hero-img">
                    @endif
                </div>

            </div>
        </div>

    @endforeach

</div>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $posts->links() }}
        <p class="small text-muted mt-2">
            Menampilkan {{ $posts->firstItem() }}
            hingga {{ $posts->lastItem() }}
            dari total {{ $totalposts }} post
        </p>
    </div>

</div>

@endsection
