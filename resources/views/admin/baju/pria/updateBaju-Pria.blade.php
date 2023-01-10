@extends('partials.navbarPria')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <center>
                    <h1>Update Daftar Baju</h1>
                    <p>Update Baju ke Daftar Baju Laki Kamu</p>
                </center>
            </div>
        </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD

    {{-- perubahan 4 --}}

=======
<!-- perubahan=3 -->
>>>>>>> f8caec66772d1313fe6b3f5753f9402c5b348103
=======
<!-- perubahan 5 -->
{{--  --}}
>>>>>>> 7212e4fbf629550cf65d9239099e634e15638174
    <div class="form container mt-3">
        <div class="row g-0">
            <div class="col-lg-5 mt-3">
                <img src="/image/items/{{ $bajuPria->image }}" width="400px" class="rounded" alt="">
            </div>

            <div class="col-lg-7 px-5 pt-2">
                <form action="/baju/mens/{{ $bajuPria->id }}/update/store" method="post" enctype="multipart/form-data">
                    @method("put")
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $bajuPria->nama }}">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{ $bajuPria->brand }}">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" value="{{ $bajuPria->harga }}">
                    </div>

                    <label class="mb-2" for="ukuran">Ukuran</label>
                    <select class="form-select mb-4" name="ukuran" id="ukuran">
                        <option selected value="S">Choose Size</option>
                        <option value="S" @if ( $bajuPria->ukuran == "S" ) selected @endif>S</option>
                        <option value="M" @if ( $bajuPria->ukuran == "M" ) selected @endif>M</option>
                        <option value="L" @if ( $bajuPria->ukuran == "L" ) selected @endif>L</option>
                        <option value="XL" @if ( $bajuPria->ukuran == "XL" ) selected @endif>XL</option>
                    </select>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $bajuPria->deskripsi }}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label mx-4 text-center"><img src="/image/items/{{ $bajuPria->image }}" width="100px" class="rounded shadow bg-white" alt="">
                            <br> Gambar1
                        </label>

                        <label for="image2" class="form-label mx-4 text-center"><img src="/image/items/{{ $bajuPria->image2 }}" width="100px" class="rounded shadow bg-white" alt="">
                            <br> Gambar2
                        </label>

                        <label for="image3" class="form-label mx-4 text-center"><img src="/image/items/{{ $bajuPria->image3 }}" width="100px" class="rounded shadow bg-white" alt="">
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
