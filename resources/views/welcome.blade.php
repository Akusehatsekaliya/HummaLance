@extends('home.layout.app')
@section('style')
<style>
    .homepage-search-title h2 {
    max-width: 96%;
    text-align: left;
    white-space: normal;
    overflow-wrap: break-word;
}

</style>
@endsection
@section('content')
    {{-- banner --}}
    @include('home.banner.index')
    {{-- Freelancer service --}}
    @include('home.post_user.index')
    {{-- Jobs you can apply for --}}
    @include('home.jobs_user.index')
    {{-- ordered --}}
    @include('home.ordered.index')
@endsection
