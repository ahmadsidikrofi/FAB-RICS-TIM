@extends('partials.sidebars')

@section('content')
    <script src="https://unpkg.com/feather-icons"></script>
    <head>
        <title>Fab-Rics The Best Butik Indonesia</title>
        <link rel="stylesheet" href="/css/input.css">
    </head>
    <section>
        <div class="container profile mt-3 mb-4 text-center shadow-lg p-3 mb-5 bg-white rounded">
            <div class="col">
                <h1>Profile</h1>
            </div>
        </div>

        {{-- Perubahan 5 --}}
        {{--  --}}
        <form action="/account/profile/{{ Auth::user()->id }}/foto_profile/store" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="container text-center">
                <div class="card mx-auto">
                    <div class="icon">
                        <div class="text-center">
                            @if (Auth::user()->image)
                                <img src="/image/profile/{{ Auth::user()->image }}" class="img-thumbnail border mx-auto d-block mb-3" alt="">
                            @elseif (Auth::user()->gender == "wanita")
                                <img src="/image/profile/cewe.png" class="mb-3 rounded-circle shadow bg-white" alt="">
                            @elseif (Auth::user()->gender == "pria")
                                <img src="/image/profile/cowo.png" class="mb-3 rounded-circle shadow bg-white" alt="">
                            @endif
                        </div>
                    </div>

                    <div class="content">
                        @if (Auth::user()->is_admin == 1)
                            @can('admin')
                                <h4><a href="/accounts/members" class="btn btn-lg btn-warning">Admin</a></h4>
                            @endcan
                        @else
                            <h2 class="text-transparent">Member</h2>
                        @endif

                        <label for="image" class="btn btn-dark"><i class="fa-solid fa-upload"></i> Upload</label>
                        <input type="file" name="image" class="form-control" id="image" style="display: none;">
                        <button class="btn btn-primary" name="update_foto">Ganti Foto</button>
                    </div>
                </div>
            </div>
        </form>

            {{-- perubahan 3 --}}
        <div class="container mt-4">
            <div class="col mb-4">
                <form action="/account/profile/{{ Auth::user()->id }}/update/store" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="mb-3 row ">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" readonly class="form-control-plaintext" id="email"
                                value="{{ Auth::user()->email }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="input col-sm-10" id="name" value="{{ Auth::user()->name }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-3 col-form-label">No Handphone</label>
                        <div class="col-sm-9">
                            <input type="telp" name="no_hp" class="input col-sm-10" id="no_hp" value="{{ Auth::user()->no_hp }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="telp" name="alamat" class="input col-sm-10" id="alamat" value="{{ Auth::user()->alamat }}">
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <label class="col-2" for="gender">Jenis Kelamin</label>
                        <select class="input col-7 offset-sm-1 form-control" name="gender" id="gender" style="width: 18cm">
                            <option @if ( Auth::user()->gender == "pria") selected @endif value="pria">Pria</option>
                            <option @if ( Auth::user()->gender == "wanita") selected @endif value="wanita">Wanita</option>
                        </select>
                    </div>

                    <center>
                        <button name="update" class="update btn btn-primary btn-lg">Update</button>
                    </center>
                </form>


            </div>
        </div>
    </section>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('profileUpdate'))
            toastr.success('Profile Kamu Sukses Di Update')
        @endif
    </script>
@endsection
