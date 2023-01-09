@extends('partials.navbarBefore')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .img {
                margin-top:;
            }
        </style>
    </head>

    <body>
        <div class="img col">
            <img src="/image/logo.png" width="500px" class="position-absolute" alt="">
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-sm-5 offset-sm-5">
                    <div class="card border shadow-lg rounded mx-auto d-block">
                        <div class="card-header bg-dark text-light">
                            <p class="fs-3">LOG IN</p>
                            <i>Masuk ke Akun Anda</i>
                        </div>

                        <div class="card-body">
                            <form method="post" action="/account/create/store-login">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class=" col-form-label">Email</label>

                                    <div class="col-md-12">
                                        <input class="form-control" name="email" id="email" type="email" required
                                            autocomplete="email" autofocus>
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <label for="name" class=" col-form-label">Username</label>

                                    <div class="col-md-12">
                                        <input class="form-control" name="name" id="name" type="text" required
                                            autocomplete="name" autofocus>
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <label for="password" class=" col-form-label">Password</label>

                                    <div class="col-md-12">
                                        <input class="form-control
                                        @error('password') is-invalid @enderror" name="password" id="password" type="password" required autocomplete="password" autofocus>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 form-check">
                                    <div class="">
                                        <input type="checkbox" name="remember" class="form-check-input" id="remember" @if (Cookie::get('remember') == 'remember') checked="checked" @endif>
                                        <label class="form-check-label" for="remember">Ingetin</label>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="">
                                        <center>
                                            <button type="submit" class="btn btn-lg btn-outline-dark">
                                                MASUK
                                            </button>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        {{-- <script>
            @if (Session::has('logout'))
                toastr.success('Akunmu Berhasil Di Daftarkan')
            @endif
        </script> --}}
    </body>

    </html>
@endsection
