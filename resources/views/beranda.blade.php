<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TELIFE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
    </head>
    <body class="d-flex flex-column h-100">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                var request;

                request = $.ajax({
                        url: "news",
                        type: "get"
                    });

                request.done(function (response, textStatus, jqXHR){
                    // var res = JSON.parse(response)
                    $("#sourcename1").text(response.articles[0].source.name)
                    $("#title1").text(response.articles[0].title)
                    $("#desc1").text(response.articles[0].description)
                    $("#author1").text(response.articles[0].author)
                    $("#tgl1").text(response.articles[0].publishedAt)
                    $("#link1").attr("href", response.articles[0].url)
                    $("#img1").attr("src", response.articles[0].urlToImage)

                    $("#sourcename2").text(response.articles[1].source.name)
                    $("#title2").text(response.articles[1].title)
                    $("#desc2").text(response.articles[1].description)
                    $("#author2").text(response.articles[1].author)
                    $("#tgl2").text(response.articles[1].publishedAt)
                    $("#link2").attr("href", response.articles[1].url)
                    $("#img2").attr("src", response.articles[1].urlToImage)
                    
                    $("#sourcename3").text(response.articles[2].source.name)
                    $("#title3").text(response.articles[2].title)
                    $("#desc3").text(response.articles[2].description)
                    $("#author3").text(response.articles[2].author)
                    $("#tgl3").text(response.articles[2].publishedAt)
                    $("#link3").attr("href", response.articles[2].url)
                    $("#img3").attr("src", response.articles[2].urlToImage)

                    $("#message").text(response.articles[0].title);
                });

                request.fail(function (jqXHR, textStatus, errorThrown){
                    console.error(
                        "The following error occurred: "+
                        textStatus, errorThrown
                    );
                });

                $("#register").on('click', function(event){

                    event.preventDefault();

                    request = $.ajax({
                        url: "news",
                        type: "get"
                    });

                    request.done(function (response, textStatus, jqXHR){
                        // var res = JSON.parse(response)
                        $("#sourcename1").text(response.articles[0].source.name)
                        $("#title1").text(response.articles[0].title)
                        $("#desc1").text(response.articles[0].description)
                        $("#author1").text(response.articles[0].author)
                        $("#tgl1").text(response.articles[0].publishedAt)
                        $("#link1").attr("href", response.articles[0].url)
                        $("#img1").attr("src", response.articles[0].urlToImage)

                        $("#sourcename2").text(response.articles[1].source.name)
                        $("#title2").text(response.articles[1].title)
                        $("#desc2").text(response.articles[1].description)
                        $("#author2").text(response.articles[1].author)
                        $("#tgl2").text(response.articles[1].publishedAt)
                        $("#link2").attr("href", response.articles[1].url)
                        $("#img2").attr("src", response.articles[1].urlToImage)
                        
                        $("#sourcename3").text(response.articles[2].source.name)
                        $("#title3").text(response.articles[2].title)
                        $("#desc3").text(response.articles[2].description)
                        $("#author3").text(response.articles[2].author)
                        $("#tgl3").text(response.articles[2].publishedAt)
                        $("#link3").attr("href", response.articles[2].url)
                        $("#img3").attr("src", response.articles[2].urlToImage)

                        $("#message").text(response.articles[0].title);
                    });

                    request.fail(function (jqXHR, textStatus, errorThrown){
                        console.error(
                            "The following error occurred: "+
                            textStatus, errorThrown
                        );
                    });
                });
            });

        </script>
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
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">TELIFE</h1>
                                <p class="lead fw-normal text-white-50 mb-4">TelkoMedika for Life. Platform daring sistem pelayanan Unit Layanan TelkoMedika Telkom University</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="login">Sign In</a>
                                    <!-- <a class="btn btn-outline-light btn-lg px-4" href="#features">fitur lainnya</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="assets/img/konsultasi homepage.jpg" alt="..." /></div>
                    </div>
                </div>
            </header>

            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Merupakan tekad TelkoMedika untuk membantu menyehatkan masyarakat, melindungi dan melayani customer dengan sepenuh hati dan penuh empati dengan spirit untuk selalu optimis dan berani menghadapi tantangan dan perubahan untuk memberikan yang terbaik bagi customer didukung pengoptimalan Teknologi digital untuk mendukung pelayanan serta kemauan yang keras dalam memberikan solusi."</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="fw-bold">
                                        Unit Layanan TelkoMedika
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        Telkom University
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">From our blog</h2>
                                <p class="lead fw-normal text-muted mb-5">Tersedia artikel kesehatan, mental, dan lainnya</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." id="img1"/>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2" id="sourcename1">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!" id="link1"><h5 class="card-title mb-3" id="title1">Blog post title</h5></a>
                                    <p class="card-text mb-0" id="desc1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold" id="author1">Kelly Rowan</div>
                                                <div class="text-muted" id="tgl1">March 12, 2021 &middot; 6 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." id="img2"/>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2" id="sourcename2">Media</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!" id="link2"><h5 class="card-title mb-3" id="title2">Another blog post title</h5></a>
                                    <p class="card-text mb-0" id="desc2">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold" id="author2">Josiah Barclay</div>
                                                <div class="text-muted" id="tgl2">March 23, 2021 &middot; 4 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." id="img3"/>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2" id="sourcename3">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!" id="link3"><h5 class="card-title mb-3" id="title3">The last blog post title is a little bit longer than the others</h5></a>
                                    <p class="card-text mb-0" id="desc3">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..."/>
                                            <div class="small">
                                                <div class="fw-bold" id="author3">Evelyn Martinez</div>
                                                <div class="text-muted" id="tgl3">April 2, 2021 &middot; 10 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-3">
                            <div class="d-grid"><button class="btn btn-primary btn-lg" id="register">Refresh News</button><div>
                        </div>
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
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
