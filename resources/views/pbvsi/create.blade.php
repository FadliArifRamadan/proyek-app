@extends('layouts.app')

@section('title', 'Data Ketua PBVSI')

@section('content')

<div class="container">
    <a href="/admin/pbvsi" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('pbvsi.store') }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" placeholder="gambar">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama Ketua</label>
                    <input type="text" class="form-control" name="title" placeholder="Nama Ketua">
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                        placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection