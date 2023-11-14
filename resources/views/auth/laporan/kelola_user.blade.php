<div class="card">
    <div class="card-header">
    <h3>Data User</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

            <thead>
                <tr>
                    <th>Nik</th>
                    <th>name</th>
                    <th>email</th>
                    <th>status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelolauser as $item)
                <tr>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        {{--  ini di ambil dari globalcontroller baris 17  --}}
                        <td>
                            @if ($item->firstRole())
                                {{ $item->firstRole()->name }}
                            @else
                                Belum memiliki peran
                            @endif
                        </td>

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
