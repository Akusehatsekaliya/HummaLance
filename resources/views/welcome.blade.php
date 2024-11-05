@extends('landing.layout.app')
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
