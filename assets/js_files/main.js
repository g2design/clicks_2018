$ = jQuery.noConflict();

var startScroll;
var header;

$(document).ready(function() {
	startScroll = $('.top-header').css( "height" );
	header = $('.main-nav').css( "height" );

	$(window).scroll(function () { 
		scrollFunc();
	});

	$('.loader').hide();
	setTimeout(function(){
		if(localStorage.getItem('displayWindow') !== "false"){
			$('.browser-recommend').fadeIn();
		}
	}, 500);
	$('.close').on('click', function() {
		$('.browser-recommend').fadeOut();
		localStorage.setItem('displayWindow','false');
	});

	scrollFunc();
	scroll_top();
	activeItem();

	$('.banner-slider').slick({
    	infinite: true,
  		slidesToShow: 1,
  		slidesToScroll: 1,
  		autoplay: true,
  		autoplaySpeed: 4000,
  		dots: true,
  		arrows: false
  	});

	$('.clicks-slider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: true,
	  fade: true,
	  autoplay: true,
		autoplaySpeed: 3000,
	  asNavFor: '.clicks-nav'
	});

	$('.clicks-nav').slick({
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  asNavFor: '.clicks-slider',
	  dots: false,
	  arrows: false,
	  focusOnSelect: true,
	  responsive: [
	   {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    }
	   ]	  
	});

	$('.video-trigger').on('click', function(){
		$('.popups').fadeIn().addClass('opened');
		$('.video-' + $(this).data('video-trigger')).show();
		$('.video-' + $(this).data('video-trigger')).find('iframe')[0].src += "&autoplay=1";
	});

	$('.popups').on('click', function(e){
		e.stopPropagation();
		$('.popups iframe').each(function(index, element){
			var video = $(element).attr("src");
			video = video.replace('&autoplay=1', '');
			$(element).attr("src","");
			$(element).attr("src",video);
		});
		$('.popup').hide();
		$('.popups').fadeOut().removeClass('opened');
	})
});

var activeItem = function () {
	$('.navbar-item').each(function(){
		if(($(location).attr("href")).indexOf(($(this).attr("href"))) > -1){
			$(this).parent().addClass('activeItem');
		}
	})
	$('.dropdown a').each(function(){
		var parent = $(this).parents('.dropdown');
		if(($(location).attr("href")).indexOf(($(this).attr("href"))) > -1){
			$(this).css('color', '#7DC142');
			$(parent).parent().addClass('activeItem');
		}
	});
	$('.sidebar a').each(function(){
		$(this).removeClass("active");
		if(($(location).attr("href")).indexOf(($(this).attr("href"))) > -1){
			$(this).parent().addClass("active");
		}
	});
}

var scroll_top = function () {
	$('#to-top').click(function (e) {
		e.preventDefault();
		$('html, body').animate({scrollTop: 0}, 'fast');
	});
}

var scrollFunc = function () {
	var scroll = $(window).scrollTop();

	if (scroll >= parseInt(startScroll, 10)) { 
		$('.main-nav').addClass('scrolled');
		$('.top-element').css('margin-top', header);
	} else {
		$('.main-nav').removeClass('scrolled');
		$('.top-element').css('margin-top', 0);
	}
}
