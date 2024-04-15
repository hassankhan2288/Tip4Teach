$(document).ready(function(){
    $(window).on("scroll", function(){
        if($(window).scrollTop() >= 73){
            $("nav").addClass("fixed");
        } else{
            $("nav").removeClass("fixed");
        }
    })
    $(".dash-icon").click(function(){
        $("#sidebar").animate({
            left: "0"
        }, 500);
        
    })
    $("#sm-nav-btn").click(function(){
        $(".collapse").addClass("show");
        $("body").css("overflow-y", "hidden")
    })
    $(".navbar-close-btn").click(function(){
        $(".collapse").removeClass("show");
        $("body").css("overflow-y", "auto")
    })
    $(".sidebar-close-btn").click(function(){
        $("#sidebar").animate({
            left: "-300px"
        }, 500)
    })
    $("#contact-tech-popup-btn").click(function(e){
        e.preventDefault();
        $("#tach-contact-popup").css("display", "block");
    })
    $("#tech-popup-btn").click(function(){
        $("#tach-contact-popup").css("display", "none");
    })
    $("#contact-user-popup-btn").click(function(e){
        e.preventDefault();
        $("#user-contact-popup").css("display", "block");
    })
    $("#user-popup-btn").click(function(){
        $("#user-contact-popup").css("display", "none");
    })
    $("#popup-thank-tech-btn").click(function(){
        $("#tach-contact-popup").css("display", "none");
        $("#user-contact-popup").css("display", "none");
        $("#tach-contact-thank").css("display", "block");
    })
    $("#tech-popup-thank").click(function(e){
        e.preventDefault();
        $("#tach-contact-thank").css("display", "none");
    })
    $("#widthdraw-tech-popup-btn").click(function(e){
        e.preventDefault();
        $("#tach-widthdraw-thank").css("display", "block");
    })
    $("#tech-popup-withdraw").click(function(e){
        e.preventDefault();
        $("#tach-widthdraw-thank").css("display", "none");
    })

})