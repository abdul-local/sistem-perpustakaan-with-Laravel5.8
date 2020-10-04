

<button href="{{route('admin/borrow/return',$model)}}" class="btn btn-info" id="return">Pengembalian</button>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $('button#return').on('click',function(e){
        e.preventDefault();

        var href=$(this).attr('href');
                    Swal.fire({
            title: 'Apakah kamu yakin akan mengebalikan buku yang sudah dipinjam  ?',
            text: "Pastikan data dan Buku Yang dikembalikan sama !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, kembalikan saja !'
            }).then((result) => {
            if (result.isConfirmed) {
             document.getElementById('returnForm').action =href;
             document.getElementById('returnForm').submit();
                Swal.fire(
                'Dikembalikan!',
                'Datamu berhasil dikembalikan.',
                'success'
    )
  }
})

    })
</script>