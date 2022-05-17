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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Data Konselor
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse panel-collapse" >
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Daftar Konselor</h3>
                    <span class="float-left">{{ session('msg') }}</span>
                    <a href="/profile_konselor/create" class="btn btn-primary">Tambah Konselor</a><br /><br />
                    <table class="table table-bordered table-striped table-hover">
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
        </div>
          <div class="card mt-4">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  Data Pasien
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse panel-collapse" >
            <div class="card">
            <div class="card-body">
                <h3 class="card-title">Daftar Pasien</h3>
                <a href="/profile_pasien/create" class="btn btn-primary">Tambah Pasien</a><br /><br />
                <table class="table table-bordered table-striped table-hover">
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
            </div>
          </div>
        </div>
    </div>
    </body>
</html>
