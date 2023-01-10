<?php
$grand = 0;

?>

@extends('partials.navbarAuth')

@section('content')
<!-- perubahan=3 -->
<div class="site-section site-blocks-2 block-1 bg-light">
    <div class="container mt-2 mb-4">
        <div class="row">
            @if ( $admin_check->isEmpty() )
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <h1 class="mt-5 text-primary mb-5">Isi Keranjangmu Dulu Yuk {{ Auth::user()->name }}</h1>
                            <img src="/image/emptyCart.gif" class="" alt="" >
                        </div>
                    </div>
                </div>
            @else
                @foreach ($admin_check as $check)
                    <div class="col-sm-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="item mb-4">
                            <div class="block-4">
                                <a class="block-2-item" href="#">
                                    <figure class="block-4-image image">
                                        <img src="/image/items/{{ $check->image }}" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                </a>

                                <div class="block-4-text p-4">
                                    <h5 class="float-right text-primary">Status : {{ $check->status }}</h5>
                                    <span class="icon-shopping-bag text-primary" style="font-size: 30px;"></span>
                                    @can('admin')
                                    <div class="container text-right mt-3">
                                        <form action="/adminCheck/{{ $check->id }}/status-check" method="post" class="d-block">
                                            @csrf
                                            @method('put')
                                            <select name="status" id="status" class="d-inline-block form-control mb-3">
                                                <option @if ($check->status === "decline") selected @endif value="decline">Decline</option>
                                                <option @if ($check->status === "accept") selected @endif value="accept">Accept</option>
                                            </select>
                                            <div class="">
                                                <button name="update" class="w-100 btn btn-primary">Sahkan</button>
                                            </div>
                                        </form>
                                    </div>
                                    @endcan
                                    <p class="text-primary mt-3">Belanja : {{ $check->created_at->format('d F, Y') }}</p>

                                    <h3><a href="#">{{ $check->nama }}</a></h3>
                                    <p class="mb-3">{{ $check->quantity }} barang</p>
                                    <?php $grand += $check->harga * $check->quantity ?>
                                    <p class="mb-0">Total Belanja</p>
                                    <h6 class="text-primary font-weight-bold"> Rp{{ $grand }}</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

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
<!-- Footer End -->

@endsection
