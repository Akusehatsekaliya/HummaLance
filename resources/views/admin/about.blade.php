@extends('kerangka.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('template-admin/assets/extensions/summernote/summernote-lite.min.css') }}" />
@endsection
@section('content')
    <div class="page-heading">
        <h3>About Us</h3>
    </div>
    <div class="page-content">
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                @foreach ($abouts as $about)
                                    <form action="{{ route('about.update', $about->id) }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row d-flex justify-content-center">

                                            <div class="img-upload-section">
                                                <div class="logo-wrapper">
                                                    <div class="logo-upload mt-5 mb-5">
                                                        <div class="image-preview-container" id="avatar-preview-container">
                                                            <img src="{{ asset("storage/$about->image") }}" alt="up"
                                                                class="upload-img" id="upload-img"
                                                                style="object-fit: cover;">
                                                            <label for="input-file" class="pencil-icon">
                                                                <i class="bi bi-pen-fill"></i>
                                                            </label> </label>
                                                            <input type="file" name="image"
                                                                accept="image/jpeg, image/jpg, image/png, image/webp"
                                                                id="input-file" onchange="previewImage(event, 'upload-img')"
                                                                style="display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-10">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Title</label>
                                                    <input type="text" id="first-name-vertical"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        name="title" value="{{ $about->title }}">
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Description</label>
                                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" aria-label="With textarea">{{ $about->description }}</textarea>
                                                    @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="col-10 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    {{-- <script src="{{ asset('template-admin/assets/extensions/summernote/summernote-lite.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#custom-summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['insert', ['link', 'picture']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
            ],
        });
    });
</script> --}}
    <script>
        function previewImage(event, previewId) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const previewImage = document.getElementById(previewId);
                previewImage.src = reader.result;
                previewImage.style.display = 'block';
            }

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
