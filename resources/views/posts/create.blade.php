<x-layouts.app title="Crear un nuevo post" meta-description="Blog Meta description" :sum=1+1>

</x-layouts.app>

<h1>Create new Post</h1>

<form action="{{ route('posts.store') }}" method="POST">

    @csrf {{-- Directiva para imprimir token en el formulario para identificar orígen del formulario--}}

    <label for="">
        Title <br>
        <input name="title" type="text"><br>
    </label>
    <label for="">
        Body <br>
        <textarea name="body"></textarea><br>
    </label>
    <button type="submit">Send</button>
</form>
<a href="{{ route('posts.index') }}">Regresar</a>