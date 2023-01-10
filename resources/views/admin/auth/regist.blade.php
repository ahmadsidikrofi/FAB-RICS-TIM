<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
     {{-- perubahan 5 --}}
     {{--  --}}
    <section class="form my-4 mx-5 mt-5">
        <div class="container">
            <div class="row g-0" style="box-shadow: 10px 10px 10px -2px rgba(0, 0, 0, 0.3)">
                <div class="col-lg-5">
                    <img src="/image/logo.png" width="750px" class="img img-fluid" alt="">
                </div>

                <div class="col-lg-7 px-5 mt-3" data-aos="fade-right" data-aos-easing="ease-in-cubic" data-aos-duration="500">
                    <h1 class="font-weight-bold">Register</h1>
                    <i>Daftarkan Dirimu</i>
                    <form method="post" action="/account/create/store-signUp" >
                        @csrf

                        <div class="mb-4 mt-3">
                            <div class="col-md-7">
                                <div class="inputbox">
                                    <input class="" name="name" id="name" type="text" required autocomplete="name" autofocus placeholder="Username">
                                    <i></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 mt-3">
                            <div class="col-md-7">
                                <div class="inputbox">
                                    <input class="" name="email" id="email" type="email" required autocomplete="email" autofocus placeholder="Email">
                                    <i></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col-md-7">
                                <div class="inputbox">
                                    <input class="" name="password"
                                    id="password" type="password" required autocomplete="password" autofocus placeholder="Password">
                                    <i></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col-md-7">
                                <div class="inputbox">
                                    <input class="" name="password_confirmation"
                                    id="password" type="password" required autocomplete="password" placeholder="Konfirmasi Password">
                                    <i></i>
                                </div>
                                <i class="@error('password') is-invalid @enderror"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-7">
                                <button type="submit" class="mb-3">
                                    Lanjutkan
                                </button>
                                Sudah ada akun <a href="/account/login/buyer" class="mb-5">Login!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
