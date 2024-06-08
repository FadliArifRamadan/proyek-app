@extends('layouts.app')

@section('title', 'Data Club')

@section('content')

<div class="container">
    <a href="/admin/club" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('club.store') }}" method="POST" enctype="multipart/form-data" style="width: 1010px;">
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" placeholder="gambar">
                </div>
                @error('nama_club')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama Club</label>
                    <input type="text" class="form-control" name="nama_club" placeholder="Nama Club">
                </div>
                @error('ketua_club')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Ketua Club</label>
                    <input type="text" class="form-control" name="ketua_club" placeholder="Ketua Club">
                </div>
                @error('pelatih_club')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Pelatih Club</label>
                    <input type="text" class="form-control" name="pelatih_club" placeholder="Pelatih Club">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection