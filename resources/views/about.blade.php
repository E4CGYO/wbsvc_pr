@extends('layouts.layout2')

@section('mnu', 'Blog Home')

@section('content')


<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4 mt-4" >
        <h2 class="mb-0">About Us</h2>
    </div>

   <div class="card text-bg-dark" style="height: 300px;">
  <img src="images/masak1.jpg" class="card-img h-100 object-fit-cover" alt="...">

  <div class="card-img-overlay d-flex justify-content-center align-items-center text-center">
    <div>
      <h5 class="card-title">memasak bersama kami?</h5>
      <p class="card-text">
        dapatkan pengalaman memasak yang menyenangkan dan seru bersama kami di GDA GDI COOKING!<br>
        kami menyediakan berbagai resep lezat dan mudah diikuti untuk semua tingkat keahlian.<br>
        bergabunglah dengan komunitas kami dan temukan kegembiraan dalam setiap hidangan yang Anda buat!
      </p>
    </div>
  </div>
</div>

<br>

<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">kelas reguler</h5>
        <p class="card-text">pengalaman memasak yang menyenangkan untuk pemula.</p>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdspAVtCIxKu1Yy-kAp95MvwLdW6I8nnrqHDzm7XuU76el5SQ/viewform?usp=header" class="btn btn-primary"> Daftar </a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">kelas lanjutan</h5>
        <p class="card-text">pengalaman memasak yang menyenangkan untuk yang sudah berpengalaman.</p>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdspAVtCIxKu1Yy-kAp95MvwLdW6I8nnrqHDzm7XuU76el5SQ/viewform?usp=header" class="btn btn-primary"> Daftar </a>
      </div>
    </div>
  </div>
</div>
    <div class="row">

    </div>
</div>
