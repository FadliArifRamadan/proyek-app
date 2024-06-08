@extends('layouts.app')

@section('title', 'Data Detail Club')

@section('content')

<div class="container">
    <a href="/admin/detail" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('detail.store') }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" placeholder="Judul">
                </div>
                @error('nama_club')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama Club</label>
                    <input type="text" class="form-control" name="nama_club" placeholder="Nama Club">
                </div>
                @error('tempat_latihan')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Tempat Latihan</label>
                    <input type="text" class="form-control" name="tempat_latihan" placeholder="Tempat Latihan">
                </div>
                @error('jadwal_latihan')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jadwal Latihan</label>
                    <input type="text" class="form-control" name="jadwal_latihan" placeholder="Jadwal Latihan">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection