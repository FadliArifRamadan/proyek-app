@extends('layouts.app')

@section('title', 'Data Informasi')

@section('content')

<div class="container">
    <a href="/admin/informasi" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @csrf
                @error('alamat')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                </div>
                @error('telepon')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Telepon">
                </div>
                @error('email')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection