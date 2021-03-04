$(document).ready(function () {
    $(".footer-wrapper a").mouseover(function () {
        $(this).find("img").removeClass("footer-hide-image");
        $(this).find("img").addClass("footer-show-image");

        // console.log('mouseover');
    })
    $(".footer-wrapper a").mouseout(function () {
        $(this).find("img").removeClass("footer-show-image");
        $(this).find("img").addClass("footer-hide-image");

        // console.log('mouseout');
    })
});