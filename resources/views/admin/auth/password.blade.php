@extends('partials.sidebars')

@section('content')
    <script src="https://unpkg.com/feather-icons"></script>
    <head>
        <title>Fab-Rics The Best Butik Indonesia</title>
        <link rel="stylesheet" href="/css/input.css">
        <link rel="stylesheet" href="/css/mystyle.css">
    </head>
    <section>
        <div class="container profile mt-3 mb-4">
            <div class="col mx-auto text-center">
                <h1>Ubah Password</h1>
            </div>
        </div>

        {{-- perubahan 3 --}}
        <div class="container">
            <div class="row">
                <div class="card-change_password mx-auto rounded">
                    <div class="container">
                        <div class="col">
                            <form action="/account/password/{{ Auth::user()->id }}/update/store" method="post">
                                @csrf
                                @method("put")
                                <div class="mb-3 row mt-5">
                                    <label for="current_password" class="col-sm-3 col-form-label" style="font-size: 15px">Kata Sandi Sekarang</label>
                                    <div class="col-sm-9">
                                        <div class="inputbox">
                                            <input class="" name="current_password" id="current_password" type="password" required>
                                            <i></i>
                                        </div>
                                        <i class="@error('current_password') is-invalid @enderror"></i>

                                        @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <hr style="height:5px; color:#333; background-color:#333;">
                                </div>

                                <br>
                                <div class="mb-3 row">
                                    <label for="password" class="col-sm-3 col-form-label"  style="font-size: 15px">Kata Sandi Baru</label>
                                    <div class="col-sm-9">
                                        <input id="password" type="password" class="form-control
                                        @error('password') is-invalid @enderror" name="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="password_confirmation" class="col-sm-3 col-form-label"  style="font-size: 15px">Konfirmasi Kata Sandi</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" name="password_confirmation">

                                        <button name="password_update" class="passwordUpdate update btn-lg mt-3 mb-3" data-id="{{ Auth::user()->id }}" >Konfirmasi</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    {{-- <script>
        $('.passwordUpdate').click(function (e) {
            var passwordUpdate = $(this).attr('data-id');
            e.preventDefault()

            Swal.fire({
                title: 'Mau Rubah Password?',
                text: "Setelah Ini Kamu Akan Di Arahkan Ke Halaman Login",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#7d72eb',
                cancelButtonColor: '#7d72eb',
                confirmButtonText: 'Sudah Yakin!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/account/password/'+passwordUpdate+'/update/store'
                    Swal.fire(
                    'Sukses Update Password',
                    'Passwordmu Selesai Di Update',
                    'success'
                    )
                }
            })
        });
    </script> --}}
@endsection
