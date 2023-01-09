@extends("partials.sidebars")


@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fab-Rics Alamat Rumah Kalian</title>
</head>
<body>
    <div class="mt-4  p-5 bg-success text-white border shadow-lg rounded mx-auto d-block">
        <a href="/account/address/add" class="btn btn-danger btn-lg float-end"><i class="fa-solid fa-plus"></i></a>
        <h2>Alamat Saya</h2>
        <h6>untuk penagihan dan pengiriman</h6>
        <div class="row mt-3">
            <div class="col mt-3">
            @foreach ( $alamat as $address )
                <p>{{ $address->name }} | {{ $address->no_hp }}</p>
                <p>{{ $address->alamat }} , {{ $address->kelurahan }} , {{ $address->kabupaten }}
                   {{ $address->kota }} , {{ $address->provinsi }} , {{ $address->kode_post }}</p>
                <a href="#" class="btn btn-light">Ubah Alamat</a>
                <a href="/account/address/{{ $address->id }}/delete" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                <div class="row mt-4">
                    <hr style="height:5px; color:rgb(255, 255, 255); background-color:rgb(255, 255, 255);">
                </div>
                @endforeach
            </div>
        </div>
    </div>
{{-- perubahan 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('hapus'))
            toastr.error('Alamat Berhasil Di Hapus')
        @endif
    </script>
</body>
</html>


@endsection
