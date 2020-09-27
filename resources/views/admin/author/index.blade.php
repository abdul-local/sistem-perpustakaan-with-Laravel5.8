@extends('admin/template/default')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Penulis</h3>
    <a href="{{route('admin/author/create')}}" class="btn btn-primary">Tambah Penulis</a>
      </div>
    <div class="box-body">
      
        <table id="dataTables" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
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
            ajax:'{{route('admin/author/data')}}',
            columns:[
                {data:'DT_RowIndex',orderable:false,searchable:false},
                {data:'name'},
                {data:'action'}
            ]
        });
    });

</script>   
@endpush