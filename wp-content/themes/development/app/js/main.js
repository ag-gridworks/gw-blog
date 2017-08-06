$( document ).ready(function() {

	// Inicia o AOS
	AOS.init({
      offset: 0,
      delay: 0,
    });

    // Adiciona efeitos aos titulos
    $(".go-title").attr({
    	'data-aos': 'fade-down',
    	'data-aos-offset': '50',
    });

    // Adiciona efeitos nos posts em destaque
    $(".go-featured").attr({
    	'data-aos': 'fade-up',
    	'data-aos-offset': '50'
    });

	//Altera margem do wrapper
	var navbar_height = $(".go-navbar").outerHeight();
	console.log(navbar_height);
	$("#navbar-space").css('padding-top', navbar_height);
	

	// Ajusta o tamanho das thumbnails
	var fullblock_height = $(".item-full").height();
		$(".thumb-full").height(fullblock_height);

	// $( window ).resize(function() {
 // 		var fullblock_height = $(".item-full").height();
	// 	$(".thumb-full").height(fullblock_height);
	// });


	// Inicia o Owl
	$('.owl-featured').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    autoplay:true,
	    autoplayTimeout: 4000,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:2
	        }
	    }
	});

	$('.owl-slider').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:true,
	    autoplay:true,
	    autoplayTimeout: 4000,
	    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});

});