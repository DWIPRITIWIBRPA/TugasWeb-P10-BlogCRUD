@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <x-alert />

    <h1>Daftar Post</h1>

    <a href="{{ route('posts.create') }}">+ Tambah Post</a>

    <br><br>

    @forelse ($posts as $post)
        <x-card>
            <h2>{{ $post->title }}</h2>

            <p>
                {{ Str::limit($post->content, 150) }}
            </p>

            <a href="{{ route('posts.show', $post) }}">
                Lihat Detail
            </a>

            |

            <a href="{{ route('posts.edit', $post) }}">
                Edit
            </a>

            |

            <form action="{{ route('posts.destroy', $post) }}"
                  method="POST"
                  style="display: inline;">

                @csrf
                @method('DELETE')

                <button  type="submit">
                    Hapus
                </button>

            </form>

        </x-card>
    
    @empty
        <p>Belum ada post.</p>

    @endforelse

    {{ $posts->links() }}

@endsection
