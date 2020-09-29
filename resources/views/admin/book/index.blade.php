@extends('admin/template/default')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Buku</h3>
    <a href="{{route('admin/book/create')}}" class="btn btn-primary">Tambah Buku</a>
      </div>
    <div class="box-body">
      
        <table id="dataTables" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Judul Buku</th>
              <th>Deskripsi</th>
              <th>Penulis</th>
              <th>Sampul</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </thead>
          </table>
    </div>
</div>
<form action="" method="post" id="deleteForm">
    @csrf
   @method("DELETE")
   <input type="submit" value="Hapus" style="display: none"> 

</form>

@endsection

@push('scripts')
<script src="{{asset('assets/plugins/bs-notify.min.js')}}"> </script>
@include('admin/template/partials/alert')
<script>
    $(function(){
        $('#dataTables').DataTable({
            procesing: true,
            serverSide: true,
            ajax:'{{route('admin/book/data')}}',
            columns:[
                {data:'DT_RowIndex',orderable:false,searchable:false},
                {data:'title'},
                {data:'description'},
                {data:'author'},
                {data:'cover'},
                {data:'qty'},
                {data:'action'}
            ]
        });
    });

</script>   
@endpush