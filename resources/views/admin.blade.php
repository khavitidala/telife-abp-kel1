<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/admin">Admin Panel</a>
            <!-- Navbar-->
            <div>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color:red">Logout</a>
                  </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <h3>Daftar Konselor</h3>
                <div class="col-4">
                    <span class="float-left">{{ session('msg') }}</span>
                    <a href="/profile_konselor/create" class="btn btn-secondary float-right">Tambah Konselor</a><br /><br />
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Hapus</th>
                            <th>Akun ID</th>
                            <th>Nama</th>
                            <th>Date employee</th>
                            <th>Nomor Induk</th>
                            <th>Tipe</th>
                        </tr>
                        @foreach($konselor as $d)
                        <tr>
                            <td>
                                <form method="POST" action="/profile_konselor/delete/{{ $d->konselor_id }}" style="display:inline">
                                    <!-- onsubmit="return confirm('Yakin hapus?')"> -->
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                            <td>{{ $d->akun_id }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->date_employee }}</td>
                            <td>{{ $d->nomor_induk }}</td>
                            <td>{{ $d->tipe }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

<<<<<<< Updated upstream
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
        <h3>Daftar Konselor</h3>
        <div class="col-4">
            <span class="float-left">{{ session('msg') }}</span>
            <a href="/profile_konselor/create" class="btn btn-secondary float-right">Tambah Konselor</a><br /><br />
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Hapus</th>
                    <th>Akun ID</th>
                    <th>Nama</th>
                    <th>Date employee</th>
                    <th>Nomor Induk</th>
                    <th>Tipe</th>
                </tr>
                @foreach($konselor as $d)
                <tr>
                    <td>
                        <form method="POST" action="/profile_konselor/delete/{{ $d->konselor_id }}" style="display:inline">
                            <!-- onsubmit="return confirm('Yakin hapus?')"> -->
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    <td>{{ $d->akun_id }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->date_employee }}</td>
                    <td>{{ $d->nomor_induk }}</td>
                    <td>{{ $d->tipe }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row justify-content-center" style="margin-top:13%">
        <h3>Daftar Pasien</h3>
        <div class="col-4">
            <a href="/profile_pasien/create" class="btn btn-secondary float-right">Tambah Pasien</a><br /><br />
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Hapus</th>
                    <th>Akun ID</th>
                    <th>Nama</th>
                    <th>Nomor Induk</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat Tinggal</th>
                    <th>Email</th>
                    <th>No HP</th>
                </tr>
                @foreach($pasien as $d)
                <tr>
                    <td>
                        <form method="POST" action="/profile_pasien/delete/{{ $d->pasien_id }}" style="display:inline">
                            <!-- onsubmit="return confirm('Yakin hapus?')"> -->
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    <td>{{ $d->akun_id }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->nomor_induk }}</td>
                    <td>{{ $d->tgl_lahir }}</td>
                    <td>{{ $d->alamat_tinggal }}</td>
                    <td>{{ $d->email }}</td>
                    <td>{{ $d->no_hp }}</td>
                </tr>
                @endforeach
            </table>
=======
            <div class="row justify-content-center" style="margin-top:13%">
                <h3>Daftar Pasien</h3>
                <div class="col-4">
                    <a href="/profile_pasien/create" class="btn btn-secondary float-right">Tambah Pasien</a><br /><br />
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Hapus</th>
                            <th>Akun ID</th>
                            <th>Nama</th>
                            <th>Nomor Induk</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat Tinggal</th>
                            <th>Email</th>
                            <th>No HP</th>
                        </tr>
                        @foreach($pasien as $d)
                        <tr>
                            <td>
                                <form method="POST" action="/profile_pasien/delete/{{ $d->pasien_id }}" style="display:inline">
                                    <!-- onsubmit="return confirm('Yakin hapus?')"> -->
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                            <td>{{ $d->akun_id }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->nomor_induk }}</td>
                            <td>{{ $d->tgl_lahir }}</td>
                            <td>{{ $d->alamat_tinggal }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->no_hp }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
>>>>>>> Stashed changes
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    </body>
</html>
