@extends('layouts.app')

@section('title', 'Data Informasi')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{-- <a href="/admin/informasi/create" class="btn btn-primary mb-3">Tambah Data</a> --}}

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
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach ($informasis as $informasi)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $informasi->alamat }}</td>
                            <td>{{ $informasi->telepon }}</td>
                            <td>{{ $informasi->email }}</td>
                            <td>
                                <a href="{{ route('informasi.edit', $informasi->id) }}" class="btn btn-warning">Edit</a>
                                {{-- <form action="{{ route('informasi.destroy', $informasi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form> --}}
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