@extends('partials.sidebars')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1>Seluruh Akun Pada Fab-Rics</h1>
        </div>
    </div>
</div>
<<<<<<< HEAD
<<<<<<< HEAD
{{-- perubahan 4 --}}
=======
{{-- perubahan 3 --}}
>>>>>>> f8caec66772d1313fe6b3f5753f9402c5b348103
=======
{{-- perubahan 5 --}}
>>>>>>> 7212e4fbf629550cf65d9239099e634e15638174

    <div class="row">
        <div class="col">
            <table class="mt-3 table table-success table-striped-columns table-hover text-center">
                <tr>
                    <th>No</th>
                    <th>Role</th>
                    <th>Foto Profil</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HandPhone</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>

                <?php $x = 1; ?>
                @foreach ( $accounts as $account )
                <tr class="align-middle">
                    <td><?= $x ?></td>
                    <td>@if ( $account->is_admin === 1 )
                            <p>Admin</p>
                        @else
                            <p>Member</p>
                        @endif
                    </td>
                    <td>
                        @if ($account->image)
                            <img src="/image/profile/{{ $account->image }}" width="100px" class="img-thumbnail border shadow-lg rounded mx-auto d-block mb-3">
                        @elseif ($account->gender == "wanita")
                            <img src="/image/profile/cewe.png" width="100px" class="mb-3 rounded shadow bg-white">
                        @elseif ($account->gender == "pria")
                            <img src="/image/profile/cowo.png" width="100px" class="mb-3 rounded shadow bg-white">
                        @endif
                    </td>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->email }}</td>
                    <td>
                        @if ($account->no_hp !== NULL)
                            {{ $account->no_hp }}
                        @else
                            <p>Tidak Punya HP</p>
                        @endif
                    </td>
                    <td>
                        @if ($account->no_hp !== NULL)
                            {{ $account->no_hp }}
                        @else
                            <p>Tidak Punya Alamat</p>
                        @endif
                    </td>

                    <td>{{ $account->gender }}</td>
                    <td><a href="/delete/{{ $account->id }}/member-account" class="delete-member btn bg-white" data-id="{{ $account->id }}" data-name="{{ $account->name }}"><i class="fa-solid fa-trash"></i>Hapus</a></td>
                </tr>
                <?php $x++; ?>
                @endforeach
            </table>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script>
        $('.delete-member').click(function (e) {
            var memberID = $(this).attr('data-id');
            var memberName = $(this).attr('data-name');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: 'Ini Akun Milik '+memberName+' Loh',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, Hapuskan Akun ini!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/delete/'+memberID+'/member-account'
                    Swal.fire(
                    'Terhapus!',
                    'Akun milik '+memberName+'',
                    'success'
                    )
                }
            })
        });
    </script>

@endsection
