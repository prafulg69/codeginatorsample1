$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        //$(".tab-content").not(tab).css("display", "none");
        $("#tab-2").load(tab);
		$("#tab-2").fadeIn();
    });
});




