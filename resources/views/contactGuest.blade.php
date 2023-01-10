@extends('partials.navbarBefore')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US - Fab-Rics</title>
    <style>

    </style>
</head>
<<<<<<< HEAD

{{-- perubahan 4 --}}

=======
<!-- perubahan=3 -->
>>>>>>> f8caec66772d1313fe6b3f5753f9402c5b348103
<body>
    <div class="container mt-3 position-absolute text-primary" data-aos-delay="400" data-aos="fade-down">
        <div class="row">
            <div class="col offset-sm-1">
                <h1>Contact Us.</h1>
                <br>

                <p>Get in touch with our teams via maps or phone.</p>

                <p>Email : rofidragon71@email.com</p>
                {{-- <hr style="height:1px; color:#333; background-color:#333;"> --}}
                <hr style="height: 1px; margin-left: 0;" width="200px">
                <p>Phone : (+62) 85157455205</p>
            </div>
        </div>
    </div>

    <div class="container-maps text-right" data-aos-delay="400" data-aos="fade-down">
        <div class="row">
            <div class="col mr-5">
                <h4 class="">Our Address</h4>
                <p>The Diagram Jl. Telekomunikasi No.237, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3084850594046!2d107.63328541431758!3d-6.972885070213691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e969bc54be89%3A0x2cde296cfcd5b037!2sDiagram%20Coffee%20%26%20Space!5e0!3m2!1sid!2sid!4v1672568724337!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>

    <div class="container-maps text-right mt-5" data-aos-delay="200" data-aos="fade-down">
        <div class="row">
            <div class="col mr-5">
                <h4 class="">Member Address</h4>
                <p>Lengkong, Kec. Bojongsoang, Kabupaten Bandung, Jawa Barat 40287</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2820883618947!2d107.63278821431769!3d-6.97600687024699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e91f458360e3%3A0x897e12c881ce1bb7!2sX-TRO%20Cafe!5e0!3m2!1sid!2sid!4v1672569035921!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</body>

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


</html>
@endsection
