@extends('layouts.main')  

<<<<<<< HEAD
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
<<<<<<< HEAD
   @include('user/Navbar')
=======
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
                        <a class="nav-link" href="TentangKami.blade.php">Tentang Kami</a>
                    </li>
                </ul>
                <span class="navbar-text">
                <a class="btn btn-primary d-flex me-2" href="{{ route('register') }}" style="color:white;">register</a>
                </span>
                <span class="navbar-text">
                    <a class="btn btn-primary d-flex me-2" href="{{ route('login') }}" style="color:white;">Login</a>
                </span>
                
               
                @section('content')
                @auth
                <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
                <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                @endauth
                @guest
                <a class="btn btn-primary" href="{{ route('login') }}">Logiiiiin</a>
                <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                @endguest
                @endsection
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
>>>>>>> e6f623bdb112efa79d6eb244ab4cd7c577d8dba5
    <!-- end navbar -->
=======
@extends('layouts.main')    
=======
@include('partials.navbar-sblmlogin')
>>>>>>> 0dae6ea6c53e4dfd23fab9d7809a2c603a6db8bf

@section('container')

    <!-- carousel -->
<<<<<<< HEAD
    @include('carousel')
=======
    <div class="container mt-3">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img src="carousel.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="carousel.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="carousel.png" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
>>>>>>> e6f623bdb112efa79d6eb244ab4cd7c577d8dba5
    <!-- end carousel -->

    <!-- icon Fitur -->
    <div class="container mt-3 shadow-sm bg-white rounded">
        <div class="row text-center align-content-center" style="height:65px;">
            <div class="col-4">
                <img src="1.png" alt="" style="width:auto;height:40px">
                <a href="/galangdana">Galang Dana</a>
            </div>

            <div class="col-4">
                <img src="2.png" alt="" style="width:auto;height:40px">
                <a href="/donasi">Donasi</a>
            </div>

            <div class="col-4">
                <img src="3.png" alt="" style="width:auto;height:40px">
                <a href="/zakat">Zakat</a>
            </div>
        </div>
    </div>
    <!-- end icon fitur -->

    <!-- Galang Dana -->
    <div class="container shadow-sm bg-white rounded mt-3 pb-5">
        <div class="d-flex justify-content-between px-4">
            <h3 class="mb-4 pt-4">Galang Dana Pasien Mendesak</h3>
            <a href="/donasi" class="my-4 btn btn-outline-primary">Lihat selengkapnya</a>
        </div>
        <div class="row px-3">

            <div class="col-4">
                <div class="card">
                    <img src="sakit.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">8 tahun Hidup Dengan Ginjal Rusak, Yuk Bantu Ongkos Tommy Cuci Darah!</h5>
                        <p class="card-text" style="color:blue;"><i class="bi bi-bookmark-check-fill"></i> </i>yesDonation</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src="sakit.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">8 tahun Hidup Dengan Ginjal Rusak, Yuk Bantu Ongkos Tommy Cuci Darah!</h5>
                        <p class="card-text" style="color:blue;"><i class="bi bi-bookmark-check-fill"></i> </i>yesDonation</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
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
<<<<<<< HEAD
    </div>
=======

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

>>>>>>> e6f623bdb112efa79d6eb244ab4cd7c577d8dba5


</body>



@endsection
