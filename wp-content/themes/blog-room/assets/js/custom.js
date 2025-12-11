jQuery(function($) {

/* Sticky Header
--------------------------------------------- */
if ($("body").hasClass("header-fixed")) {
    let header = document.querySelector(".theme-main-header");

    window.onscroll = function () {
        if (window.pageYOffset > 200) {
            header.classList.add("sticky-header");
        } else {
            header.classList.remove("sticky-header");
        }
    };

    $(document).ready(function () {
        let headerHeight = $(".theme-main-header").height();
        $(".header-outer-wrapper").css("min-height", headerHeight + "px");
    });
}

/* common RTL variable
--------------------------------------------- */
var isRTL = $("html").attr("dir") === "rtl";

/* Banner Section
--------------------------------------------- */
$(".banner-layout-3 .banner-carousel").slick({
        slidesToShow: 3,
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

});