@extends('layouts.layout2')

@section('mnu', 'Blog Home')

@section('content')

@if (session('success'))
    <p><strong>{{ session('success') }}</strong></p>
@endif


<!-- <hr>

<form action="/menu" method="GET" class="mb-3">
    <input type="text" name="search"
           value="{{ $search ?? '' }}"
           placeholder="Cari post...">
    <button type="submit">Cari</button>

    @if ($search ?? false)
        <a href="/menu">clear</a>
    @endif
</form>

<hr> -->

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4 mt-4" >
        <h2 class="mb-0">Menu Resep</h2>
    </div>


<div class="container mt-4">
    <div class="row">

       <div class="container mt-4">
    <div class="row">
        @foreach($data as $img)
            <div class="col-12 mb-5">
            <div class="card border-0 shadow-sm">
                <div class="row g-0">
                {{-- FOTO (Kiri) --}}
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $img->image) }}" class="img-fluid rounded-start" alt="{{ $img['nama'] }}" style="object-fit: cover; width: 100%; height: 200px;">
                </div>
                {{-- KONTEN (Kanan) --}}
                <div class="col-md-8">
                    <div class="card-body">
                    {{-- NAMA --}}
                    <h4 class="card-title fw-bold">{{ $img['title'] }}</h4>
                    {{-- DESKRIPSI --}}
                    <p class="card-text text-muted">{{ $img['content'] }}</p>
                    {{-- LINK READ MORE --}}
                    <a href="{{$img['linkfile'] }}" class="text-decoration-none">
                      <button class="btn btn-primary">dapatkan resep📃</button>
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


{{-- Pagination --}}
    <div class="container d-flex col-12 justify-content-center align-items-center">
        {{ $data->links() }}
        <p class="small text-muted mt-2">
            <!-- Menampilkan {{ $data->firstItem() }}
            hingga {{ $data->lastItem() }}
            dari total {{ $totalposts }} post -->
        </p>
    </div>



</div>

@endsection
