@extends('layouts.app')

@section('title', 'Data Atlet Kota Cirebon')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/atlet/create" class="btn btn-primary mb-3">Tambah Data</a>

            <div class="row justify-content-end mb-3">
                <div class="col-md-4">
                    <form action="/admin/atlet">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>

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
                            <th>Gambar Pemain</th>
                            <th>Nama Pemain</th>
                            <th>Posisi Pemain</th>
                            <th>Club Pemain</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach ($atlets as $index => $atlet)
                        <tr>
                            <td>{{ $index + $atlets->firstItem() }}</td>
                            <td>
                                <img src="/image/{{ $atlet->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>{{ $atlet->nama }}</td>
                            <td>{{ $atlet->posisi }}</td>
                            <td>{{ $atlet->club }}</td>
                            <td>
                                <a href="{{ route('atlet.edit', $atlet->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('atlet.destroy', $atlet->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $atlets->links() }}
            </div>
        </div>
    </div>
</div>

@endsection