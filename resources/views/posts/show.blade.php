@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-card>
        <h1>{{ $post->title }}</h1>

        <p>{{ $post->content }}</p>

        <hr>

        <p>
            Dibuat:
            {{ $post->created_at->format('d M Y H:i') }}
        </p>

        <a href="{{ route('posts.index') }}">
            ← Kembali
        </a>

        |

        <a href="{{ route('posts.edit', $post) }}">
            Edit Post
        </a>
    
    </x-card>

@endsection
