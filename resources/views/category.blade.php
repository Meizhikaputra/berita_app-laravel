@extends('layouts.main-layout')

@section('container')

<h1 class="container">Post Category : {{ $category }}</h1>

<ul>
    @foreach($posts as $post)
        <h2 class="mt-3"><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <p>By.<a href="/authors/{{ $post->user->username }}" class="text-decoration-none"> {{ $post->user->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
    @endforeach
</ul>

@endsection