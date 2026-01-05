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

    <div class="row g-4">

        @foreach($posts as $post)
            <div class="col-md-4 col-lg-3">

                <div class="card h-100 shadow-sm">

                    {{-- Gambar --}}
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}"
                             class="card-img-top"
                             style="height:200px; object-fit:cover;">
                    @else
                        <div style="height:200px; background:#f1f1f1"
                             class="d-flex align-items-center justify-content-center text-muted">
                            No Image
                        </div>
                    @endif

                    <div class="card-body text-center d-flex flex-column">

                        <h5 class="card-title">{{ $post->title }}</h5>

                        @if($post->excerpt)
                            <p class="text-muted small">
                                {{ $post->excerpt }}
                            </p>
                        @endif

                        <div class="mt-auto d-flex justify-content-center gap-1">

                            {{-- DETAIL (TIDAK DIUBAH) --}}
                            <a href="{{ route('post.show', $post->id) }}"
                               class="btn btn-sm btn-outline-primary">
                                Detail
                            </a>

                            {{-- HAPUS (FITUR BARU, AMAN) --}}
                            <form action="{{ route('post.destroy', $post->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus postingan ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    Hapus
                                </button>
                            </form>

                        </div>

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
