@extends('layouts.app')

@section('title', 'Data Club')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/club/create" class="btn btn-primary mb-3">Tambah Data</a>

            @if($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" style="width: 1010px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Club</th>
                            <th>Ketua Club</th>
                            <th>Pelatih Club</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach ($clubs as $club)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <img src="/image/{{ $club->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>{{ $club->nama_club }}</td>
                            <td>{{ $club->ketua_club }}</td>
                            <td>{{ $club->pelatih_club }}</td>
                            <td>
                                <a href="{{ route('club.edit', $club->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('club.destroy', $club->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection