@extends('admin/template/default')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Laporan User Aktif</h3>
      </div>
    <div class="box-body">
      
        <table id="dataTables" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Jumlah Peminjaman</th>
              <th>Bergabung</th>
            </thead>
            @foreach ($users as $user)
            <tbody>  
            <th></th>
            <th>{{$user->name}}</th>
            <th>{{$user->email}}</th>
            <th>{{$user->borrowed_count}}</th>
            <th>{{$user->created_at->diffForHumans()}}</th>
            </tbody>
            @endforeach
          </table>
          {{$users->links()}}
    </div>
</div>
@endsection
