<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function menu()
    {
        $search = request()->query('search');
        $query = Post::query();

        if ($search){
            $query->where(function ($antri) use ($search) {
                $antri->where('title', 'like', "%{$search}%")
                      ->orWhere('content', 'like', "%{$search}%");
            });

        }

        $posts = $query->latest()->paginate(10);
        $posts->appends(['search' => $search]);
        $totalposts = Post::count();
        return view('menu', compact('posts', 'totalposts', 'search'));
    }

    // single kalo diklik satu2
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post', compact('post'));
    }

    //halaman tentang
    public function about()
    {
        $info = Post::aboutInfo();

        return view('about', compact('info'));
    }

    public function home()
    {
        $info = Post::aboutInfo();

        return view('home', compact('info'));
    }


    public function create()
    {
        return view('create');
    }

  public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png',
        'excerpt' => 'nullable|max:255'
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('posts', 'public');
    }

    Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'excerpt' => $request->excerpt,
        'image' => $imagePath
    ]);

    return redirect('/')->with('success', 'Post berhasil ditambahkan');
}

    // UPDATE form
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('edit', compact('post'));
    }

    // UPDATE data
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Cari post dan update
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect update berhasil
        return redirect('/')->with('success', 'Post berhasil diupdate!');
    }

    // DELETE - Hapus data
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Redirect delete berhasil
        return redirect('/')->with('success', 'Post berhasil dihapus!');
    }
}
