<x-app>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <x-button.tambah-button url="admin/data-mahasiswa/create" />
                        <h4 class="card-title">Data Mahasiswa</h4>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th>NIM</th>
                                        <th>
                                            Nama Lengkap
                                        </th>
                                        <th>Tahun Masuk</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mahasiswa as $mahasiswa)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.detail-button url="admin/data-mahasiswa" id="{{ $mahasiswa->id }}" />
                                                    <x-button.edit-button url="admin/data-mahasiswa" id="{{ $mahasiswa->id }}" />
                                                    <x-button.hapus-button url="admin/data-mahasiswa" id="{{ $mahasiswa->id }}" />
                                                </div>
                                            </td>
                                            <td>
                                                {{ $mahasiswa->nim }}
                                            </td>
                                            <td>
                                                {{ $mahasiswa->nama }}
                                            </td>
                                            <td>{{ $mahasiswa->tahun_masuk }}</td>
                                            
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
