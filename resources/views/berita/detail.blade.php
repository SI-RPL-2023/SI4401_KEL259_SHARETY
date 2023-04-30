@extends('layouts.app')

@section('content')


<!-- Start inner page Banner -->
<div class="banner inner-banner">
    <div class="container">
        <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">
                        <!-- {{ $data->kategori }} -->
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="rt-text-truncate">
                        <!-- {{ $data->judul }} -->
                    </span>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- End inner page Banner -->

<!-- start rt-sidebar-section-layout-2 -->
<section class="rt-sidebar-section-layout-2">
    <div class="container">
        <div class="row gutter-40 sticky-coloum-wrap">

            <div class="col-xl-9 sticky-coloum-item">
                <div class="rt-left-sidebar-sapcer-5">

                    <div class="rt-main-post-single grid-meta">

                        <!-- start post header -->
                        <div class="post-header">
                            <span class="rt-cat-primary">Technology</span>
                            <h2 class="title">
                                {{ $data->judul }}
                            </h2>
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <span class="rt-meta">
                                            by <a href="#" class="name">{{ $data->penulis }}</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="rt-meta">
                                            <i class="far fa-calendar-alt icon"></i>
                                            {{ $data->created_at->diffForHumans() }}
                                        </span>
                                    </li>
                                    <li>
                                        <span class="rt-meta">
                                            <i class="far fa-comments icon"></i>
                                            250 Comments
                                        </span>
                                    </li>

                                    <li>
                                        <span class="rt-meta">
                                            <i class="fas fa-signal icon"></i>
                                            3,250 Views
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="share-box-area">
                                <div class="left-area">
                                    <div class="social-share-box">
                                        <div class="share-text mb--10">
                                            <span class="rt-meta">
                                                <i class="fas fa-share-alt icon"></i>
                                                Share: 1,509
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-area">
                                    <ul class="social-share-style-1 layout-2 mb--10">
                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/">
                                                <i class="social-icon fas fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://twitter.com/">
                                                <i class="social-icon fas fa-print"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end post-header -->

                        <!-- strat post img -->
                        <figure class="post-img">
                            <img src="{{ $data->gambar }}" alt="post-img" width="960" height="520">
                        </figure>
                        <!-- end post-img -->

                        <!-- strat psot body -->
                        <div class="post-body">
                            <p>
                                {{ $data->isi }}
                            </p>

                        </div>
                        <!-- end post body -->




                        <!-- start blog-post-comment -->
                        <div class="blog-post-comment mb--50">
                            <form action="#" class="rt-contact-form comments-form-style-1">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="rt-form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="rt-form-group">
                                            <label for="email">E-mail *</label>
                                            <input type="text" name="email" id="email" class="form-control"
                                                data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="rt-form-group">
                                            <label for="website">Website *</label>
                                            <input type="text" name="website" id="website" class="form-control"
                                                data-error="Web Url field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="rt-form-group">
                                            <label for="comment">Comments *</label>
                                            <textarea name="comment" id="comment" class="form-control text-area"
                                                data-error="Comment field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="rt-form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="comment-form-check1">
                                                <label class="form-check-label" for="comment-form-check1">
                                                    Save my name, email, and website in this browser for the
                                                    next time I
                                                    comment.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="submit-btn">
                                            Post Comment
                                        </button>
                                    </div>
                                    <div class="form-response"></div>
                                </div>
                            </form>
                        </div>
                        <!-- end blog-post-comment -->


                    </div>
                    <!-- end rt-main-post-single -->
                </div>
                <!-- end rt-left-sidebar-sapcer-5 -->
            </div>
            <!-- end col-->



        </div>
        <!-- end row  -->
    </div>
    <!-- end container -->
</section>
<!-- end rt-sidebar-section-layout-2 -->

</main>
</div>
@endsection