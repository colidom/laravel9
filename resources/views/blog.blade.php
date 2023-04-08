{{-- @extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta-description')

@section('content')
<h1>Blog</h1>
@endsection --}}

<x-layouts.app title="Blog" meta-description="Blog meta Description" :sum="2+2">
    <h1>Blog</h1>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
    </tr>
    @endforeach
</x-layouts.app>