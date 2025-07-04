<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $lp->website_title ?? 'Bread'   }} - Landingpage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/assets/img/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <!-- CormorantGaramond font -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/fonts.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <!-- Modernizer JS -->
    <script src="{{ url('/') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<header class="header-area clearfix header-hm9 transparent-bar">
    <div class="container">
        <div class="header-top-area">
            <div class="row">
                <div class="col-lg-2 d-none d-lg-block">
                    <div class="logo-hm9 text-center">
                        <a href="javascript:void(0)">
                            @if($lp->website_logo)
                                <img alt="" src="{{ asset('storage/'.$lp->website_logo) }}">
                            @else
                                <h2 style="font-weight: 600; letter-spacing: 3px;">{{ $lp->website_title }}</h2>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar header-res-padding header-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-12 d-block d-lg-none">
                    <div class="logo">
                        <a href="javascript:void(0)">
                            @if($lp->website_logo)
                                    <img alt="" src="{{ asset('storage/'.$lp->website_logo) }}">
                                @else
                                    <h2 style="font-weight: 600; letter-spacing: 3px;">{{ $lp->website_title }}</h2>
                                @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="slider-area">
    <div class="slider-active owl-carousel nav-style-1">
        @foreach (json_decode($lp->home_section, true) as $slider)
            <div class="slider-height-7 bg-glaucous d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center slider-h9-mrg">
                        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-content-7 slider-animated-1">
                                <h3 class="animated">{{ $slider['title'] }}</h3>
                                <h1 class="animated">{!! nl2br(e($slider['content'])) !!}</h1>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-singleimg-hm9 slider-animated-1 ml-100 mr-100">
                                <img class="animated" src="{{ url($slider['image']) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="collections-area pb-95">
    <div class="container">
        <div class="collection-wrap-2">
            <div class="collection-active-2 owl-carousel">
                @foreach (json_decode($lp->section_2) as $item)
                    <div class="collection-product-2">
                        <a href="#"><img src="{{ $item->avatar ? url('/storage/'.$item->avatar) : url('/assets/img/product/hm9-cagi-1.jpg') }}" alt=""></a>
                        <div class="collection-content-2 text-center">
                            {{-- <span>4 Products</span>
                            <h4><a href="#">Bluetooth Speaker</a></h4> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="welcome-area pb-90">
    <div class="container">
        <div class="welcome-content text-center">
            <h5>{{ $lp->sub_title ?? '' }}</h5>
            <h1>{{ $lp->title ?? '' }}</h1>
            <p>{{ $lp->content ?? '' }}</p>
        </div>
    </div>
</div>
<div class="product-area pb-60 hm9-section-padding">
    <div class="container-fluid">
        <div class="tab-content jump">
            <div class="tab-pane active" id="product-1">
                <div class="custom-row-4">
                    @foreach ($produks as $prd)
                        <div class="custom2-col-5">
                            <div class="product-wrap-2 pro-glaucous-color mb-35 scroll-zoom">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ $prd->picture ? url('/storage/'.$prd->picture) : url('/assets/img/product/hm9-pro-8.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ $prd->picture ? url('/storage/'.$prd->picture) : url('/assets/img/product/hm9-pro-8.jpg') }}" alt="">
                                    </a>
                                    {{-- <div class="product-action-2">
                                        <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                        <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                    </div> --}}
                                </div>
                                <div class="product-content-2">
                                    <div class="title-price-wrap-2">
                                        <h3><a href="product-details.html">{{ $prd->name ?? '-' }}</a></h3>
                                        <div class="price-2">
                                            <span>Rp {{ number_format($prd->price, 0, ',', '.') }}</span>
                                        </div>
                                    </div>
                                    {{-- <div class="pro-wishlist-2">
                                        <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area pb-100">
    <div class="container">
        <div class="row">
            @foreach (json_decode($lp->section_promotion) as $item)
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner-2 mb-30">
                        <a href="javascript:void(0)"><img src="{{ $item->background ? url('/storage/'.$item->background) : url('/assets/img/banner/banner-8.png') }}" alt=""></a>
                        <div class="banner-content-2">
                            {{-- <h5>{{ $item->sub_title ?? '' }}</h5> --}}
                            <h3 style="font-weight: 600;">{{ $item->title ?? '' }}</h3>
                            {{-- <a href="javascript:void(0)"><i class="fa fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="testimonial-area bg-gray-3 pt-100 pb-95 ml-70 mr-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ml-auto mr-auto">
                <div class="testimonial-active owl-carousel nav-style-1 nav-testi-style">
                    @foreach (json_decode($lp->section_review) as $item)
                        <div class="single-testimonial text-center">
                            <img src="{{$item->avatar ? url('/storage/'.$item->avatar) : url('/') }}/assets/img/testimonial/testi-1.png" alt="">
                            <p>{{ $item->review ?? '' }}</p>
                            <div class="client-info">
                                <i class="fa fa-map-signs"></i>
                                <h5>{{ $item->name ?? '' }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area pt-100 pb-95">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <img src="{{ url('/') }}/assets/img/brand-logo/barnd-logo-1.png" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{ url('/') }}/assets/img/brand-logo/barnd-logo-2.png" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{ url('/') }}/assets/img/brand-logo/barnd-logo-3.png" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{ url('/') }}/assets/img/brand-logo/barnd-logo-4.png" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{ url('/') }}/assets/img/brand-logo/barnd-logo-5.png" alt="">
            </div>
        </div>
    </div>
</div>
<footer class="footer-area bg-gray pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="copyright mb-30">
                    <div class="footer-logo">
                        <a href="javascript:void(0)">
                            @if($lp->website_logo)
                                <img alt="" src="{{ asset('storage/'.$lp->website_logo) }}">
                            @else
                                <h2 style="font-weight: 600; letter-spacing: 3px;">{{ $lp->website_title }}</h2>
                            @endif
                        </a>
                    </div>
                    <p>© 2019 <a href="#">Flone</a>.<br> All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="{{ url('/') }}/assets/img/product/quickview-l1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="{{ url('/') }}/assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="{{ url('/') }}/assets/img/product/quickview-l3.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="{{ url('/') }}/assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="quickview-wrap mt-15">
                            <div class="quickview-slide-active owl-carousel nav nav-style-1" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="{{ url('/') }}/assets/img/product/quickview-s1.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-2"><img src="{{ url('/') }}/assets/img/product/quickview-s2.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-3"><img src="{{ url('/') }}/assets/img/product/quickview-s3.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-4"><img src="{{ url('/') }}/assets/img/product/quickview-s2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Products Name Here</h2>
                            <div class="product-details-price">
                                <span>$18.00 </span>
                                <span class="old">$20.00 </span>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>3 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-list">
                                <ul>
                                    <li>- 0.5 mm Dail</li>
                                    <li>- Inspired vector icons</li>
                                    <li>- Very modern style  </li>
                                </ul>
                            </div>
                            <div class="pro-details-size-color">
                                <div class="pro-details-color-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                            <li class="gray"></li>
                                            <li class="green"></li>
                                            <li class="yellow"></li>
                                            <li class="white"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size">
                                    <span>Size</span>
                                    <div class="pro-details-size-content">
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-meta">
                                <span>Categories :</span>
                                <ul>
                                    <li><a href="#">Minimal,</a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-meta">
                                <span>Tag :</span>
                                <ul>
                                    <li><a href="#">Fashion, </a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Modal end -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ url('/') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="{{ url('/') }}/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="{{ url('/') }}/assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="{{ url('/') }}/assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="{{ url('/') }}/assets/js/main.js"></script>

</body>

</html>
