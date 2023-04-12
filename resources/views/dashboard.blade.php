@extends('layouts.main')  

@include('partials.navbar-sblmlogin')

@section('container')

    <!-- carousel -->
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
        <div class="about-section container mt-3 shadow-sm bg-white rounded" style="margin-bottom: 50px;">
        <center>
        <!-- <h1>-- About Section --</h1> -->
        <h3 class="mb-4 pt-4 px-3">Tentang Kami</h3>
            <p style="padding-bottom:20px">
            Sharety merupakan sebuah website donasi yang dibuat untuk memudahkan para donatur di Indonesia. Sharety dapat diakses via website sehingga memudahkan para donatur karena tidak perlu datang langsung untuk melakukan kebaikan. terdiri dari berbagai fitur yang tentunya dibuat sebaik mungkin agar tidak membingungkan pengguna website.
            </p>
        </center>
        </div>
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



</body>


>>>>>>> origin/main

@endsection
