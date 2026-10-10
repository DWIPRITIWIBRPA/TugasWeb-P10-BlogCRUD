@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')
    <x-alert />

    <h1>Tambah Post Baru</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Judul</label>
            <br>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="content">Isi Post</label>
            <br>
            <textarea
                id="content"
                name="content"
                rows="8"
            >{{ old('content') }}</textarea>

            @error('content')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">
            Simpan
        </button>

        <a href="{{ route('posts.index') }}">
            Batal
        </a>

    </form>

@endsection
