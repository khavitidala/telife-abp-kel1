<!DOCTYPE html>
<html>

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
                        <form method="post" action="/profile_konselor/{{ $d->konselor_id }}" style="display:inline"
                            onsubmit="return confirm('Yakin hapus?')">
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
                        <form method="post" action="/profile_pasien/{{ $d->pasien_id }}" style="display:inline"
                            onsubmit="return confirm('Yakin hapus?')">
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
</body>
</html>