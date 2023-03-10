@extends('webapp.layout')
@section('page-content')
<div class="col-xl">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit News record</h5>
            <small class="text-muted float-end">Fill in the approriate data</small>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ route('webapp.news.update', [$news->id]) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="mb-3 row">
                    <label for="html5-date-input" class="form-label">Title</label>
                    <input class="form-control" type="text" value="{{ $news->title }}" name="title" />
                    @error('title')
                        <div class="p-2 text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <div class="form-check px-5">
                        <input class="form-check-input" type="checkbox" name="is_published" {{ $news->is_published ===
                        true ? 'checked' : '' }}/>
                        <label class="form-check-label" for="disabledCheck1"> Is Published </label>
                    </div>
                </div>
                <div>
                    <div class="editable"></div>
                    @error('content')
                        <div class="p-2 text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-primary">
                        <span class="tf-icons bx bx-report"></span>&nbsp; Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('editor-script')
<script>
var editor = new MediumEditor('.editable')
</script>
@endsection
