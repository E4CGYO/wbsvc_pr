@extends('layouts.layout2')

@section('title', 'Blog Home')

@section('content')

    {{-- Success Message --}}
    @if (session('success'))
        <p><strong>{{ session('success') }}</strong></p>
    @endif

    <h1>My Blog</h1>

    <hr>

    {{-- Form Search --}}
    <form action="/" method="GET" class="mb-3">
        <input type="text"
               value="{{ $search ?? '' }}"
               name="search"
               placeholder="Cari post...">
        <button type="submit">Cari</button>

<<<<<<< Updated upstream
        @if ($search ?? false)
            <a href="/">clear</a>
        @endif
    </form>

    {{-- Hasil pencarian --}}
    @if ($search ?? false)
        @if($posts->total() > 0)
            <p>{{ $posts->total() }} hasil untuk "{{ $search }}"</p>
        @else
            <p>Tidak ada hasil untuk "{{ $search }}"</p>
        @endif
    @endif

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

                            <h5 class="card-title">
                                {{ $post->title }}
                            </h5>

                            {{-- Excerpt --}}
                            @if($post->excerpt)
                                <p class="text-muted small">
                                    {{ $post->excerpt }}
                                </p>
                            @endif

                            <div class="mt-auto">
                                <a href="/post/{{ $post->id }}"
                                   class="btn btn-sm btn-outline-primary">
                                    Detail
                                </a>
                            </div>

                        </div>
                    </div>

=======
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
>>>>>>> Stashed changes
                </div>
            @endforeach

<<<<<<< Updated upstream
        </div>

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $posts->links() }}

            <p class="small text-muted mt-2">
                Menampilkan {{ $posts->firstItem() }}
                hingga {{ $posts->lastItem() }}
                dari total {{ $totalposts }} post
            </p>
=======
            </div>
>>>>>>> Stashed changes
        </div>

    @endforeach

</div>

@endsection
