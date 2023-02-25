<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <title>Explore Events</title>
</head>

<body>
    {{-- {{ dd($latest_events) }} --}}
    <div id="up" class="up fw-bold text-light">
        <i class="bi bi-chevron-up"></i>
    </div>
    {{-- Footer --}}
    @extends('layouts.inc.footer')

    {{-- Current Events --}}
    @extends('layouts.Current Events')

    {{-- Upcoming Events --}}
    @extends('layouts.Upcoming Events')

    {{-- Most Popular Events --}}
    @extends('layouts.popular_events')

    {{-- UpComing --}}
    @extends('layouts.upcoming')

    {{-- Header --}}
    @extends('layouts.inc.header')
    @section('events', 'active')
    <div class="date" style="display: none">{{ $upcoming_events[0]->start_date }}</div>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- vendors -->
    <script src="{{ asset('js/highlight.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let dd = document.querySelector('.date').innerHTML;
        let countDownDate = new Date(dd).getTime()
        let counter = setInterval(() => {
            let dateNow = new Date().getTime()
            let dateDiff = countDownDate - dateNow;
            let days = Math.floor(dateDiff / (1000 * 60 * 60 * 40));
            let hours = Math.floor((dateDiff % (1000 * 60 * 60 * 40)) / (1000 * 60 * 60));
            let minutes = Math.floor((dateDiff % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((dateDiff % (1000 * 60)) / 1000);

            document.querySelector('.days').innerHTML = days
            document.querySelector('.hours').innerHTML = hours
            document.querySelector('.minutes').innerHTML = minutes
            document.querySelector('.seconds').innerHTML = seconds
        }, 1000)
    </script>
</body>

</html>
