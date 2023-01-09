@extends('partials.navbarPria')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <center>
                    <h1>Tambah Daftar Baju</h1>
                    <p>Tambah Baju ke Daftar Baju Laki Kamu</p>
                </center>
            </div>
        </div>
    </div>


    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <form action="/baju/mens/create/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga">
                    </div>

                    <label class="mb-2" for="ukuran">Ukuran</label>
                    <select class="form-select mb-4" name="ukuran" id="ukuran">
                        <option selected value="S">Choose Size</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <div class="mb-3">
                        <center>
                            <button type="submit" name="add" class="btn btn-dark btn-lg mb-3 align-items-center">Add Cloth</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
