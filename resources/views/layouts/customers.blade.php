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
</style>
<section class="customers">
    <h3 class="text-center main-title my-5">
        <span class="text-main-color">Our</span>
        Customer's Experience
    </h3>
    <div class="content py-5 section-color">
        {{-- <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/slider-0.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/slider-0.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/slider-0.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}
        <div class="owl-carousel owl-theme position-relative">
            <div class="item">
                <div class="rounded p-4 bg-light">
                    <div class="head d-flex justify-content-between">
                        <div class="img">
                            <img src="{{ asset('assets/images/cus-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="rate d-flex gap-1">
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-half fs-6"></i>
                            <i class="bi bi-star fs-6"></i>
                        </div>
                    </div>
                    <div class="body mt-4">
                        <h4>Ronald Richards</h4>
                        <p>ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="rounded p-4 bg-light">
                    <div class="head d-flex justify-content-between">
                        <div class="img">
                            <img src="{{ asset('assets/images/cus-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="rate d-flex gap-1">
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-half fs-6"></i>
                            <i class="bi bi-star fs-6"></i>
                        </div>
                    </div>
                    <div class="body mt-4">
                        <h4>Ronald Richards</h4>
                        <p>ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="rounded p-4 bg-light">
                    <div class="head d-flex justify-content-between">
                        <div class="img">
                            <img src="{{ asset('assets/images/cus-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="rate d-flex gap-1">
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-half fs-6"></i>
                            <i class="bi bi-star fs-6"></i>
                        </div>
                    </div>
                    <div class="body mt-4">
                        <h4>Ronald Richards</h4>
                        <p>ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="rounded p-4 bg-light">
                    <div class="head d-flex justify-content-between">
                        <div class="img">
                            <img src="{{ asset('assets/images/cus-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="rate d-flex gap-1">
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-fill fs-6"></i>
                            <i class="bi bi-star-half fs-6"></i>
                            <i class="bi bi-star fs-6"></i>
                        </div>
                    </div>
                    <div class="body mt-4">
                        <h4>Ronald Richards</h4>
                        <p>ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 25,
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
