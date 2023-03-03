@extends('webapp.layout')
@section('page-content')
<div class="col-xl">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create News record</h5>
            <small class="text-muted float-end">Select the parameters</small>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ route('webapp.news.store') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="html5-date-input" class="form-label">Title</label>
                    <input class="form-control" type="text" name="title"/>
                </div>
                <div class="mb-3 row">
                    <div class="form-check px-5">
                        <input class="form-check-input" type="checkbox" name="is_published"/>
                        <label class="form-check-label" for="disabledCheck1"> Is Published </label>
                    </div>
                </div>
                <div>
                    <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    <span class="tf-icons bx bx-report"></span>&nbsp; Create
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
