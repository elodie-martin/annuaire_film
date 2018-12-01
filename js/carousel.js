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
                nav:true
            },
            1200:{
                items:3,
                nav:true,
                loop:true,
                margin: 20
            }
        },
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    })


    $('.owl-two').owlCarousel({
        navigation : true, 
        loop:true,
        margin:0,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false,
                loop:true,
                dots: false
            },
            600:{
                items:1,
                nav:false,
                loop:true,
                dots: false


            },
            1000:{
                items:1,
                nav:false,
                loop:true,
                dots: false
            }
        },
        autoplay:true,
        autoplayTimeout:4500,
        autoplayHoverPause:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
    })




});