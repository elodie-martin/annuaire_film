$(document).ready(function(){

    $('.owl-one').owlCarousel({
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
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,
                loop:false
            }
        },
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    })


    $('.owl-two').owlCarousel({
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
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,
                loop:false
            }
        },
        autoplay:true,
        autoplayTimeout:4500,
        autoplayHoverPause:true
    })


});