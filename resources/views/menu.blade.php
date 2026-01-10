@extends('layouts.layout2')

@section('mnu', 'Blog Home')

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

    </div>

<div class="container mt-4">
    <div class="row">

       <div class="container mt-4">
    <div class="row">
        @foreach($data as $imguniv)
            <div class="col-12 mb-5">
            <div class="card border-0 shadow-sm">
                <div class="row g-0">
                {{-- FOTO (Kiri) --}}
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $imguniv->image) }}" class="img-fluid rounded-start" alt="{{ $imguniv['nama'] }}" style="object-fit: cover; width: 100%; height: 200px;">
                </div>
                {{-- KONTEN (Kanan) --}}
                <div class="col-md-8">
                    <div class="card-body">
                    {{-- NAMA --}}
                    <h4 class="card-title fw-bold">{{ $imguniv['nama'] }}</h4>
                    {{-- DESKRIPSI --}}
                    <p class="card-text text-muted">{{ $imguniv['deskripsi'] }}</p>
                    {{-- LINK READ MORE --}}
                    <a href="{{ url('/post/' . $imguniv['id']) }}" class="text-decoration-none">
                        Read More →
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>

    </div>
</div>
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">

    <!-- Deskripsi di kiri -->
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to additional content.
          This content is a little bit longer.
        </p>
        <p class="card-text">
          <small class="text-body-secondary">Last updated 3 mins ago</small>
        </p>
      </div>
    </div>

    <!-- Gambar di kanan -->
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-end" alt="...">
    </div>

  </div>
</div>



    {{-- Pagination --}}
    <div class="mt-4">
        {{ $data->links() }}
        <p class="small text-muted mt-2">
            Menampilkan {{ $data->firstItem() }}
            hingga {{ $data->lastItem() }}
            dari total {{ $totalposts }} post
        </p>
    </div>

</div>

@endsection
