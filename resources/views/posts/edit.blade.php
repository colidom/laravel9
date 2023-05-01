<x-layouts.app :title="$post->title" meta-description="Blog Meta description" :sum=1+1>

</x-layouts.app>

<h1>Edit: {{ $post->title }}</h1>

<form action="{{ route('posts.update', $post ) }}" method="POST">

    @csrf {{-- Directiva para imprimir token en el formulario para identificar orígen del formulario--}}
    @method('PATCH')
    <label for="">
        Title <br>
        <input name="title" type="text" value="{{ old('title', $post->title) }}">

        @error('title')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror

        <br>
    </label>
    <label for="">
        Body <br>
        <textarea name="body">{{ old('body', $post->body) }}</textarea>

        @error('body')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror

        <br>
    </label>
    <button type="submit">Send</button>
</form>
<a href="{{ route('posts.index') }}">Regresar</a>