@extends('partials.navbarBefore')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Fab-Rics Butik Terpercaya</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
        <div class="site-wrap">
            <!-- HEADER END  -->


            <!-- MAIN HERO START  -->
            <div class="site-blocks-cover" style="background-image: url(images/cloth_5.png);" data-aos="fade">
                <div class="container">
                    <div class="row align-items-start align-items-md-center justify-content-end">
                        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                            <h1 class="mb-2" data-aos="fade-up">Cari Baju Terbaikmu</h1>
                            <div class="intro-text text-center text-md-left">
                                <p class="mb-4">Tampil Menarik dan Percaya Diri dengan Baju Terbaik dari Kami
                                    dan Pilih Baju yang Sesuai dengan Kebutuhan dan Gaya Hidupmu </p>
                                <p>
                                    <a href="/catalogue" class="btn btn-sm btn-primary">Explore Now!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAIN HERO END  -->


            <!-- PRESENTATION START  -->
            <section class="container py-5">
                <div class="row text-center pt-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1" data-aos="fade-down">Categories of The Month</h1>
                        <p data-aos="fade-down" data-aos-delay="50">
                            Kami Menawarkan Kategori Baju yang Beragam dan Terbaru Yang
                            Bikin Kamu Merasakan Keunggulan Kualitas dan Desain Baju Kami
                        </p>
                    </div>
                </div>
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-12 col-md-4 p-5 mt-3">
                        <a href="/baju/mens"><img src="/images/person_4.jpg"
                                class="rounded-circle img-fluid border imgshow m-auto"></a>
                        <h5 class="text-center mt-3 mb-3">Pria</h5>
                        <p class="text-center"><a href="/baju/mens" class="btn btn-primary text-light">Go Shop</a></p>
                    </div>
                    <div class="col-12 col-md-4 p-5 mt-3">
                        <a href="/baju/woman"><img src="/images/person_2.jpg"
                                class="rounded-circle img-fluid border imgshow"></a>
                        <h2 class="h5 text-center mt-3 mb-3">Wanita</h2>
                        <p class="text-center"><a href="/baju/woman" class="btn btn-primary text-light">Go Shop</a></p>
                    </div>
                    <div class="col-12 col-md-4 p-5 mt-3">
                        <a href="/baju/kids"><img src="/image/anak.png"
                                class="rounded-circle img-fluid border imgshow"></a>
                        <h2 class="h5 text-center mt-3 mb-3">Anak</h2>
                        <p class="text-center"><a href="/baju/kids" class="btn btn-primary text-light">Go Shop</a></p>
                    </div>
                </div>
            </section>
            <!-- PRESENTATION END  -->



            <!-- SERVICES START  -->
            <div class="site-section site-section-sm site-blocks-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                            <div class="icon mr-4 align-self-start">
                                <span class="icon-truck"></span>
                            </div>
                            <div class="text">
                                <h2 class="text-uppercase">Gratis Ongkos Kirim!</h2>
                                <p>Nikmati kemudahan belanja online dengan menghemat biaya pengiriman yang biasanya dikenakan.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon mr-4 align-self-start">
                                <span class="icon-refresh2"></span>
                            </div>
                            <div class="text">
                                <h2 class="text-uppercase">Gratis Pengembalian!</h2>
                                <p>Kami memberikan kemudahan bagi pelanggan yang tidak puas dengan produk yang dibeli </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="icon mr-4 align-self-start">
                                <span class="icon-help"></span>
                            </div>
                            <div class="text">
                                <h2 class="text-uppercase">Customer Support</h2>
                                <p>Kami menyediakan layanan pelanggan yang responsif dan profesional untuk membantu Anda selama proses belanja online.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SERVICES END   -->



            <!-- COLLECTION START  -->
            <div class="site-section site-blocks-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                            <a class="block-2-item" href="/baju/woman">
                                <figure class="image">
                                    <img src="images/women.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Women</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                            <a class="block-2-item" href="/baju/kids">
                                <figure class="image">
                                    <img src="images/children.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Children</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                            <a class="block-2-item" href="/baju/mens">
                                <figure class="image">
                                    <img src="images/men.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Men</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COLLECTION END  -->


            <!-- SLIDER START  -->
            <div class="site-section block-3 site-blocks-2 bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 site-section-heading text-center pt-4">
                            <h2>Featured Products</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nonloop-block-3 owl-carousel">
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="#">Tank Top</a></h3>
                                            <p class="mb-0">Kaos Ringan Menyerap Keringat</p>
                                            <p class="text-primary font-weight-bold">Rp50000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="images/wanita_3.png" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="#">Sweater Girl</a></h3>
                                            <p class="mb-0">Kain Tebal Khusus Wanita</p>
                                            <p class="text-primary font-weight-bold">Rp100000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="#">Polo Shirt</a></h3>
                                            <p class="mb-0">Kaos Murah Meriah Lengan Pendek</p>
                                            <p class="text-primary font-weight-bold">69000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="#">T-Shirt Home</a></h3>
                                            <p class="mb-0">Kaos Lengan Pendek Distro Cotton</p>
                                            <p class="text-primary font-weight-bold">Rp70000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="images/wanita_2.png" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="#">Rok Wanita</a></h3>
                                            <p class="mb-0">Rok Berbahan Tipis</p>
                                            <p class="text-primary font-weight-bold">Rp50000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER END  -->


            <!-- Offer Start -->
            <div class="container-fluid offer pt-5">
                <div class="row px-xl-5">
                    <div class="col-md-6 pb-4">
                        <div class="position-relative bg-light text-center text-md-left text-white mb-2 py-5 px-5">
                            <div class="position-relative" style="z-index: 1;">
                                <h5 class="text-uppercase text-primary mb-3">20% Diskon Semua Barang</h5>
                                <h1 class="mb-4 font-weight-semi-bold text-primary">Spring Sale</h1>
                                <a href="/catalogue" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="position-relative bg-light text-center text-md-left text-white mb-2 py-5 px-5">
                            <div class="position-relative" style="z-index: 1;">
                                <h5 class="text-uppercase text-primary mb-3">20% Diskon Semua Barang</h5>
                                <h1 class="mb-4 font-weight-semi-bold text-primary">Winter Sale</h1>
                                <a href="/catalogue" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Offer End -->

            <!-- ABOUT SECTION  -->
            <div class="site-section block-8">
                <div class="container">
                    <div class="row justify-content-center  mb-5">
                        <div class="col-md-7 site-section-heading text-center pt-4">
                            <h2>Big Sale!</h2>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-7 mb-5">
                            <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder"
                                    class="img-fluid rounded"></a>
                        </div>
                        <div class="col-md-12 col-lg-5 text-center pl-md-5">
                            <h2><a href="#">50% diskon seluruh item</a></h2>
                            <span class="block-8-sep">&bullet;</span> Mulai 25 Desember 2022
                            <p>Diskon Seluruh Barang! Dapatkan diskon hingga 50% untuk seluruh produk yang kami tawarkan.
                               Jangan lewatkan kesempatan ini untuk mendapatkan barang-barang keren dengan harga yang terjangkau.
                            </p>
                            <p><a href="/catalogue" class="btn btn-primary btn-sm">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT SECTION  END-->

            <!-- FOOTER START  -->
            <div class="container-fluid bg-dark text-light mt-5 pt-5">
                <div class="row px-xl-5 pt-5">
                    <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                        <a href="" class="text-decoration-none">
                            <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                                    class="text-primary font-weight-bold px-3 mr-1"></span>Fab-Rics</h1>
                        </a>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Gg.PGA, Sukbir, Sukpur, Bali, Bandung
                        </p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>rofidragon71@gmail.com</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>085157455205</p>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <h5 class="font-weight-bold text-light mb-4">Products</h5>
                                <div class="d-flex flex-column justify-content-start">
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li class="mb-2"><a class="text-decoration-none" href="/baju/mens">Men's Cloth</a></li>
                                        <li class="mb-2"><a class="text-decoration-none" href="/baju/woman">Women's Cloth</a></li>
                                        <li class="mb-2"><a class="text-decoration-none" href="/baju/kids">Kid's Cloth</a></li>
                                        <li class="mb-2"><a class="text-decoration-none" href="/catalogue">Popular Dress</a></li>
                                        <li class="mb-2"><a class="text-decoration-none" href="/cart">Shopping Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <h5 class="font-weight-bold text-light mb-4">Supports</h5>
                                <div class="d-flex flex-column justify-content-start">
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li class="mb-2"><a class="text-decoration-none" href="/afterLogin">Home</a></li>
                                        <li class="mb-2"><a class="text-decoration-none" href="#">Our Shop</a></li>
                                        <li class="mb-2"><a class="text-decoration-none" href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('logout'))
            toastr.success('Terimakasih Telah Berkunjung. Kita sudah Rindu')
        @endif
    </script>


    <script>
        @if (Session::has('berhasilDaftar'))
            toastr.success('Akunmu Berhasil Di Daftarkan')
        @endif
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    </body>

    </html>
@endsection

</body>

</html>
