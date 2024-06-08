@extends('layouts.app')

@section('title', 'Data Struktural')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/struktural/create" class="btn btn-primary mb-3">Tambah Data</a>

            <div class="row justify-content-end mb-3">
                <div class="col-md-4">
                    <form action="/admin/struktural">
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
                            <th>Jabatan</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach ($strukturals as $index => $struktural)
                        <tr>
                            <td>{{ $index + $strukturals->firstItem() }}</td>
                            <td>{{ $struktural->jabatan }}</td>
                            <td>{{ $struktural->nama }}</td>
                            <td>
                                <a href="{{ route('struktural.edit', $struktural->id) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('struktural.destroy', $struktural->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $strukturals->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection