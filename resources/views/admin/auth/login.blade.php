<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fab-Rics Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mystyle.css">
    <link rel="stylesheet" href="/css/input.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: rgb(219, 226, 226);
        }

        .row {
            background: white;
            border-radius: 30px;
        }

        .img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        h1 {
            font-weight: 100;
        }
    </style>
</head>

<body>
    {{-- perubahan 2 --}}
    <section class="form my-4 mx-5 mt-5">
        <div class="container ">
            <div class="row g-0" style="box-shadow: 10px 10px 10px -2px rgba(0, 0, 0, 0.3)">
                <div class="col-lg-5">
                    <img src="/image/logo.png" width="750px" class="img img-fluid" alt="">
                </div>

                <div class="col-lg-7 px-5 pt-5"  data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1000">
                    <h1 class="font-weight-bold">Log In</h1>
                    <i>Masuk ke Akun Anda</i>
                    <form method="post" action="/account/create/store-login" >
                        @csrf

                        <div class="form-row mb-5 mt-5">
                            <div class="col-md-7">
                                <div class="inputbox">
                                    <input class="" name="email" id="email" type="email" required autocomplete="email" autofocus placeholder="Email">
                                    {{-- <span>Email</span> --}}
                                    <i></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col-md-7">
                                <div class="inputbox">
                                    <input class="@error('password') is-invalid @enderror" name="password" id="password" type="password" required autocomplete="password" autofocus>
                                    <span>Password</span>
                                    <i></i>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <label class="switch mb-2">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember"
                            @if (Cookie::get('remember') == 'remember') checked="checked" @endif>
                            <span class="slider"></span>
                        </label>

                        <div class="form-row">
                            <div class="col-md-7">
                                <button type="submit" class=" btn-lg mb-3">
                                    Masuk
                                </button>
                                Akun belum ada? <a href="/account/create" class="mb-5">Daftar!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (Session::has('wrongLogin'))
            toastr.error('Email / Passwordmu Tidak Sesuai')
        @endif
    </script>

    <script>
        @if (Session::has('passwordUpdate'))
            toastr.success('Password Kamu Sukses Di Rubah. Gunakan Dengan Sebaik Mungkin🥰')
        @endif
    </script>
