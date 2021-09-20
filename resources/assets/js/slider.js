import Swiper from "swiper";
export default function slider() {
    console.log($.isFunction("owlCarousel"));
    var classList = ["spiderman", "ironman", "captain"];
    var marvelHeroSlider = new Swiper(".marvel-container .swiper-container", {
        loop: false,
        autoplay: true,
        slidesPerView: 1,
        observer: true,
        observeParents: true,
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        on: {
            init: function () {
                var index = this.activeIndex; // current slide index
                $(".marvel-container")
                    .removeClass(classList)
                    .addClass(classList[index]);

                $(".marvel-container .img-wrapper")
                    .removeClass("active")
                    .eq(index)
                    .addClass("active");
            },
        },
    }).on("slideChange", function () {
        var index = this.activeIndex; // current slide index
        $(".marvel-container")
            .removeClass(classList)
            .addClass(classList[index]);
        $(".marvel-container .img-wrapper")
            .removeClass("active")
            .eq(index)
            .addClass("active");
    });
    $(window).on("resize", function () {
        console.log("this is running from resize");
        marvelHeroSlider.update();
    });
}
