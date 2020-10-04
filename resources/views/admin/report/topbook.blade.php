@extends('admin/template/default')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Buku Paling banyak dipinjam</h3>
      </div>
    <div class="box-body">
      
        <table id="dataTables" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Judul Buku</th>
              <th>Deskripsi</th>
              <th>Jumlah Buku</th>
              <th>Total Dipinjam</th>
              <th>Penulis</th>
              <th>Sampul</th>
            </thead>
            @php
                $page=1;
                if(request()->has('page')){
                    $page=request('page');
                }
                $no=(10*$page)-(10-1);
            @endphp
            @foreach ($books as $book)
            <tbody>
               
            <th>{{$no ++}}</th>
            <th>{{$book->title}}</th>
            <th>{{$book->description}}</th>
            <th>{{$book->qty}}</th>
            <th>{{$book->borrowed_count}}</th>
            <th>{{$book->author->name}}</th>
            <th><img src="{{$book->getCover()}}" alt="{{$book->title}}" height="150px"></th>
                   
             
            </tbody>
            @endforeach
          </table>
          {{$books->links()}}
    </div>
</div>
@endsection
