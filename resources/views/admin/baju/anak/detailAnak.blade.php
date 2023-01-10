@extends('partials.navbaranak')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fab-Rics Butik Terpercaya</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/assets1/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets1/img/favicon.ico">

    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets1/css/templatemo.css">
    <link rel="stylesheet" href="/assets1/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/assets1/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="/assets1/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="/assets1/css/slick-theme.css">

</head>
{{-- perubahan 5 --}}
{{--  --}}
{{--  --}}
<body>
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bajuAnak->image }}"  alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-12 slide carousel-multi-item carousel-related-product" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                @if ($detail_bajuAnak->image && $detail_bajuAnak->image2 && $detail_bajuAnak->image3)
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/{{ $detail_bajuAnak->image }}" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/{{ $detail_bajuAnak->image2 }}" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/{{ $detail_bajuAnak->image3 }}" alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($detail_bajuAnak->image && !$detail_bajuAnak->image2 && !$detail_bajuAnak->image3)
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/{{ $detail_bajuAnak->image }}" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/contoh_baju.png" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/contoh_baju.png" alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($detail_bajuAnak->image && $detail_bajuAnak->image2 && !$detail_bajuAnak->image3)
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/{{ $detail_bajuAnak->image }}" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/{{ $detail_bajuAnak->image2 }}" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/contoh_baju.png" alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/contoh_baju.png" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/contoh_baju.png" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/image/items/contoh_baju.png" alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <!--/.First slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $detail_bajuAnak->nama }}</h1>
                            <p class="h3 py-2">Rp{{ $detail_bajuAnak->harga }}</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $detail_bajuAnak->brand }}</strong></p>
                                </li>
                            </ul>

                            <h6>Deskripsi Produk:</h6>
                            <p>{{ $detail_bajuAnak->deskripsi }}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Tersedia Dalam Warna : </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>

                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul>

                            <form action="/cart/{{ $detail_bajuAnak->id }}/add" method="post">
                                @csrf
                                @method('put')

                                <input type="hidden" name="nama" value="{{ $detail_bajuAnak->nama }}">
                                <div class="row">
                                    <div class="col-auto">
                                        <input type="hidden" name="image" value="{{ $detail_bajuAnak->image }}">
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Ukuran :
                                                {{-- <input type="hidden" name="product-size" id="product-size" value="S"> --}}
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-primary btn-size">S</span></li>
                                            <li class="list-inline-item"><span class="btn btn-primary btn-size">M</span></li>
                                            <li class="list-inline-item"><span class="btn btn-primary btn-size">L</span></li>
                                            <li class="list-inline-item"><span class="btn btn-primary btn-size">XL</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">Jumlah :
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="input-group mb-3 mx-auto" style="max-width: 120px;">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-primary js-btn-minus"
                                                            type="button">&minus;</button>
                                                    </div>
                                                    <input type="text" name="quantity" id="quantity" class="form-control text-center" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-primary js-btn-plus"
                                                            type="button">&plus;</button>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <input type="hidden" name="harga" value="{{ $detail_bajuAnak->harga }}">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg" name="add_cart" value="add_cart">Add To Cart</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <form action="/checkout/payment/detail/{{ $detail_bajuAnak->id }}" method="post">
                                        @csrf
                                        <input type="hidden" name="nama" value="{{ $detail_bajuAnak->nama }}">
                                        <input type="hidden" name="harga" value="{{ $detail_bajuAnak->harga }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="image" value="{{ $detail_bajuAnak->image }}">
                                        <button type="submit" class="w-100 btn btn-primary btn-lg" name="buy" value="buy">Buy</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    {{-- perubahan 4 --}}
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                @foreach ( $bajuAnak as $cloth )
                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="/image/items/{{ $cloth->image }}">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-primary text-white mt-2" href="/baju/kids/{{ $cloth->id }}/detail"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="/baju/kids/{{ $cloth->id }}/detail" class="h3 text-decoration-none">{{ $cloth->nama }}</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="text-center mb-0">Rp{{ $cloth->harga }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </section>
    <!-- End Article -->

    {{-- Footer --}}
    @include('partials.footer')

    <!-- Start Script -->
    <script src="/assets1/js/jquery-1.11.0.min.js"></script>
    <script src="/assets1/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assets1/js/bootstrap.bundle.min.js"></script>
    <script src="/assets1/js/templatemo.js"></script>
    <script src="/assets1/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="/assets1/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>

@endsection
