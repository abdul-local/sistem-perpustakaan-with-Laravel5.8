
<a href="{{route('admin/book/edit',$model)}}" class="btn btn-warning">Edit</a>
<button href="{{route('admin/book/destroy',$model)}}" class="btn btn-danger" id="delete">Hapus</button>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $('button#delete').on('click',function(e){
        e.preventDefault();

        var href=$(this).attr('href');
                    Swal.fire({
            title: 'Apakah kamu yakin akan menghapus datamu ?',
            text: "Data yang sudah kamu hapus tidak bisa dikembalikan lagi !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus saja !'
            }).then((result) => {
            if (result.isConfirmed) {
             document.getElementById('deleteForm').action =href;
             document.getElementById('deleteForm').submit();
                Swal.fire(
                'Terhapus!',
                'Datamu berhasil dihapus.',
                'success'
    )
  }
})

    })
</script>