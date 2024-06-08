@extends('layouts.app')

@section('title', 'Data Detai Club')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/detail/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                            <th>Tempat Latihan</th>
                            <th>Jadwal Latihan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach ($details as $detail)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <img src="/image/{{ $detail->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>{{ $detail->nama_club }}</td>
                            <td>{{ $detail->tempat_latihan }}</td>
                            <td>{{ $detail->jadwal_latihan }}</td>
                            <td>
                                <a href="{{ route('detail.edit', $detail->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('detail.destroy', $detail->id) }}" method="POST">
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