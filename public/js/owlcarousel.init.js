//Owl Carousel
    $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        video:true,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        autoHeight: true,
        rtl: false,

    });

    $("#partners").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        autoHeight: true,
        items: 6,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [768, 3]
    });

    $("#services").owlCarousel({
        // autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        autoHeight: true,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [768, 3]
    });

    $("#testi-two").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2]
    });

    $("#owl-dark").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        autoHeight: true,
    });

    $("#owl-bg-img").owlCarousel({
        autoPlay: 3000,
        loop: true,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        autoHeight: true,
        autoWidth: true,
    });



    $('.animated').owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        items:1,
        margin:30,
        stagePadding:30,
        smartSpeed:450
    });