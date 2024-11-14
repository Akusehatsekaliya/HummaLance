@extends('home.layout.app')
@section('style')
<style>
    .homepage-search-title h2 {
    max-width: 97%;
    text-align: left;
    white-space: normal;
    overflow-wrap: break-word;
}

</style>
@endsection
@section('content')
    {{-- banner --}}
    @include('home.banner.index')
    {{-- post_user --}}
    @include('home.post_user.index')
    {{-- jobs --}}
    @include('home.jobs_user.index')
    {{-- ordered --}}
    @include('home.ordered.index')
@endsection
