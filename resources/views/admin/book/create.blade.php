@extends('admin/template/default')
@section('content')
    <div class="box">
        <div class="box-header">
        <h3 class="box-title">Tambah Data Buku</h3>
        </div>
        <div class="box-body">
        <form action="{{route('admin/book/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group @error('title') has-error @enderror ">
                    <label for="">Judul Buku</label>
                <input type="text" name="title" class="form-control" placeholder="Masukan Judul Buku" value="{{old('title')}}">
                </div>
                @error('title')
                <span class="help-block">{{$message}}</span>   
                @enderror
                <div class="form-group @error('description') has-error @enderror ">
                    <label for="">Deskripsi Buku</label><br>
                    <textarea name="description" id="" rows="3" class="form-control" placeholder="Masukan Deskripsi Buku" value="{{old('description')}}" ></textarea>
                </div>
                @error('description')
                <span class="help-block">{{$message}}</span>   
                @enderror

                <label for="">Penulis</label>
                <div class="form-group @error('author_id') has-error @enderror  ">
                    <select name="author_id" id="" class="form-control select2">
                    @foreach ($authors as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>  
                    @endforeach
                    </select>
                </div>
                @error('author_id')
                <span class="help-block">{{$message}}</span>   
                @enderror

                <div class="form-group @error('cover') has-error @enderror ">
                <input type="file" name="cover" class="form-control" value="{{old('cover')}}">
                </div>
                @error('cover')
                <span class="help-block">{{$message}}</span>   
                @enderror

                <div class="form-group @error('qty') has-error @enderror ">
                    <label for="">Jumlah Buku</label>
                <input type="text" name="qty" class="form-control" placeholder="Masukan Jumlah Buku" value="{{old('qty')}}">
                </div>
                @error('qty')
                <span class="help-block">{{$message}}</span>   
                @enderror
                <div class="form-group">
                    <input type="submit"  value="Tambah" class="btn btn-primary">
                </div>
            </form>

        </div>
    </div>
@endsection
@push('select2css')
    <link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endpush
@push('scripts')
<script src="{{asset('assets/bower_components/select2/dist/js/select2.full.min.js')}}" ></script>
<script>
    $('.select2').select2();
</script>
@endpush