@extends('layouts.app')

@section('title', 'Data Tentang Kami')

@section('content')

<div class="container">
    <a href="/admin/tentang" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('tentang.update', $tentang->id) }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @method('PUT')
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $tentang->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" placeholder="Judul">
                </div>
                @error('ketua_umum')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Ketua Umum</label>
                    <input type="text" class="form-control" name="ketua_umum" placeholder="Ketua Umum">
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                        placeholder="Deskripsi">{{ $tentang->description }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection