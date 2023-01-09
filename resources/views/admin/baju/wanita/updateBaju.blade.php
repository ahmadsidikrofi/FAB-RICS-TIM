@extends('partials.navbarWanita')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <center>
                    <h1>Update Daftar Baju</h1>
                    <p>Update Baju ke Daftar Baju Wanita Kamu</p>
                </center>
            </div>
        </div>
    </div>

    <div class="form container mt-3">
        <div class="row g-0">
            <div class="col-lg-5 mt-3">
                <img src="/image/items/{{ $bajuWanita->image }}" width="400px" class="rounded shadow bg-white" alt="">
            </div>
                {{-- perubahan 1 --}}

            <div class="col-lg-7 px-5 pt-2">
                <form action="/baju/woman/{{ $bajuWanita->id }}/update/store" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $bajuWanita->nama }}">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{ $bajuWanita->brand }}">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" value="{{ $bajuWanita->harga }}">
                    </div>

                    <label class="mb-2" for="ukuran">Ukuran</label>
                    <select class="form-select mb-4" name="ukuran" id="ukuran">
                        <option selected value="S">Choose Size</option>
                        <option value="S" @if ( $bajuWanita->ukuran == "S" ) selected @endif >S</option>
                        <option value="M" @if ( $bajuWanita->ukuran == "M" ) selected @endif >M</option>
                        <option value="L" @if ( $bajuWanita->ukuran == "L" ) selected @endif >L</option>
                        <option value="XL" @if ( $bajuWanita->ukuran == "XL" ) selected @endif >XL</option>
                    </select>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $bajuWanita->deskripsi }}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label mx-4 text-center"><img src="/image/items/{{ $bajuWanita->image }}" width="100px" class="rounded shadow bg-white" alt="">
                           <br> Gambar1
                        </label>

                        <label for="image2" class="form-label mx-4 text-center"><img src="/image/items/{{ $bajuWanita->image2 }}" width="100px" class="rounded shadow bg-white" alt="">
                            <br> Gambar2
                        </label>

                        <label for="image3" class="form-label mx-4 text-center"><img src="/image/items/{{ $bajuWanita->image3 }}" width="100px" class="rounded shadow bg-white" alt="">
                            <br> Gambar3
                        </label>

                        <input type="file" name="image" class="form-control" id="image" style="display: none;">
                        <input type="file" name="image2" class="form-control" id="image2" style="display: none;">
                        <input type="file" name="image3" class="form-control" id="image3" style="display: none;">
                    </div>

                    <div class="mb-3">
                        <center>
                            <button type="submit" name="update" class="btn btn-dark btn-lg mb-3 align-items-center">Update Cloth</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
