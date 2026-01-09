@extends('layouts.layout2')

@section('title', 'Home')

@section('content')

<!-- ===== CAROUSEL ===== -->
<div class="container my-4">
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="/images/masak1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="/images/masak4.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="/images/gambar3.jpg" class="d-block w-100" alt="">
            </div>
        </div>
    </div>
</div>

<!-- ===== SECTION PROMO 1 ===== -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold">The Best Cooking Course in Sanur!</h2>
            <p class="text-muted">
                If you're looking for an immersive cooking experience in Bali,
                our cooking class with cooking coach Lira is the perfect way
                to learn about Indonesian home cooking.
            </p>
            <a href="#" class="btn btn-danger rounded-pill px-4">Gabung</a>
        </div>

        <div class="col-md-6 text-center">
            <img src="/images/masak3.jpg" class="img-fluid rounded-circle shadow" width="260">
        </div>
    </div>
</div>

<!-- ===== SECTION PROMO 2 ===== -->
<div class="container my-5">
    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6">
            <h2 class="fw-bold">The Best Cooking Course in Sanur!</h2>
            <p class="text-muted">
                Lira brings her expertise to the table, teaching you how
                to prepare authentic Indonesian dishes from all regions.
            </p>
            <a href="#" class="btn btn-danger rounded-pill px-4">Gabung</a>
        </div>

        <div class="col-md-6 text-center">
            <img src="/images/masak4.jpg" class="img-fluid rounded-circle shadow" width="260">
        </div>
    </div>
</div>

<!-- ===== GALLERY SECTION ===== -->
<div class="container my-5">
    @if(isset($images) && $images->count())
    <div class="row g-4">
        @foreach ($images as $img)
            <div class="col-6 col-md-3">
                <img src="{{ asset('images/'.$img->getFilename()) }}"
                     class="img-fluid rounded shadow-sm">
            </div>
        @endforeach
    </div>
@endif


</div>

@endsection
