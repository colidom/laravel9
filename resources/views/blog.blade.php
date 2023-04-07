{{-- @extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta-description')

@section('content')
<h1>Blog</h1>
@endsection --}}

<x-layouts.app title="Blog" meta-description="Blog meta Description" :sum="2+2">
    <h1>Blog</h1>
</x-layouts.app>