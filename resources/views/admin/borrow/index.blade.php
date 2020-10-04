@extends('admin/template/default')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Peminjaman Buku</h3>
      </div>
    <div class="box-body">
      
        <table id="dataTables" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Judul Buku</th>
              <th>Aksi</th>
            </thead>
          </table>
    </div>
</div>
<form action="" method="post" id="returnForm">
    @csrf
   @method("PUT")
   <input type="submit" value="Kembalikan" style="display: none"> 

</form>

@endsection
@push('styles')
<link rel="stylesheet" href="{{asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    
@endpush
@push('scripts')
<!-- DataTables -->
<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{asset('assets/plugins/bs-notify.min.js')}}"> </script>
@include('admin/template/partials/alert')
<script>
    $(function(){
        $('#dataTables').DataTable({
            procesing: true,
            serverSide: true,
            ajax:'{{route('admin/borrow/data')}}',
            columns:[
                {data:'DT_RowIndex',orderable:false,searchable:false},
                {data:'User'},
                {data:'Book_title'},
                {data:'action'}
            ]
        });
    });

</script>   
@endpush