<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TELIFE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="/">TELIFE</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="about">Tentang Kami</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="chat">Konselor</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="contact">Feedback</a></li>
                            <li class="nav-item"><a class="nav-link" href="profile">Profile</a></li>
                        </ul>
                    </div>
                    <a href="login" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Sign In</a>
                </div>
            </nav>
<!-- Page Content-->
<section>
            <div class="row justify-content-center" style="margin-top:5%">
                <div class="col-3">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Health Record</h1>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="container mt-4">
            <div class="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Data Medical Record
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse panel-collapse" >
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Medical Record</h3>
                                <span class="float-left">{{ session('msg') }}</span>
                                <a href="/consulRecord/create" class="btn btn-primary">Tambah Record</a><br /><br />
                                <table class="table table-bordered table-striped table-hover">
                                    <tr>
                                        <th>Hapus</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Diagnosa</th>
                                        <th>treatment</th>
                                        <th>Resep Obat</th>
                                        <th>dibuat Tanggal</th>
                                    </tr>
                                        
                                    <!-- @foreach($konselor as $d)
                                        <tr>
                                            <td>
                                                <form method="POST" action="/profile_konselor/delete/{{ $d->konselor_id }}" style="display:inline">
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
                                    @endforeach -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--  -->           
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; TELIFE 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
