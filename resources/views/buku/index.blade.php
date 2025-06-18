@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
    
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['judul'] }}</td>
                <td>{{ $item['pengarang'] }}</td>
                <td>{{ $item['penerbit'] }}</td>
                <td>{{ $item['tahun_terbit'] }}</td>
                <td>
                    <a href="{{ route('buku.edit', $item['id']) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form method="POST" action="{{ route('buku.destroy', $item['id']) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
