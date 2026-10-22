<x-app>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <x-button.tambah-button url="admin/data-mata-kuliah/create" />
                        <h4 class="card-title">Data Mata Kuliah</h4>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th>Kode Mata Kuliah</th>
                                        <th>
                                            Nama Mata Kuliah
                                        </th>
                                        <th>Semester</th>
                                        <th>SKS</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_matakuliah as $matakuliah)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.detail-button url="admin/data-mata-kuliah" id="{{ $matakuliah->id }}" />
                                                    <x-button.edit-button url="admin/data-mata-kuliah" id="{{ $matakuliah->id }}" />
                                                    <x-button.hapus-button url="admin/data-mata-kuliah" id="{{ $matakuliah->id }}" />
                                                </div>
                                            </td>
                                            <td>
                                                {{ $matakuliah->kode }}
                                            </td>
                                            <td>
                                                {{ $matakuliah->nama }}
                                            </td>
                                            <td>{{ $matakuliah->semester }}</td>
                                            <td>{{ $matakuliah->sks }}</td>
                                            
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
