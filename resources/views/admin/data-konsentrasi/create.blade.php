<x-app>
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Tambah Data Konsentrasi</h3>

                    <form class="form-horizontal mt-5" method="POST" action="{{ url('admin/data-konsentrasi') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Kode
                                Konsentrasi*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="kode_konsentrasi"
                                    placeholder="Kode Konsentrasi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Nama
                                Konsentrasi*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_konsentrasi"
                                    placeholder="Nama Konsentrasi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3"
                                class="col-sm-3 text-right control-label col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-5">
                                <button type="reset" class="btn btn-info waves-effect waves-light float-right">
                                    <span class="btn-label"><i class="fa fa-times"></i></span> Cancel
                                </button>
                            </div>
                            <div class="col-sm-7">
                                <button type="submit" class="btn btn-info waves-effect waves-light float-right">
                                    <span class="btn-label"><i class="fa fa-save"></i></span> Simpan
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
