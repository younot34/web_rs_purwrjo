@extends('layouts.app')

@section('title', 'data visi & misi')

@section('content')

<div class="container">
    <a href="/visis" class="btn btn-primary mb-3">Batal</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('visis.update', $visis->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-grup mb-3">
                    <label for="title">Judul</label>
                    <input type="text" class="input form-control" name="title" placeholder="Judul" value="{{$visis->title}}">
                </div>
                @error('title')
                <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-grup mb-3">
                    <label for="description">Deskripsi</label>
                    <textarea type="text" class="input form-control" id="" cols="30" rows="10" name="description" placeholder="Deskripsi">{{$visis->description}}</textarea>
                </div>
                @error('description')
                <small style="color: red">{{$message}}</small>
                @enderror
                <img src="/image/{{$visis->image}}" alt="" class="img-fluid">
                <div class="form-grup mb-3">
                    <label for="image">Gambar</label>
                    <input type="file" class="input form-control" name="image">
                </div>
                @error('image')
                <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-grup ">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
