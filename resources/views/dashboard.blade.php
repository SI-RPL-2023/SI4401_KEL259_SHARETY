<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid mx-5">
            <img src="logo-sharety.png" alt="Logo" width="90" height="39" class="d-inline-block align-text-top me-4">
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
            </ul>
            <span class="navbar-text">
            <button class="btn btn-warning d-flex me-2" style="color:white;">Register</button>
            </span>
            <span class="navbar-text">
            <button class="btn btn-primary d-flex me-2">Login</button>
            </span>
            </div>
        </div>
    </nav>
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid mx-5">
            <img src="logo-sharety.png" alt="Logo" width="90" height="39" class="d-inline-block align-text-top me-4">
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
            </ul>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> -->
    <!-- end navbar -->

    <!-- carousel -->
    <div class="container">
        <div class="row mt-3">
            <img src="carousel.png" alt="carousel" style="width:1500px;height:300px">
        </div>
    </div>
    <!-- end carousel -->

    <!-- icon Fitur -->
    <div class="container mt-5 shadow-sm bg-body-tertiary rounded">
        <div class="row text-center align-content-center" style="height:65px;">
            <div class="col-4">
                <img src="1.png" alt="" style="width:auto;height:40px">
                <a href="#">Galang Dana</a>
            </div>

            <div class="col-4">
                <img src="2.png" alt="" style="width:auto;height:40px">
                <a href="#">Donasi</a>
            </div>

            <div class="col-4">
                <img src="3.png" alt="" style="width:auto;height:40px">
                <a href="#">Zakat</a>
            </div>
        </div>
    </div>
    <!-- end icon fitur -->

    <!-- Galang Dana -->
    <div class="container mt-5 shadow-sm bg-body-tertiary rounded" style="margin-bottom: 50px;">
        <h3 class="mb-4 pt-4 px-3">Galang Dana Pasien Mendesak</h3>
        <div class="row px-3">
            
            <div class="col-4">
                <div class="card" style="width:400px;">
                    <img src="sakit.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">8 tahun Hidup Dengan Ginjal Rusak, Yuk Bantu Ongkos Tommy Cuci Darah!</h5>
                        <p class="card-text" style="color:blue;"><i class="bi bi-bookmark-check-fill"></i> </i>yesDonation</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width:400px;">
                    <img src="sakit.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">8 tahun Hidup Dengan Ginjal Rusak, Yuk Bantu Ongkos Tommy Cuci Darah!</h5>
                        <p class="card-text" style="color:blue;"><i class="bi bi-bookmark-check-fill"></i> </i>yesDonation</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width:400px;">
                    <img src="sakit.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">8 tahun Hidup Dengan Ginjal Rusak, Yuk Bantu Ongkos Tommy Cuci Darah!</h5>
                        <p class="card-text" style="color:blue;"><i class="bi bi-bookmark-check-fill"></i> </i>yesDonation</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end galang dana -->
    <div class="wrapper">
  <div class="about-section container mt-5 shadow-sm bg-body-tertiary rounded" style="margin-bottom: 50px;">
  <center>
  <!-- <h1>-- About Section --</h1> -->
  <h3 class="mb-4 pt-4 px-3">Tentang Kami</h3>
    <p style="padding-bottom:20px">
    Sharety merupakan sebuah website donasi yang dibuat untuk memudahkan para donatur di Indonesia. Sharety dapat diakses via website sehingga memudahkan para donatur karena tidak perlu datang langsung untuk melakukan kebaikan. terdiri dari berbagai fitur yang tentunya dibuat sebaik mungkin agar tidak membingungkan pengguna website.
    </p>
</center>
  </div>
</div>


    
</body>
</html>