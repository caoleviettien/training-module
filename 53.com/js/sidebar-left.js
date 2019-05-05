$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $(".glyphicons").toggleClass("toggled");
    });
});