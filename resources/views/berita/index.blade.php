@extends('layouts.app')

@section('content')

<!-- start featured-post-style-5 -->
<section class="featured-post-style-5 section-padding">
    <div class="container">
        <div class="row gutter-30 sticky-coloum-wrap">

            <div class="col-xl-3 col-lg-6 order-2 order-xl-1  sticky-coloum-item">
                <div class="rt-slidebar left-slidebar">
                    <div class="sidebar-wrap mb--40">
                        <div class="top-headline-box-style-1">
                            <h2 class="title">Top Headlines</h2>
                            <div class="news-list-style-1">
                                @foreach ($data->limit(3)->get() as $item)
                                <div class="item">
                                    <div class="item-content">
                                        <a href="{{ route('berita.detail',$item->slug) }}" class="rt-post-cat-normal">{{
                                            $item->kategori }}</a>
                                        <h4 class="post-title">
                                            <a href="{{ route('berita.detail',$item->slug) }}">
                                                {{ $item->judul }}
                                            </a>
                                        </h4>
                                        <span class="rt-meta">
                                            <i class="far fa-calendar-alt icon"></i>
                                            {{ $item->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <!-- end slidebar wrap  -->
                </div>
                <!-- end left sidebar -->
            </div>
            <!-- end col -->

            <div class="col-xl-6 col-lg-12 order-1 order-xl-2  sticky-coloum-item">
                <div class="featured-middle-post-style-5">
                    @foreach ($data->limit(1)->get() as $item)
                    <div class="rt-post post-md style-5 grid-meta mb--15">
                        <div class="post-img">
                            <a href="single-post1.html">
                                <img src="{{ $item->gambar }}" alt="post" width="1200" height="491">
                            </a>
                        </div>
                        <div class="post-content">
                            <a href="politics.html" class="rt-post-cat-normal">{{ $item->kategori }}</a>
                            <h3 class="post-title">
                                <a href="{{ route('berita.detail',$item->slug) }}">
                                    {{ $item->judul }}
                                </a>
                            </h3>
                            <p>
                                @php
                                substr($item->isi, 0, 30)
                                @endphp
                            </p>
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <span class="rt-meta">
                                            by <a href="#" class="name">{{ $item->penulis }}</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="rt-meta">
                                            <i class="far fa-calendar-alt icon"></i>
                                            {{$item->created_at->diffForHumans()}}
                                        </span>
                                    </li>
                                    <li>
                                        <span class="rt-meta">
                                            <i class="fas fa-share-alt icon"></i>
                                            3,250
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-wrap mt--25">
                                <a href="{{ route('berita.detail',$item->slug) }}"
                                    class="rt-read-more rt-button-animation-out">
                                    Read More
                                    <svg width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                                        <rect class="rt-button-line" y="7.6" width="34" height=".4">
                                        </rect>
                                        <g class="rt-button-cap-fake">
                                            <path class="rt-button-cap"
                                                d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row gutter-24">
                        <div class="col-md-6">
                            <div class="rt-post-grid grid-meta">
                                <div class="post-img">
                                    <a href="single-post1.html">
                                        <img src="media/gallery/post-md_40.jpg" alt="post" width="551" height="431">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="life-style.html" class="rt-post-cat-normal">World</a>
                                    <h3 class="post-title">
                                        <a href="single-post1.html">
                                            After Moon They are Land Style
                                            CloseSpace Really?
                                        </a>
                                    </h3>
                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span class="rt-meta">
                                                    by <a href="author.html" class="name">Willum
                                                        Skeem</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    DECEMBER 9, 2022
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rt-post-grid grid-meta">
                                <div class="post-img">
                                    <a href="single-post1.html">
                                        <img src="media/gallery/post-md_41.jpg" alt="post" width="551" height="431">
                                    </a>
                                    <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                                        class="play-btn play-btn-white rt-play-over">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="life-style.html" class="rt-post-cat-normal">World</a>
                                    <h3 class="post-title">
                                        <a href="single-post1.html">
                                            After Moon They are Land Style
                                            CloseSpace Really?
                                        </a>
                                    </h3>
                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span class="rt-meta">
                                                    by <a href="author.html" class="name">Willum
                                                        Skeem</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    DECEMBER 9, 2022
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-lg-6 order-2 order-xl-3  sticky-coloum-item">
                <div class="rt-sidebar right-siderbar sticky-wrap">

                    <div class="sidebar-wrap mb--30">
                        <ul class="nav rt-tab-menu mb--30" id="myTab-5" role="tablist">
                            <li class="menu-item" role="presentation">
                                <a class="menu-link active" id="menu-51-tab" data-bs-toggle="tab" href="#menu-51"
                                    role="tab" aria-controls="menu-51" aria-selected="true"> Trending </a>
                            </li>
                            <li class="menu-item" role="presentation">
                                <a class="menu-link" id="menu-52-tab" data-bs-toggle="tab" href="#menu-52" role="tab"
                                    aria-controls="menu-52" aria-selected="false"> Popular </a>
                            </li>
                        </ul>
                        <!-- end nav tab -->

                        <div class="tab-content" id="myTabContent-2">
                            <div class="tab-pane tab-item animated fadeInUp show active" id="menu-51" role="tabpanel"
                                aria-labelledby="menu-51-tab">

                                <div class="row gutter-15">
                                    @foreach ($data->limit(5)->get() as $item)
                                    <div class="col-12">
                                        <div class="rt-post post-sm style-2 layout-2">
                                            <div class="post-img me-0">
                                                <a href="{{ route('berita.detail',$item->slug) }}">
                                                    <img src="{{ asset('media/gallery/post-md_40.jpg') }}" alt="post"
                                                        width="551" height="431">
                                                </a>
                                            </div>
                                            <div class="ms-3 post-content">
                                                <a href="politics.html" class="rt-post-cat-normal">Politics</a>
                                                <h4 class="post-title">
                                                    <a href="single-post1.html">
                                                        {{$item->judul}}
                                                    </a>
                                                </h4>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    {{ $item->created_at->diffForHumans() }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- end row -->

                            </div>
                            <!-- end ./tab item -->

                            <div class="tab-pane tab-item animated fadeInUp" id="menu-52" role="tabpanel"
                                aria-labelledby="menu-52-tab">

                                <div class="row gutter-15">
                                    @foreach ($data->limit(5)->get() as $item)
                                    <div class="col-12">
                                        <div class="rt-post post-sm style-2 layout-2">
                                            <div class="post-img me-0">
                                                <a href="{{ route('berita.detail',$item->slug) }}">
                                                    <img src="{{ asset('media/gallery/post-md_40.jpg') }}" alt="post"
                                                        width="551" height="431">
                                                </a>
                                            </div>
                                            <div class="ms-3 post-content">
                                                <a href="politics.html" class="rt-post-cat-normal">Politics</a>
                                                <h4 class="post-title">
                                                    <a href="single-post1.html">
                                                        {{$item->judul}}
                                                    </a>
                                                </h4>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    {{ $item->created_at->diffForHumans() }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- end row -->

                            </div>
                            <!-- end ./tab item -->

                        </div>
                        <!-- end /.tab-content -->
                    </div>


                    <!-- end slidebar wrap  -->
                </div>
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end featured-post-style-5 -->


@endsection