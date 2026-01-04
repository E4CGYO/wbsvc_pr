@extends('layouts.layout2')

@section('title', 'Tambah Post Baru')

@section('content')
<h1>Tambah Post Baru</h1>

{{-- validasi error --}}
@if ($errors->any())
    <div>
        <strong>Error:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/post" method="POST" enctype="multipart/form-data">
    @csrf

    <p>
        <label>Title</label><br>
        <input type="text" name="title">
    </p>

    <p>
        <label>Gambar</label><br>
        <input type="file" name="image">
    </p>

    <p>
        <label>Deskripsi Singkat</label><br>
        <input type="text" name="excerpt">
    </p>

    <p>
        <label>Content</label><br>
        <textarea name="content"></textarea>
    </p>

    <button type="submit">Simpan</button>
</form>
@endsection
