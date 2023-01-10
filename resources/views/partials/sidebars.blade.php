<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title src="">Butik Hebat PatPat - Jual Fashion</title>
    <link rel="icon" href="/image/baju1.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            font-family: poppins;
        }

        .swal2-container.swal2-shown {
            z-index: 9999;
            background-color: #3b3688;
        }
        .swal2-popup  {
            background-color: #3b3688;
            opacity: 90%;
        }
        
        .swal2-actions.swal2-confirm {
            margin-right: 10px;
        }
    </style>
</head>
<!-- perubahan=3 -->
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/afterLogin">Fab-Rics</a>

            <a class="btn btn-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <i class="fa-regular fa-eye"></i>
            </a>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/baju/woman">Wanita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/baju/mens">Pria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/baju/kids">Anak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link active dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user">{{ Auth::user()->name }}</i>
                            {{-- <i class=""></i> --}}

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/account/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/account/logout">Logout</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/history">Riwayat Pesanan</a></li>
                        </ul>
                    </li>

                </ul>
                <a href="/catalogue" class="btn btn-danger me-4"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="containter text-center mt-4">
            <div class="row">
                <div class="col">
                    @if (Auth::user()->image)
                        <img src="/image/profile/{{ Auth::user()->image }}" class="img-thumbnail border shadow-lg rounded-circle mx-auto d-block mb-3" width="180px" alt="">
                    @elseif (Auth::user()->gender == "wanita")
                        <img src="/image/profile/cewe.png" class="mb-3 rounded-circle shadow bg-white" alt="">
                    @elseif (Auth::user()->gender == "pria")
                        <img src="/image/profile/cowo.png" class="mb-3 rounded-circle shadow bg-white" alt="">
                    @endif

                    @if (Auth::user()->is_admin == 1)
                        @can('admin')
                            <h5>Admin</h5>
                        @endcan
                    @else
                        <h5 class="">Member</h5>
                    @endif

                </div>
            </div>
            <button type="button" class="btn-close mt-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="container ">
            <div class="offcanvas-header mt-1 justify-content-center">
                <h3 class="offcanvas-title text-center" id="offcanvasExampleLabel">{{ Auth::user()->name }}</h3>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <p>Kelola Informasi Profil Anda guna mengontrol, melindungi dan mengamankan Akun</p>
            </div>
        </div>

        <div>
            <li type="none"><a class="dropdown-item mb-3" href="/account/profile">
                <i class="fa-solid fa-user mx-4"></i>Profil</a>
                <hr style="height:2px; color:#333; background-color:#333;">
            </li>

            <li type="none"><a class="dropdown-item mb-3" href="/account/password/update">
                <i class="fa-solid fa-key mx-4"></i>Ubah Password</a>
                <hr style="height:2px; color:#333; background-color:#333;">
            </li>

            <li type="none"><a class="delete dropdown-item mb-3" data-id="{{ Auth::user()->id }}" href="/auth/{{ Auth::user()->id }}/delete-account">
                <i class="fa-solid fa-close mx-4"></i>Hapus Akun</a>
            </li>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script>
        $('.delete').click(function(e) {
            var profileID = $(this).attr('data-id');
            e.preventDefault()
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-primary mx-2'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Yakin Mau Hapus Akun?',
                text: "Duit dan Barang Belanjaanmu Akan Hilang :(",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Hapus',
                cancelButtonText: 'Gajadi',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/auth/'+profileID+'/delete-account'
                    swalWithBootstrapButtons.fire(
                        'Terhapus!',
                        'Akunmu Terhapus',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
            )   {
                swalWithBootstrapButtons.fire(
                    'Alhamdulillah',
                    'Akunmu Tersimpan Rapih',
                    'error'
                )
            }
            })

        });

    </script>
</body>

</html>
