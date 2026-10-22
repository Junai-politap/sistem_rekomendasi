<x-app>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <x-button.tambah-button url="admin/data-dosen/create" />
                        <h4 class="card-title">Data Dosen</h4>
                        
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th>NIP
                                            <br>
                                            Nama Lengkap
                                        </th>
                                        <th>Bidang Keahlian</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_dosen as $dosen)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.detail-button url="admin/data-dosen" id="{{ $dosen->id }}" />
                                                    <x-button.edit-button url="admin/data-dosen" id="{{ $dosen->id }}" />
                                                    <x-button.hapus-button url="admin/data-dosen" id="{{ $dosen->id }}" />
                                                </div>
                                            </td>
                                            <td>
                                                {{ $dosen->nip }}
                                                <br>
                                                {{ $dosen->nama_lengkap }}
                                            </td>
                                            <td>{{ $dosen->bidang_keahlian }}</td>
                                            
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
