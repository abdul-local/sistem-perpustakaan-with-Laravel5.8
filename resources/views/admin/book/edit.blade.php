@extends('admin/template/default')
@section('content')
    <div class="box">
        <div class="box-header">
        <h3 class="box-title">Edit Data Penulis</h3>
        </div>
        <div class="box-body">
        <form action="{{route('admin/book/update',$author)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group @error('name') has-error
                    
                @enderror">
                    <label for="">Nama</label>
                <input type="text" name="name" class="form-control" value="{{old('name') ?? $author->name}}" placeholder="Masukan Nama Penulis">
                </div>
                @error('name')
            <span class="help-block">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <input type="submit"  value="Ubah" class="btn btn-primary">
                </div>
            </form>

        </div>
    </div>
@endsection