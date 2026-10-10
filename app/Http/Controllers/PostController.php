<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        try {
            Post::create($validated);

            return redirect()
                ->route('posts.index')
                ->with('success', 'Post berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()
                ->route('posts.create')
                ->withInput()
                ->with('error', 'Post gagal ditambahkan. Silahkan coba lagi.');
        }
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
    ]);

    try {
        $post->update($validated);

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post berhasil diperbarui!');
    } catch (\Exception $e) {
        return redirect()
            ->route('posts.edit', $post)
            ->withInput()
            ->with('error', 'Post gagal diperbarui. Silahkan coba lagi.');
    }
}

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post berhasil dihapus!');
    }
}
