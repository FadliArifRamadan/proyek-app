@extends('layouts.app')

@section('title', 'Data Peraturan')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/peraturan/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                            <th>List</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach ($peraturans as $peraturan)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $peraturan->list }}</td>
                            <td>
                                <a href="{{ route('peraturan.edit', $peraturan->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('peraturan.destroy', $peraturan->id) }}" method="POST">
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