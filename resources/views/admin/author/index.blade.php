@extends('admin/template/default')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Penulis</h3>
      </div>
    <div class="box-body">
        <table id="dataTables" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
            </thead>
          </table>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(function(){
        $('#dataTables').DataTable({
            procesing: true,
            serverSide: true,
            ajax:'{{route('admin/author/data')}}',
            columns:[
                {data:'id'},
                {data:'name'}
            ]
        });
    });

</script>   
@endpush