@extends('layouts.app')

@section('title', 'Data Prestasi')

@section('content')

<div class="container">
    <a href="/admin/prestasi" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @method('PUT')
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $prestasi->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" placeholder="Judul">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection