@extends('partials.sidebars')


@section('content')

    <div class="container mt-5 bg-light text-dark rounded shadow-lg mx-auto d-block">
        <div class="row bg-dark rounded">
            <div class="col">
                <div class="card-header">
                    <div class="card bg-dark text-white">
                        <p class="mt-2 fs-2 mb-3">Tambahkan Alamat Baru</p>
                        <p>Alamat penagihan / alamat pengiriman</p>
                    </div>
                </div>
            </div>
        </div>
{{-- perubahan 2 --}}
        <div class="row mt-4">
            <div class="col">
                <form action="/account/address/add/store" method="post" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="col-md-6">
                        <label for="no_hp" class="form-label">No Telphone</label>
                        <input type="no_hp" class="form-control" id="no_hp" name="no_hp">
                    </div>

                    <div class="col-md-4">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi">
                    </div>

                    <div class="col-md-4">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" name="kota" class="form-control" id="kota">
                    </div>

                    <div class="col-md-4">
                        <label for="kecamatan" class="form-label">kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" id="kecamatan">
                    </div>

                    <div class="col-md-4">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" id="kelurahan">
                    </div>

                    <div class="col-md-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>

                    <div class="col-md-4">
                        <label for="kode_post" class="form-label">Kode Pos</label>
                        <input type="text" name="kode_post" class="form-control" id="kode_post">
                    </div>

                    <div class="col-12">
                        <button type="submit" name="create" class="btn btn-success btn-lg mb-4">Tambah Alamat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
