@extends('layouts.app')

@section('title', 'Data Ketua PBVSI')

@section('content')

<div class="container">
    <a href="/admin/pbvsi" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('pbvsi.update', $pbvsi->id) }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @method('PUT')
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $pbvsi->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" placeholder="Gambar">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Ketua</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul"
                        value="{{ $pbvsi->title }}">
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                        placeholder="Deskripsi">{{ $pbvsi->description }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection