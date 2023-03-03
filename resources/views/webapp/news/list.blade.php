@extends('webapp.layout');

@section('page-content')
<!-- Responsive Table -->
<div class="card">
    <h5 class="card-header">List of recieved messages</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>Title</th>
            <th>Is Published</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($news as $new)
          <tr>
              <td>{{ $new->title}}</td>
              <td>{{ $new->is_published }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex p-2">
        {!! $news->links() !!}
      </div>
    </div>
  </div>
@endsection
