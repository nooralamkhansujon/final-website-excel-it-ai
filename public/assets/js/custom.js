//nav bar scroll add bg-color
// $(window).scroll(function () {
//   var scroll = $(window).scrollTop();
//   if (scroll <= 600) {
//     $(".main-menu .navbar").addClass("darkHeader");
//   }
// });

//about-filter

$.autofilter();

// active class add remove
$(".about-filter ul li").click(function () {
    $(".about-filter ul li").removeClass("active");
    $(this).addClass("active");

    // data filter
    var selector = $(this).attr("data-filter");
    $(".portfolio-item-wrapper").isotope({
        filter: selector,
    });
    return false;
});

// dropdown css
let dropdownCss = document.querySelectorAll(".dropdown .dropdown-toggle");
dropdownCss.forEach((dropdown) => {
    dropdown.addEventListener("click", (e) => {
        e.target.parentElement.children[1].classList.toggle("showmenu");
    });
});
