<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('frontend.partials.head')
</head>

<body>
    @include('frontend.partials.header')
    <div id="showBoxButton" class="hide-box">
        <div class="btn-top">
            <a href="#" title="Back To Top">
                <i class="bi bi-arrow-up-circle-fill icon"></i>
                {{-- <span>Kembali Ke Atas</span> --}}
            </a>
        </div>
    </div>

    @yield('content')

    @include('frontend.partials.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{env('INVISIBLE_RECAPTCHA_SITEKEY')}}"></script>
    <script src="{!! mix('/script/app.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"
        integrity="sha256-+8RZJua0aEWg+QVVKg4LEzEEm/8RFez5Tb4JBNiV5xA=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

    <script defer src="{{asset('js/iframe-youtube.js')}}"></script>
    <script defer src="{{asset('js/temp-chart.js')}}"></script>
    {{-- <script defer src="{{asset('js/step-handler.js')}}"></script> --}}
    {{-- <script defer src="{{asset('js/step-form.js')}}"></script> --}}
    {{-- <script defer src="{{asset('js/chartjs-saham.js')}}"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="/js/form/index.js"></script>

    <script>
        const boxSticky = document.getElementById("showBoxButton");
        window.onscroll = function () {
            "use strict";
            if (
                document.body.scrollTop >= 400 ||
                document.documentElement.scrollTop >= 400
            ) {
                boxSticky.classList.add("show-box");
                boxSticky.classList.remove("hide-box");
            } else {
                boxSticky.classList.add("hide-box");
                boxSticky.classList.remove("show-box");
            }
        };

        function resetForm() {
            document.getElementById("wbs_form").reset();
        }

        $('.box-content .step:first').removeClass('hidden');
        $('ul .progress-bar__dot:nth-child(1)').addClass('full');
        $('ul.progress-bar li.progress-bar__connector:last-child').remove();

        AOS.init();
        $('.card-link').click(function () {
            $(this).find('i').toggleClass('bi bi-caret-down-fill bi bi-caret-up-fill');
        });

        $('#accordionFeatures .accordion-header').click(function () {
            $target = $(this).attr('id');
            $id = $target.match(/\d+/);
            $('.img-features div').addClass('d-none');
            $('#features-' + $id).removeClass('d-none');
            $('#featMobile-' + $id).removeClass('d-none');
        });


        $(function () {
            $('#datepicker').datepicker();
        });

        // let uploadBtn = document.querySelector("#file-upload");
        // uploadBtn.addEventListener("change", changeBG);

        // function changeBG() {
        //     let reader;
        //     if (this.files && this.files[0]) {
        //         reader = new FileReader();
        //         reader.onload = (e) => {
        //             bgObject.img.src = e.target.result;
        //             drawCanvas();
        //         };
        //         reader.readAsDataURL(this.files[0]);
        //     }
        // }

        let swiper = new Swiper(".swiper-banner-home", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            // effect: "fade",
            autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        let swiperJBA = new Swiper(".swiper-banner-jba", {
            slidesPerView: 1,
            spaceBetween: 0,
        });

        let swiperCaroline = new Swiper(".swiper-banner-caroline", {
            slidesPerView: 1,
            spaceBetween: 0,
        });

        let swiperBursa = new Swiper(".swiper-banner-bursa", {
            slidesPerView: 1,
            spaceBetween: 0,
        });

        let swiperTestimonial = new Swiper(".swiper-testimonial", {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 30,
            loop: false,
            autoHeight: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    slidesPerGroup: 2,
                },
            },
        });

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".dropdown-menu").forEach(function (element) {
                element.addEventListener("click", function (e) {
                    e.stopPropagation();
                });
            });
        });
    </script>
</body>

</html>