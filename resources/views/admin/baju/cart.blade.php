<?php
use App\Models\Cart;
$grand = 0;
$sum_qty = 0;

$count = Cart::where('user_id', Auth::user()->id)->count()


?>
{{-- perubahan 4 --}}

@extends('partials.navbarAuth')

@section('content')

    <title>Keranjangmu</title>
    <link rel="stylesheet" href="/css/inputCart.css">
    <style>
        .swal2-container {
            z-index: 9999;
        }
        .swal2-popup  {
            background: #7971ea;
            opacity: 93%;
        }
    </style>

    <div class="site-wrap">
        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="/afterLogin">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
                </div>
            </div>
        </div>

        @if ( $count == 0 )
            <div class="container text-center mb-5">
                <div class="row">
                    <div class="col">
                        <h1 class="mt-5 text-primary mb-5">Isi Keranjangmu Dulu Yuk {{ Auth::user()->name }}</h1>
                        <img src="/image/emptyCart.gif" class="" alt="" >
                    </div>
                </div>
            </div>
        @else
            <div class="site-section">
                <div class="container">
                    <div class="row mb-5">
                        <form class="col-md-12" method="post">
                            <div class="site-blocks-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-total">Total</th>
                                            <th class="product-update">Update</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $cartItem as $item )
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <img src="/image/items/{{ $item->image }}" alt="Image" class="img-fluid">
                                                </td>
                                                <td class="product-name">
                                                    <h2 class="h5 text-black">{{ $item->nama }}</h2>
                                                    <h6 class="text-left">Product Candidate by: {{ Auth::user()->name }}</h6>
                                                </td>
                                                <td>
                                                    Rp{{ $item->harga }}
                                                </td>
                                                <form action="/cart/update-item/{{ $item->id }}" method="post">
                                                    @method("put")
                                                    @csrf
                                                    <td>
                                                        <div class="input-group mb-3 mx-auto" style="max-width: 120px;">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-outline-primary js-btn-minus"
                                                                    type="button">&minus;</button>
                                                            </div>
                                                            <input type="text" id="quantity" name="quantity" class="form-control text-center" value="{{ $item->quantity }}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-primary js-btn-plus"
                                                                    type="button">&plus;</button>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>Rp{{ $item->harga * $item->quantity }}</td>
                                                    <td><button type="submit" name="update" class="btn btn-primary btn-sm btn-block">Update Cart</button></td>
                                                </form>
                                                <td><a href="/cart/hapus-item/{{ $item->id }}" class="delete btn btn-primary btn-sm" data-id="{{ $item->id }}">X</a></td>
                                            </tr>
                                            <?php
                                            $grand += $item->harga * $item->quantity
                                            ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <a href="/catalogue" class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="row justify-content-end">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-12 text-right border-bottom mb-5">
                                            <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <span class="text-black">Total</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <strong class="text-black">Rp{{
                                                $grand
                                            }}</strong>
                                        </div>
                                    </div>

                                    <form action="/checkout/payment/{{ Auth::user()->id }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="image" value="{{ $item->image }}">
                                                <input type="hidden" name="nama" value="{{ $item->nama }}">
                                                <input type="hidden" name="harga" value="{{ $item->harga }}">
                                                <input type="hidden" name="quantity"  value="{{ $item->quantity }}">
                                                <button name="payment" class="checkoutButton btn btn-primary mb-3 btn-lg py-3 btn-block" data-name="{{ Auth::user()->name }}" data-id-checkout='{{ $item->id }}'
                                                    onclick="window.location='#'">Proceed To Checkout</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        @if (Session::has('addItem'))
            toastr.success('Berhasil Masuk Keranjang 😍')
        @endif
    </script>

    <script>
        $('.delete').click(function (e) {
            var itemId = $(this).attr('data-id');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Barangmu Bakal Hilang Dari Keranjang Loh",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/cart/hapus-item/'+itemId+''
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
            })
        });
    </script>

    <script>
        $('.checkoutButton').click(function() {
            var itemId = $(this).attr('data-id-checkout');
            var Name = $(this).attr('data-name');
            Swal.fire(
            'Mantapp!',
            'Sering-sering khilaf di Fab-Rics Ya '+Name+'',
            'success'
            )
        });
    </script>
@endsection
