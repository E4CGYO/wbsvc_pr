@extends('layouts.layout2')

@section('title', 'About')

@section('content')
{{-- ini di hapus engk rojib? --}}
    {{-- <h1>saya dalah</h1>
    <p><strong>Nama:</strong> {{ $info['name'] }}</p>
    <p><strong>Bio:</strong> {{ $info['bio'] }}</p>

    <a href="/">← Back to Home</a> --}}
{{-- bagian ini di hapus engk rojib --}}

{{-- Bagian saya tinggal satu halaman yaitu Halam untuk booking kelas memasak. Nanti di halaman itu ada penjelasan tentang kelas memasak kita  --}}

<div class="container-fluid py-5">

    <div class="d-flex justify-content-between align-items-center mb-4 mt-4" >
        <h2 class="mb-0">tentang</h2>
    </div>

    <div class="container-fluid py-4" style="margin-top: 150px; margin-bottom: 50px; padding-left: 0; padding-right: 0;">

        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        {{-- bagian textnya yang harus di isi --}}
                        <h5 class="card-title">masakan opa rojib dabes</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">siapa rasa masakn rojib langsung mana tahan</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            {{-- bagian fotonya mukanya rojib kalok bisa --}}
            <div class="col-md-6 text-center">
                <img style="border-radius: 50%; height: 400px; width: 400px;" src="images/test.png" alt="disini foto">
            </div>
        </div>
    </div>

@endsection
