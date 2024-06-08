@extends('layouts.app')

@section('title', 'Data Atlet Kota Cirebon')

@section('content')

<div class="container">
    <a href="/admin/atlet" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('atlet.update', $atlet->id) }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @method('PUT')
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $atlet->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar Pemain</label>
                    <input type="file" class="form-control" name="image" placeholder="Gambar">
                </div>
                @error('nama')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama Pemain</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $atlet->nama }}">
                </div>
                @error('posisi')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Posisi Pemain</label>
                    <input type="text" class="form-control" name="posisi" placeholder="Posisi"
                        value="{{ $atlet->posisi }}">
                </div>
                @error('club')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Club Pemain</label>
                    <input type="text" class="form-control" name="club" placeholder="Club" value="{{ $atlet->club }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection