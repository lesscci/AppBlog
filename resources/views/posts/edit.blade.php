<x-app-layout>

<div class="container">
    <h1>Editar post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="cont">Contenido</label>
            <textarea class="form-control" id="cont" name="cont">{{ $post->cont }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar posts</button>
    </form>
</div>
</x-app-layout>
