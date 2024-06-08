@extends('layouts.app')

@section('title', 'Data Ketua Organisasi Kami')

@section('content')

<div class="container">
    <a href="/admin/organisasi" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('organisasi.update', $organisasi->id) }}" method="POST" enctype="multipart/form-data"
                style="width: 1010px;">
                @method('PUT')
                @csrf
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $organisasi->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" placeholder="Gambar">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="title" placeholder="Nama"
                        value="{{ $organisasi->title }}">
                </div>
                @error('job')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" class="form-control" name="job" placeholder="Job" value="{{ $organisasi->job }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection