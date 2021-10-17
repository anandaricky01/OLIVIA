@extends('dashboard/layouts/layoutMain')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($artikel as $arr)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $arr->title }}</td>
            <td>{{ $arr->category->name }}</td>
            <td>
                <a href="/dashboard/artikel/{{ $arr->slug }}" class="badge bg-info">
                    <span data-feather="eye"></span>
                </a>
                <a href="" class="badge bg-warning">
                    <span data-feather="edit"></span>
                </a>
                <a href="" class="badge bg-danger">
                    <span data-feather="trash-2"></span>
                </a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center">
      {{ $artikel->links() }}
    </div>
  </div>
@endsection