@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Buku</h1>
    <form method="POST" action="{{ route('buku.update', $buku['id']) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $buku['judul'] }}" required>
        </div>
        <div class="mb-3">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form-control" value="{{ $buku['pengarang'] }}" required>
        </div>
        <div class="mb-3">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="{{ $buku['penerbit'] }}" required>
        </div>
        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" value="{{ $buku['tahun_terbit'] }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
