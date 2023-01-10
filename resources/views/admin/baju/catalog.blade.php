@extends('partials.navbarAuth')


@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Fab-Rics Butik Terpercaya</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <style>
        .swal2-container {
            z-index: 9999;

        }
        .swal2-popup  {
            background: #7971ea;
            opacity: 93%;
        }
    </style>
<!-- perubahan=3 -->
    <body>
        @if ( $bajuWanita->isEmpty() && $bajuPria->isEmpty() && $bajuAnak->isEmpty() )
        <div class="container">
            <h3 class="text-center">No Cloth found</h3>
        </div>
        @else
        <div class="site-section site-blocks-2 block-1 bg-light">
            <div class="container mt-2 mb-4">
                <div class="row">
                        @foreach ($bajuWanita as $cloth)
                            <div class="col-sm-4" data-aos="fade" data-aos-delay="100">
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
                                                class="btn btn-primary card-link mx-4">Edit</a>
                                            <a href="/baju/woman/{{ $cloth->id }}/delete"
                                                class="deleteWanita btn btn-danger card-link" data-id-wanita="{{ $cloth->id }}">Hapus</a>
                                        @endcan
                                        <div class="block-4-text p-4">
                                            <h3><a href="#">{{ $cloth->nama }}</a></h3>
                                            <p class="mb-0">
                                                <?php
                                                $text = $cloth['deskripsi'];
                                                if (strlen($text) > 5) {
                                                    $text = substr($text, 0, 30) . '...';
                                                    echo $text;
                                                }
                                                ?>

                                            </p>
                                            <h6 class="text-primary mt-2 font-weight-bold">Rp{{ $cloth->harga }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @foreach ($bajuAnak as $cloth)
                        <div class="col-sm-4" data-aos="fade" data-aos-delay="200">
                            <div class="item mb-4">
                                <div class="block-4 text-center">
                                    <a class="block-2-item" href="/baju/kids/{{ $cloth->id }}/detail">
                                        <figure class="block-4-image image mb-3">
                                            <img src="/image/items/{{ $cloth->image }}" alt="Image placeholder"
                                                class="img-fluid">
                                        </figure>
                                    </a>

                                    @can('admin')
                                        <a href="/baju/kids/{{ $cloth->id }}/update"
                                            class="btn btn-primary card-link mx-4">Edit</a>
                                        <a href="/baju/kids/{{ $cloth->id }}/delete"
                                            class="deleteAnak btn btn-danger card-link" data-id-anak="{{ $cloth->id }}">Hapus</a>
                                    @endcan
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">{{ $cloth->nama }}</a></h3>
                                        <p class="mb-0">
                                            <?php
                                            $text = $cloth['deskripsi'];
                                            if (strlen($text) > 5) {
                                                $text = substr($text, 0, 30) . '...';
                                                echo $text;
                                            }
                                            ?>

                                        </p>
                                        <h6 class="text-primary mt-2 font-weight-bold">Rp{{ $cloth->harga }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    @foreach ($bajuPria as $cloth)
                        <div class="col-sm-4" data-aos="fade" data-aos-delay="300">
                            <div class="item">
                                <div class="block-4 text-center">
                                    <a class="block-2-item" href="/baju/mens/{{ $cloth->id }}/detail">
                                        <figure class="block-4-image image mb-3">
                                            <img src="/image/items/{{ $cloth->image }}" alt="Image placeholder"
                                                class="img-fluid">
                                        </figure>
                                    </a>

                                    @can('admin')
                                        <a href="/baju/mens/{{ $cloth->id }}/update"
                                            class="btn btn-primary card-link mx-4">Edit</a>
                                        <a href="/baju/mens/{{ $cloth->id }}/delete"
                                            class="deletePria btn btn-danger card-link" data-id-pria="{{ $cloth->id }}">Hapus</a>
                                    @endcan
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">{{ $cloth->nama }}</a></h3>
                                        <p class="mb-0">
                                            <?php
                                            $text = $cloth['deskripsi'];
                                            if (strlen($text) > 5) {
                                                $text = substr($text, 0, 30) . '...';
                                                echo $text;
                                            }
                                            ?>

                                        </p>
                                        <h6 class="text-primary mt-2 font-weight-bold">Rp{{ $cloth->harga }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            {{ $bajuWanita->links(), $bajuPria->links(), $bajuAnak->links() }}
                            {{-- {{  }}
                            {{  }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </body>

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
        $('.deleteWanita').click(function (e) {
            var clothWanita = $(this).attr('data-id-wanita');
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
                    window.location = '/baju/woman/'+clothWanita+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Baju Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

        $('.deleteAnak').click(function (e) {
            var clothAnak = $(this).attr('data-id-anak');
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
                    window.location = '/baju/kids/'+clothAnak+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Baju Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

        $('.deletePria').click(function (e) {
            var clothPria = $(this).attr('data-id-pria');
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
                    window.location = '/baju/mens/'+clothPria+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Baju Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

    </script>

    </html>
@endsection
