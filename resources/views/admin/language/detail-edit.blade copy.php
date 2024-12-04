@extends('kerangka.master')

@section('style')
    <style>
        .row {
            overflow: hidden;
            height: 475px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="page-heading">
                <h3>Files</h3>
            </div>
            @foreach ($langKey as $key => $value)
                <div class="mb-3">
                    <label class="form-label" for="{{ $key }}">{{ $key }}</label>
                    <textarea id="{{ $key }}" name="{{ $key }}" class="form-control lang-edit" placeholder="{{ $key }}">{{ $value }}</textarea>
                </div>
            @endforeach
        </div>
        <div class="col-6">
            <div class="page-heading">
                <h3>Preview</h3>
            </div>
            <iframe src="{{ route('landing.index') }}" frameborder="0"
                style="width: 275%; height: 275%; transform: scale(0.35); transform-origin: top left;"></iframe>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
