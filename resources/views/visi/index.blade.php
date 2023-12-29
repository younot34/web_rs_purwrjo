@extends('layouts.app')

@section('title', 'data visi & misi')

@section('content')

<div class="container">
    <a href="visis/create" class="btn btn-primary">Tambah Data</a>
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
                @foreach ($visis as $visi)
                    <td>{{ $i++ }}</td>
                    <td>{{$visi->title}}</td>
                    <td>{{$visi->description}}</td>
                    <td>
                        <img src="/image/{{$visi->image}}" alt="" class="img fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('visis.edit',$visi->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('visis.destroy', $visi->id)}}" method="POST">
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
