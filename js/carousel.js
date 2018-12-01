$(document).ready(function(){

    $('.owl-carousel').owlCarousel({
        navigation : false, 
        loop:true,
        margin:0,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        },
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true
    })

});