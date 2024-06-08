@extends('layouts.app')

@section('title', 'Data Atlet Kota Cirebon')

@section('content')

<div class="container">
    <a href="/admin/atlet" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('atlet.store') }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar Pemain</label>
                    <input type="file" class="form-control" name="image" placeholder="gambar">
                </div>
                @error('nama')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama Pemain</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
                @error('posisi')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Posisi Pemain</label>
                    <input type="text" class="form-control" name="posisi" placeholder="Posisi">
                </div>
                @error('club')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Club Pemain</label>
                    <input type="text" class="form-control" name="club" placeholder="Club">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection