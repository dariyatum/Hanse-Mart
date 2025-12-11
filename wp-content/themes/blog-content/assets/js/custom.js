jQuery(function ($) {

     //common RTL variable
     var isRTL = $("html").attr("dir") === "rtl";

    // Preloader and sticky header setup
    $("#preloader").delay(1000).fadeOut();
    $("#loader").delay(1000).fadeOut("slow");

    // Flash News
    $(".flash-carousel").slick({
        slidesToShow: 2,
        arrows: true,
        autoplay: true,
        rtl: isRTL,
        prevArrow: "<button class='fa fa-chevron-left'</button>",
        nextArrow: "<button class='fa fa-chevron-right'</button>",
        appendArrows: ".flash-carousel-navigation",
        responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            },
        },
        ],
    });
    
    // Banner Top Carousel
    $(".banner-layout-2 .banner-carousel").slick({
        slidesToShow: 2,
        speed: 900,
        arrows: true,
        autoplay: true,
        rtl: isRTL,
        prevArrow: "<button class='artify-arrow fa fa-chevron-left'</button>",
        nextArrow: "<button class='artify-arrow fa fa-chevron-right'</button>",
        responsive: [
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            },
        },
        ],
    });

    // Generic slider
    $(".widget-slider").slick({
        slidesToShow: 1,
        dots: true,
        arrows: false,
        rtl: isRTL,
    });

    // Mobile menu toggle
    $(document).ready(function () {
        let menuToggle = $(".menu-toggle"),
        navMenu = $(".main-navigation .nav-menu"),
        navigation = $(".main-navigation");

        menuToggle.click(function () {
            navMenu.slideToggle("slow");
            $(this).toggleClass("open");
        });

        $(window).on("load resize", function () {
            if ($(window).width() < 992) {
                navigation.find("li").last().off("keydown").on("keydown", function (e) {
                    if (e.which === 9) {
                        e.preventDefault();
                        menuToggle.focus();
                    }
                });
            } else {
                navigation.find("li").off("keydown");
            }
        });

        menuToggle.on("keydown", function (e) {
            if ($(this).hasClass("open") && e.shiftKey && e.keyCode === 9) {
                e.preventDefault();
                navMenu.slideUp("slow");
                menuToggle.removeClass("open");
                navigation.removeClass("toggled");
            }
        });
    });

    // Header search functionality
    let searchWrap = $(".header-search-wrap"),
    searchIcon = $(".header-search-icon"),
    searchInput = searchWrap.find("input.search-field"),
    searchButton = searchWrap.find(".search-submit");

    searchIcon.on("click", function (e) {
        e.preventDefault();
        searchWrap.toggleClass("show");
        searchInput.focus();
    });

    $(document).on("click", function (e) {
        if (!searchWrap.is(e.target) && searchWrap.has(e.target).length === 0) {
            searchWrap.removeClass("show");
        }
    });

    searchButton.on("keydown", function (e) {
        if (e.key === "Tab") {
            e.preventDefault();
            searchIcon.focus();
        }
    });

    searchIcon.on("keydown", function (e) {
        if (searchWrap.hasClass("show") && e.shiftKey && e.key === "Tab") {
            e.preventDefault();
            searchWrap.removeClass("show");
            searchIcon.focus();
        }
    });

    // Scroll to top button
    let scrollToTop = $(".blog-content-scroll-to-top");

    $(window).on("scroll", function () {
        scrollToTop.toggleClass("visible", $(this).scrollTop() > 400);
    });

    scrollToTop.on("click", function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 300);
    });

});