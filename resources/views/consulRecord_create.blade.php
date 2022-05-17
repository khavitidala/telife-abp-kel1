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
                        <h1 class="fw-bolder">Profile</h1>
                    </div>

                    <form class="border" style="padding:20px" method="POST" action="/consulRecord">
                        @csrf
                        <input type="hidden" name="_method" value="" />
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="number" name="price" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                            <label>Diagnosa</label>
                            <input type="text" name="name" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                            <label>treatment</label>
                            <input type="number" name="price" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                            <label>Resep Obat</label>
                            <input type="text" name="name" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                            <label>Dibuat tanggal</label>
                            <input type="text" name="name" class="form-control" value="" />
                        </div>
                        <div class="form-group" style="text-align: center; margin-top: 1rem;">
                            <a href="consulRecord" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
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
