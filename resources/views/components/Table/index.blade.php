<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Peristiwa</th>
            <th scope="col">Jumlah Donasi</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Metode Pembayaran</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($donasiHistory as $item) 
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item['peristiwa'] }}</td>
           <td>Rp {{ number_format($item['nominal'], 0, ',', '.') }}</td>
            <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d M Y') }}</td>            
            <td>{{ $item['methode'] }}</td>
           <td>
            <button type="button" class="btn btn-link p-0 m-0 align-baseline text-danger" data-toggle="modal"
                data-target="#modal-delete" style="font-size: 14px; width: 30px; height: 30px;">
                <i class="fas fa-trash" style="font-size: 14px;"></i>
            </button>
            </td>              
        </tr>
        @endforeach
        
    </tbody>
    </table>

    @foreach ($donasiHistory as $item)
{{-- modal  --}}
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent text-white">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Hapus</h4>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light bg-info" data-dismiss="modal">Batal</button>
                <form action="{{ route('riwayat.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-light bg-danger">Ya, Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

{{-- endmodal --}}


@endforeach













{{-- 
    <script>
        document.addEventListener('DOMContentLoaded', function () {
                const deleteButtons = document.querySelectorAll('.form-delete');
        
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
        
                        const form = this.closest('form');
        
                        Swal.fire({
                            title: 'Yakin ingin menghapus?',
                            text: "Data tidak dapat dikembalikan!",
                            icon: 'warning',
                            position: "top-end",
                            backdrop: 'swal2-backdrop-show',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Ya, hapus!',
                            cancelButtonText: 'Batal'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                });
            });
    </script>     --}}