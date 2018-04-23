jQuery(document).ready(function(){
	$("<p class='pub-tag'>Publicidade</p>").css({"text-transform":"uppercase","font-size":".7em"}).insertBefore("[data-type='publicidade']");  
	$("<p>Desejo receber novidades da ABLA e/ou parceiros por e-mail.</p>").insertBefore("#newsletter input[type='submit']");

	// slides

	$("#slide_diretoria").owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1000,3], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,2], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		navigation: true,
		pagination: false,
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});

	// -- Notícias

	$("#noticia-slide").owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1000,3], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,2], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		navigation: true,
		pagination: false,
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});

	// -- Cursos

	$("#curso-slide-desktop").owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [768,3], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,2], // betweem 900px and 601px
		itemsTablet: [600,1],
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});

	$("#curso-slide-mobile").owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [768,3], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,2], // betweem 900px and 601px
		itemsTablet: [600,1],
		itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
	});

	$("#cursos .owl-next").click(function(){
	 	$("#curso-slide-desktop,#curso-slide-mobile").trigger('owl.next');
	});

	$("#cursos .owl-prev").click(function(){
	  	$("#curso-slide-desktop,#curso-slide-mobile").trigger('owl.prev');
	});

	// -- Depoimentos

	$("#depoimento-slide").owlCarousel({
		items : 1, //10 items above 1000px browser width
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});

	$("#depoimento .owl-next").click(function(){
	 	$("#depoimento-slide").trigger('owl.next');
	});

	$("#depoimento .owl-prev").click(function(){
	  	$("#depoimento-slide").trigger('owl.prev');
	});

	// -- Vídeos

	$('.video-thumb article').each(function(){
		$(this).click(function(){
			$(".video-show iframe").attr("src",$(this).attr('data-url'));
			$(".video-show h3").text($(this).attr('data-title'));
			$(".video-show p").text($(this).attr('data-text'));
			if($(this).attr('data-external-url')==""){
				$(".video-show .btn").hide();
			} else {
				$(".video-show .btn").show().attr("href",$(this).attr('data-external-url'));
			}
		});
	});

	// -- Setor

	$("#setor-slide").owlCarousel({
	    autoHeight : true,
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
	});

	$("#setor .owl-next").click(function(){
	 	$("#setor-slide").trigger('owl.next');
	});

	$("#setor .owl-prev").click(function(){
	  	$("#setor-slide").trigger('owl.prev');
	});	

  	// 

  	$(".abas > *:first-child").addClass("ativa");

  	$(".abas > *").click(function(){
  		$(this).addClass("ativa");
  		$(this).closest("ul").find(".ativa").not($(this).closest("li")).removeClass("ativa");
		$(this).parents().find(".articles#"+$(this).closest("ul").attr("id")+" > article").hide();
		$(this).parents().find(".articles#"+$(this).closest("ul").attr("id")+" > article[data-value='"+$(this).attr("id")+"']").show();
	});


	// -- Diretoria

	$(".diretoria-slide").owlCarousel({
		items : 3, //10 items above 1000px browser width
		navigation : true,
		navigationText: false,
		itemsDesktop : [1000,3], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,2], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});

	// 

	$('.pub-tag').each(function(){
	    $(this).next('img').andSelf().wrapAll('<div class="publicidade"/>');
	});


	if ($(window).width() <= 460) {
		$("aside #newsletter").insertAfter(".main #cursos");
		$(".main .flex60 #newsletter").show();
  	}
  	
  	if ($(window).width() <= 768) {
  		if($("#encontre-um-carro form span.flex45").parent().is("form")){
  			$("#encontre-um-carro form span.flex45").wrapAll("<div class='flex80'></div>");
  		}	
  	}

	$("#topo").click(function(){
		if ($(window).width() <= 1024) {
			$("footer nav").toggleClass("on");
			$("body").toggleClass("off");
		}
	});

	$('.border').wrap("<div class='border-dyn-holder'></div>");

	jQuery(window).resize(function(){
		if($("footer nav").is(".on")){
			$("footer nav").removeClass("on");
		}
		if($("body").is(".off")){
			$("body").removeClass("off");
		}
		if ($(window).width() <= 460) {
			$("aside #newsletter").insertAfter(".main #cursos");
			$(".main .flex60 #newsletter").show();
		} else {
			$(".main .flex60 #newsletter").hide();
		}
	 	if ($(window).width() <= 768) {
			if($("#encontre-um-carro form span.flex45").parent().is("form")){
	  			$("#encontre-um-carro form span.flex45").wrapAll("<div class='flex80'></div>");
	  		}	
	  	} else {
			if($("#encontre-um-carro form span.flex45").parent().is("div")){
	  			$("#encontre-um-carro form span.flex45").unwrap();
	  		}	
		}
	});	


});
