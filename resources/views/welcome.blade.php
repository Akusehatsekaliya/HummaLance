@extends('landing.layout.app')
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
    @include('landing.banner.index')
    {{-- post_user --}}
    @include('landing.post_user.index')
    {{-- jobs --}}
    @include('landing.jobs_user.index')
    {{-- ordered --}}
    @include('landing.ordered.index')
@endsection
