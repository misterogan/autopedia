{{-- <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}

<script>
    var swiper = new Swiper(".banner-jumbo .mySwiper", {
        autoHeight: true,
        slidesPerView: 1,
        spaceBetween: 0,
        autoplay: {
            delay: 7000,
            disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".section-one .mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        slidesPerGroup: 1,
        autoplay: {
            delay: 6000,
            disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
                slidesPerGroup: 2,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
                slidesPerGroup: 3,
            },
        },
    });

    var swiper = new Swiper(".section-three .mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        slidesPerGroup: 1,
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
                slidesPerGroup: 2,
            },
        },
    });

    var swiper = new Swiper(".section-three .mySwiper", {
        autoHeight: true,
        slidesPerView: 1,
        spaceBetween: 0,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
                slidesPerGroup: 2,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
                slidesPerGroup: 3,
            },
        },
    });
</script>
