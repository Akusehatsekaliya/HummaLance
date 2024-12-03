@extends('kerangka.master')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="page-heading">
                <h3>Files</h3>
            </div>
            <div class="mb-3">
                <label class="form-label" for="textInput">Input</label>
                <input type="text" id="textInput" class="form-control" placeholder="Input Text">
            </div>
        </div>
        <div class="col-6">
            <div class="page-heading">
                <h3>Preview</h3>
            </div>
            <iframe src="{{ route('landing.index') }}" frameborder="0"
                style="width: 275%; height: 500%; transform: scale(0.35); transform-origin: top left;"></iframe>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
