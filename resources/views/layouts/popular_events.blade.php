<style>
    .swiper-slide-2 {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-2 {
        width: 100%;
        height: 100%;
    }

    .swiper-slide-2 img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .owl-carousel .card img {
        height: 200px;
    }

    .owl-carousel .card {
        border-radius: 20px;
        overflow: hidden;
    }

    .owl-carousel .owl-nav {
        display: block !important;
        position: absolute;
        top: -105px;
        right: 0;
        margin: 0;
    }

    @media (max-width: 676px) {
        .owl-carousel .owl-nav {
            top: -70px;
        }
    }

    .owl-carousel .owl-nav .owl-prev span,
    .owl-carousel .owl-nav .owl-next span {
        font-size: 60px;
        line-height: 0;
        transition: .05s;
    }

    .owl-carousel .owl-nav .owl-next,
    .owl-carousel .owl-nav .owl-prev {
        line-height: 0 !important;
        width: 40px;
        height: 40px;
        transition: .5s;
        margin: 0 !important;
    }

    .owl-dots {
        display: none !important;
    }

    .content .card .card-body a {
        height: fit-content;
        border: 1px solid #000;
        font-weight: bold
    }

    .content .card .card-body a:hover {
        background-color: var(--text-main-color);
        color: #fff;
        border-color: transparent !important;
    }

    .content .card .card-body p {
        font-size: 12px;
    }

    .content .card .card-body .img img {
        width: 11px;
        height: 11px !important;
    }
</style>
<section class="customers">
    <h3 class="text-center main-title my-5">
        <span class="text-main-color">Most</span>
        Popular Events
    </h3>
    <div class="content py-4 section-color">
        <div class="container">
            <div class="owl-carousel owl-theme position-relative">
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/images/interior-design 1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="card-title">Interior Design Event 2023</h5>
                                <div class="d-flex align-items-center">
                                    <div class="img">
                                        <img src="{{ asset('assets/images/Vector.svg') }}" class="me-2"
                                            alt="">
                                    </div>
                                    <p class="card-text">2 March 2023</p>
                                </div>
                            </div>
                            <a href="#" class="btn px-4 rounded-pill">BUY</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/images/Capture 1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="card-title">Interior Design Event 2023</h5>
                                <div class="d-flex align-items-center">
                                    <div class="img">
                                        <img src="{{ asset('assets/images/Vector.svg') }}" class="me-2"
                                            alt="">
                                    </div>
                                    <p class="card-text">2 March 2023</p>
                                </div>
                            </div>
                            <a href="#" class="btn px-4 rounded-pill">BUY</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/images/fashion_19I0742-copy2000x850 1.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="card-title">Interior Design Event 2023</h5>
                                <div class="d-flex align-items-center">
                                    <div class="img">
                                        <img src="{{ asset('assets/images/Vector.svg') }}" class="me-2"
                                            alt="">
                                    </div>
                                    <p class="card-text">2 March 2023</p>
                                </div>
                            </div>
                            <a href="#" class="btn px-4 rounded-pill">BUY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
        }
    })
</script>
