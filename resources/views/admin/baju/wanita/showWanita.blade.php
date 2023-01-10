@extends('partials.navbarWanita')

@section('content')
    <title>Home Page</title>
    <style>
        img {
            width: 100%;
            height: 200px;
        }

        .carousel-inner {
            width: 100%;
            max-height: 200px !important;
        }

        .swal2-container {
            z-index: 9999;
        }
        .swal2-popup  {
            background: #7971ea;
            opacity: 93%;
        }
    </style>
<<<<<<< HEAD
        {{-- perubahan 4 --}}
=======
        {{-- perubahan 5 --}}
        {{--  --}}
>>>>>>> 7212e4fbf629550cf65d9239099e634e15638174
    <div class="container mt-5">
        <div class="row">
            <div class="col border-2">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="/image/baju1.png" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/image/baju2.png" class="d-block" alt="...">
                        </div>
                        {{-- <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div> --}}
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<!-- perubahan=3 -->
    <div class="site-section site-blocks-2 block-1 bg-light">
        <div class="container mt-2 mb-4">
            <div class="row">
                @foreach ($bajuWanita as $cloth)
                    <div class="col-sm-4" data-aos="fade-down" data-aos-delay="200">
                        <div class="item mb-4">
                            <div class="block-4 text-center">
                                <a class="block-2-item" href="/baju/woman/{{ $cloth->id }}/detail">
                                    <figure class="block-4-image image mb-3">
                                        <img src="/image/items/{{ $cloth->image }}" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                </a>

                                @can('admin')
                                    <a href="/baju/woman/{{ $cloth->id }}/update"
                                        class="btn btn-dark card-link mx-4">Edit</a>
                                    <a href="/baju/woman/{{ $cloth->id }}/delete" class="delete btn btn-danger card-link" data-id="{{ $cloth->id }}">Hapus</a>
                                @endcan
                                <div class="block-4-text p-4">
                                    <h3><a href="/baju/woman/detail">{{ $cloth->nama }}</a></h3>
                                    <p class="mb-0">
                                        <?php
                                        $text = $cloth['deskripsi'];
                                        if (strlen($text) > 5) {
                                            $text = substr($text, 0, 30) . '...';
                                            echo $text;
                                        }
                                        ?>

                                    </p>
                                    <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ $cloth->harga }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    {{ $bajuWanita->links() }}
                </div>
            </div>
        </div>
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
        @if (Session::has('tambah'))
            toastr.success('🥼Baju Berhasil Ditambahkan😍')
        @endif
    </script>

    <script>
        $('.delete').click(function (e) {
            var clothId = $(this).attr('data-id');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/baju/woman/'+clothId+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Baju Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

    </script>
@endsection
