@extends('layouts.app')

@section('title', 'Data Tentang Kami')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{-- <a href="/admin/tentang/create" class="btn btn-primary mb-3">Tambah Data</a> --}}

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
                            <th>Ketua Umum</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach ($tentangs as $tentang)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <img src="/image/{{ $tentang->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>{{ $tentang->ketua_umum }}</td>
                            <td>{{ $tentang->description }}</td>
                            <td>
                                <a href="{{ route('tentang.edit', $tentang->id) }}" class="btn btn-warning">Edit</a>
                                {{-- <form action="{{ route('tentang.destroy', $tentang->id) }}" method="POST">
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