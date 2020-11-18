<a href="{{ route('posts.create') }}">Criar Novo Post</a>
<hr>
<h1>Posts</h1>

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach