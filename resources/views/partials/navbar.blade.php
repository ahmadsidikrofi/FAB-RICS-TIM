<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title src="">Butik Hebat PatPat - Jual Fashion</title>
    <link rel="icon" href="/image/baju1.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            font-family: poppins;
        }
    </style>
</head>
{{-- perubahan 2 --}}
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/afterLogin">Fab-Rics</a>
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
                            <i class="fa-regular fa-user"></i>
                            {{-- <i class=""></i> --}}

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/account/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/account/logout">Logout</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Status Pesanan</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="" class="btn btn-danger me-4"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col">
            @yield('content')
        </div>
    </div>

    <div class="col">
        @yield('contentCatalog')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
