@extends('layouts/layoutMain')

@section('container')
    <div class="py-5"></div>
    <div class="container">

        @if ($konten->count() > 0)
            {{-- konten --}}
            <h4>Konten</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Konten</th>
                    <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($konten as $kon)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $kon->konten }}</td>
                            <td><a href="{{ $kon->link }}"><span class="badge bg-secondary">Kunjungi</span></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        
        <div class="my-5"></div>

        @if ($artikel->count() > 0)
            <h4>Artikel</h4>
            {{-- artikel --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $art)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><a href="/artikel/{{ $art->slug }}">{{ $art->title }}</a></td>
                            <td><a href="/artikel?category={{ $art->category->slug }}"><span class="badge bg-secondary">{{ $art->category->name }}</span></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p><a href="/artikel">selengkapnya</a></p>
        @endif

        <div class="my-5"></div>

        @if ($kolega->count() > 0)
            <h4>Kolega</h4>
            {{-- artikel --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kolega</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Sosial Media</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kolega as $kol)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $kol->nama_kolega }}</td>
                            <td>{{ $kol->alamat }}</td>
                            <td><a href="/layanan/kolega?jenis_sampah={{ $kol->jenis_sampah->slug }}"><span class="badge bg-secondary">{{ $kol->jenis_sampah->jenis_sampah }}</span></a></td>
                            <td>{{ $kol->sosial_media }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p><a href="/layanan/kolega">selengkapnya</a></p>
        @endif
    </div>
@endsection
