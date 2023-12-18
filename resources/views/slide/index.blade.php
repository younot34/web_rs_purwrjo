@extends('layouts.app')

@section('title', 'data berita')

@section('content')

<div class="container">
    <a href="berita/create" class="btn btn-primary">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

@endsection
