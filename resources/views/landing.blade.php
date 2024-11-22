@extends('landing.layout.app')
@section('style')
<style>
    .homepage-search-title h6 {
    max-width: 90%;
    text-align: left;
    white-space: normal;
    overflow-wrap: break-word;
}

</style>
@endsection
@section('content')

@include('landing.banner')
@include('landing.populer')
@include('landing.manage')
@include('landing.work')
@include('landing.footer')

@endsection
