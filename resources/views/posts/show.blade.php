<x-layouts.app :title="$post->title" meta-description="Blog Meta description" :sum=1+1>

</x-layouts.app>

<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<pre>
    <span>Created: {{ $post->created_at }}</span>
    <span>Updated: {{ $post->updated_at }}</span>
</pre>
<a href="{{ route('posts.index') }}">Regresar</a>