{{-- @extends('layouts.app')

@section('title', 'Home')
@section('meta-description', 'Home meta-description')

@section('content') 
@endsection--}}
<x-layouts.app title="Home" meta-description="Home meta Description" :sum="2+2">
    <h1>Home</h1>
</x-layouts.app>