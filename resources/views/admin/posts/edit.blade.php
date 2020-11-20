@extends('admin.layouts.app')

@section('title', "Editar o Post {$post->title}")

@section('content')
    <h1>Editar o Post <strong>{{ $post->title }}</strong></h1>

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @method('put')
        @include('admin.posts._partials.form')
    </form>
@endsection
