@extends('dashboard/layouts/layoutMain')

@section('container')

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kupon</th>
        <th scope="col">Diskon Kupon</th>
        <th scope="col">Kode</th>
        <th scope="col">Tanggal Klaim</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($kupon as $kpn)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $kpn->kupon->name }}</td>
          <td>{{ $kpn->kupon->diskon }}</td>
          <td>{{ $kpn->kode }}</td>
          <td>{{ $kpn->created_at->diffForHumans() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
  {{ $kupon->links() }}
</div>
@endsection