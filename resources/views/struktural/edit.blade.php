@extends('layouts.app')

@section('title', 'Data Struktural')

@section('content')

<div class="container">
    <a href="/admin/struktural" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('struktural.update', $struktural->id) }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @method('PUT')
                @csrf
                @error('jabatan')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"
                        value="{{ $struktural->jabatan }}">
                </div>
                @error('nama')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama"
                        value="{{ $struktural->nama }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection