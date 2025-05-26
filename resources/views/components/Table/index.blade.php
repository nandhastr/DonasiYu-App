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
                <form action="{{ route('riwayat.destroy', $item->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus donasi ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>              
        </tr>
        @endforeach
        
    </tbody>
    </table>