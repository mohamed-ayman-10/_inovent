    {{-- {{ dd($latest_events[0]->images) }} --}}

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }
    </style>

    <section class="events">
        <h3 class="text-center main-title my-5">
            <span class="text-main-color">Our</span>
            Last events
        </h3>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($latest_events as $event)
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <img src="{{ asset($event->images[0]->image_path) }}" />
                            <div class="card-bodyp-0">
                                <h5 class="card-title my-2 text-main-2">{{ $event->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="swiper-slide">
                    <div class="card text-center">
                        <img src="{{ asset('assets/images/slider-1.png') }}" />
                        <div class="card-body p-0">
                            <h5 class="card-title my-2 text-main-2">User Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card text-center">
                        <img src="{{ asset('assets/images/slider-2.png') }}" />
                        <div class="card-bodyp-0">
                            <h5 class="card-title my-2 text-main-2">Photography</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card text-center">
                        <img src="{{ asset('assets/images/slider-3.png') }}" />
                        <div class="card-bodyp-0">
                            <h5 class="card-title my-2 text-main-2">Lifestyle</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card text-center">
                        <img src="{{ asset('assets/images/slider-4.png') }}" />
                        <div class="card-bodyp-0">
                            <h5 class="card-title my-2 text-main-2">Card title</h5>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="swiper-pagination"></div> --}}
        </div>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        </script>
    </section>
