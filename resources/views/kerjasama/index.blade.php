@extends('layouts.app')

@section('title', 'data Partner')

@section('content')

<div class="container">
    <a href="kerjas/create" class="btn btn-primary">Tambah Data</a>
    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($kerjas as $kerja)
                    <td>{{ $i++ }}</td>
                    <td>{{$kerja->title}}</td>
                    <td>{{$kerja->description}}</td>
                    <td>
                        <img src="/image/{{$kerja->image}}" alt="" class="img fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('kerjas.edit',$kerja->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('kerjas.destroy', $kerja->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
