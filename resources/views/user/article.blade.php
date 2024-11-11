@extends('layouts.user')

@section('hero')
        <h1>Blog Purwa-Travel</h1>
        <h2>Kumpulan artikel-artikel wisata Purwakarta, Tips travelling, dan kesehatan</h2>
    @endsection

@section('content')
    <div class="container mt-4">
        <h1>{{ $article['title'] }}</h1>
        <p>{{ $article['content'] }}</p>
        <h5><a href="{{ route('blog') }}" class="text-decoration-none link-hover">Back to Blog</a></h5>
    </div>
@endsection
