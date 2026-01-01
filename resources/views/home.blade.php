@extends('layouts.layout2')

@section('title', 'Blog Home')

@section('content')
    {{-- Success Message --}}
    @if (session('success'))
        <p><strong>{{ session('success') }}</strong></p>
    @endif

    <h1>My Blog</h1>
    
    <a href="/post/create">+ Tambah Post Baru</a>
      <hr>
            {{-- form search --}}
            <form action="/" method="GET">
                <input type="text" value="{{ $search ?? '' }}" name="search" placeholder="Cari post...">
                <button type="submit">Cari</button>
                @if ($search ?? false)
                    <a href="/">clear</a>
                @endif
            </form>

            {{-- hasil pencarian --}}
            @if ($search ?? false)
                @if($posts->total()>0)
                    <p>{{$posts->total()}} Hasil untuk "{{ $search }}":</p>
                @else
                    <p>Tidak ada hasil untuk "{{ $search }}"</p>
                @endif
            @endif
    <hr>

    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>
                <small>Created: {{ $post->created_at->diffForHumans() }}</small>
            </p>
            <p>
                <a href="/post/{{ $post->id }}">Read More</a> | 
                <a href="/post/{{ $post->id }}/edit">Edit</a> | 
                <form action="/post/{{ $post->id }}" method="POST" style="display:inline" 
                      onsubmit="return confirm('Yakin mau hapus post ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </p>
        

        </div>
    @endforeach
{{-- paginatiion here --}}
{{ $posts->links() }}
    <p>menampilkan {{ $posts->firstItem() }} hingga {{ $posts->lastItem() }}
        dari total {{ $totalposts}} posts
    </p>
@endsection