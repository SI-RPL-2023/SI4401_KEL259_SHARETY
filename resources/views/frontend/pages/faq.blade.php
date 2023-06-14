@extends('frontend.layouts.app')
@section('content')
    <!-- Projects -->
    <div id="projects" class="filter bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">FAQ</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="card-title">Frequently Asked Question</h5>
                    <p class="card-text">Yang sering ditanyakan tentang Sharety</p>

                    <div class="detail-campaign">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">
                                    Umum
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    Donasi
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehOne"
                                                aria-expanded="false" aria-controls="flush-collapsehOne">
                                                Apa itu Sharety?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Sharety merupakan sebuah website donasi yang dibuat untuk memudahkan para donatur di Indonesia.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehTwo"
                                                aria-expanded="false" aria-controls="flush-collapsehTwo">
                                                Bagaimana cara menghubungi Sharety?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Kalian bisa menghubungi Admin Sharety dengan menghubungi WhatsApp yang ada di bagian kanan website kami!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehThree"
                                                aria-expanded="false" aria-controls="flush-collapsehThree">
                                                Siapa Pendiri Sharety?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Sharety didirikan oleh Kelompok 259 dari kelas SI4407 Matakuliah RPL!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehThree"
                                                aria-expanded="false" aria-controls="flush-collapsehThree">
                                                Apa yang membedakan donasi di situs ini dengan situs donasi lainnya?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                            Situs kami berkomitmen untuk memastikan transparansi, akuntabilitas, dan efisiensi dalam penggunaan donasi. Kami bekerja sama dengan organisasi dan proyek yang telah melalui seleksi ketat untuk memastikan bahwa donasi Anda digunakan dengan tepat sesuai dengan tujuan yang ditetapkan. Kami juga menyediakan pemantauan dan pelaporan berkala untuk memberikan gambaran yang jelas mengenai penggunaan donasi kepada para donatur.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehFive"
                                                aria-expanded="false" aria-controls="flush-collapsehFive">
                                                Bagaimana cara kerja Sharety?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehFive" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghFive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                            Donasi di situs kami sangat mudah. Anda dapat mengikuti langkah-langkah berikut:
                                                <li> Pilih proyek atau organisasi yang ingin Anda donasi. </li>
                                                <li> Tentukan jumlah donasi yang ingin Anda berikan. </li>
                                                <li> Isi formulir donasi dengan informasi yang diperlukan. </li>
                                                <li> Pilih metode pembayaran yang nyaman bagi Anda. </li>
                                                <li> Konfirmasikan donasi Anda dan selesaikan transaksi. </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="accordion accordion-flush" id="accordionFlushpExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepOne"
                                                aria-expanded="false" aria-controls="flush-collapsepOne">
                                                Bagaimana saya bisa mendaftar untuk menerima donasi melalui situs ini?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpOne" data-bs-parent="#accordionFlushpExample">
                                            <div class="accordion-body">
                                            Untuk mendaftar dan mengajukan permohonan donasi, Anda dapat mengklik tombol "Mendaftar" atau "Ajukan Donasi" yang tersedia di situs kami. Anda akan diarahkan ke halaman pendaftaran yang meminta informasi pribadi dan rincian tentang kebutuhan medis Anda. Isi formulir dengan lengkap dan ikuti petunjuk yang diberikan.
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepTwo"
                                                aria-expanded="false" aria-controls="flush-collapsepTwo">
                                                Apakah ada persyaratan khusus yang harus saya penuhi untuk memenuhi syarat menerima donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpTwo" data-bs-parent="#accordionFlushpExample">
                                            <div class="accordion-body">
                                            Ada beberapa persyaratan yang harus Anda penuhi untuk memenuhi syarat menerima donasi. Persyaratan dapat bervariasi tergantung pada jenis donasi yang Anda ajukan. Pastikan untuk membaca dengan teliti persyaratan yang tercantum di halaman pendaftaran atau hubungi tim kami untuk mendapatkan informasi lebih lanjut.
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepThree"
                                                aria-expanded="false" aria-controls="flush-collapsepThree">
                                                Apa jenis dukungan yang bisa saya dapatkan melalui donasi ini?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpThree"
                                            data-bs-parent="#accordionFlushpExample">
                                            <div class="accordion-body">  
                                            Melalui donasi ini, Anda dapat mendapatkan dukungan keuangan untuk membantu membiayai kebutuhan medis Anda. Dukungan tersebut dapat mencakup biaya perawatan, obat-obatan, prosedur medis, perawatan jangka panjang, dan biaya lainnya yang terkait dengan kondisi medis Anda. Namun, jenis dukungan yang dapat diberikan dapat berbeda-beda tergantung pada kebijakan dan sumber daya yang tersedia.
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepFour"
                                                aria-expanded="false" aria-controls="flush-collapsepFour">
                                                Bagaimana saya akan tahu apakah permohonan donasi saya disetujui atau ditolak?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepFour" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                            Setelah Anda mengajukan permohonan donasi, tim kami akan melakukan peninjauan dan evaluasi. Kami akan memberi tahu Anda melalui email atau telepon mengenai status permohonan Anda, baik disetujui atau ditolak. Jika permohonan Anda disetujui, kami akan memberikan informasi lebih lanjut tentang langkah-langkah selanjutnya.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
@endsection
