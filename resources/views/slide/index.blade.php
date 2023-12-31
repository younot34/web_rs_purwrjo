@extends('layouts.app')

@section('title', 'data berita')

@section('content')

<div class="container">
    <a href="dabers/create" class="btn btn-primary">Tambah Data</a>
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
                @foreach ($dabers as $daber)
                    <td>{{ $i++ }}</td>
                    <td>{{$daber->title}}</td>
                    <td>{{$daber->description}}</td>
                    <td>
                        <img src="/image/{{$daber->image}}" alt="" class="img fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('dabers.edit',$daber->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('dabers.destroy', $daber->id)}}" method="POST">
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
