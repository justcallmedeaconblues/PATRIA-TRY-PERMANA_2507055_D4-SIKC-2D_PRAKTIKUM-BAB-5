@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between mb3">
        <h2>Daftar Kategori</h2>
        <a href="{{ route('categories.create')}}" class="btn btn-primaru"> Tambah Kategori
        </a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
    <tbody>
        @forelse($categories as $category)
        <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>{{ $category -> name }}</td>
            <td>{{ $category -> description }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Belum ada data</td>
        </tr>
    </tbody>
    @endforelse
        </table>

</div>  
@endsection