<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    @include('section.notif')
                    <div class="card-body">
                        <x-button.tambah-button url="admin/data-konsentrasi/create" />
                        <h4 class="card-title">Data Konsentrasi</h4>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th>Kode Konsentrasi</th>
                                        <th>Nama Konsentrasi</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_konsentrasi as $konsentrasi)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.detail-button url="admin/konsentrasi" id="{{ $konsentrasi->id }}" />
                                                    <x-button.edit-button url="admin/konsentrasi" id="{{ $konsentrasi->id }}" />
                                                    <x-button.hapus-button url="admin/konsentrasi" id="{{ $konsentrasi->id }}" />
                                                </div>
                                            </td>
                                            <td>
                                                {{ $konsentrasi->kode_konsentrasi }}
                                            </td>
                                            <td>
                                                {{ $konsentrasi->nama_konsentrasi }}
                                            </td>
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
