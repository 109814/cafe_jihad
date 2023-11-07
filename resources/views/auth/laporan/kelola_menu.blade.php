<div class="card">
    <div class="card-header">
    <a href="tambah_menu" class="btn btn-info btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambahkan Menu</span>
    </a>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jenis</th>
                    <th>Pegawai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu as $item)
                <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                        <a href="" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

            </tbody>
        </table>
    </div>
</div>
