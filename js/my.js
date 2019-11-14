jQuery(document).ready(function ($) {
	"use strict";

	/*---------------------
	 tooltip
	--------------------- */
	$('[data-toggle="tooltip"]').tooltip({
		animated: 'fade',
		placement: 'top',
		container: 'body'
	});
	/*----------------------------
	 scrollUp
	------------------------------ */
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
	/*----------------------------
	 mixItUp
	------------------------------ */
	$('#mix-fil').mixItUp();

	/*----------------------------
	price-slider active
   ---------------------------- */
	$("#slider-range").slider({
		range: true,
		min: 40,
		max: 600,
		values: [100, 540],
		slide: function (event, ui) {
			$("#amount").val("£" + ui.values[0] + " - £" + ui.values[1]);
		}
	});
	$("#amount").val("£" + $("#slider-range").slider("values", 0) +
		" - £" + $("#slider-range").slider("values", 1));
	/*----------------------------
	 wow js active
	------------------------------ */
	new WOW().init();
	/*-------------------------------------------
	option chosen
	-------------------------------------------- */
	$(".orderby").chosen();

	$(".menu-carousel").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 5,
		itemsCustom: [
			[0, 1],
			[450, 1],
			[480, 2],
			[600, 2],
			[700, 2],
			[768, 3],
			[992, 4],
			[1199, 5]
		],
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	});

	$(".feature-carousel").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 4,
		itemsCustom: [
			[0, 1],
			[450, 1],
			[480, 2],
			[600, 2],
			[700, 2],
			[768, 2],
			[992, 3],
			[1199, 4]
		],
		pagination: true,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	});

	$(".feature-carousel-np").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 4,
		itemsCustom: [
			[0, 1],
			[450, 1],
			[480, 2],
			[600, 2],
			[700, 2],
			[768, 2],
			[992, 3],
			[1199, 4]
		],
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	});
	$(".feature-carousel-np3").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 3,
		itemsCustom: [
			[0, 1],
			[450, 1],
			[480, 2],
			[600, 2],
			[700, 2],
			[768, 2],
			[992, 2],
			[1199, 3]
		],
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	});

	$(".feature-carousel-np6").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 6,
		itemsCustom: [
			[0, 1],
			[450, 1],
			[480, 2],
			[600, 2],
			[700, 2],
			[768, 4],
			[992, 4],
			[1199, 5]
		],
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	});
	$(".new-arri-total").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 1,
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		itemsDesktop: [1199, 1],
		itemsDesktopSmall: [979, 1],
		itemsTablet: [768, 1]
	});
	$("#client-carousel").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 1,
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		itemsDesktop: [1199, 1],
		itemsDesktopSmall: [979, 1],
		itemsTablet: [767, 1]
	});
	$(".total-usefull-product").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 1,
		itemsCustom: [
			[0, 1],
			[450, 1],
			[480, 2],
			[600, 2],
			[700, 2],
			[768, 1],
			[992, 1],
			[1199, 1]
		],
		pagination: true,
		navigation: false,
	});
	$("#gallery_01").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		items: 4,
		pagination: true,
		navigation: false,
		itemsDesktop: [1199, 4],
		itemsDesktopSmall: [979, 3],
		itemsTablet: [768, 2],
		itemsMobile: [480, 3]
	});

	/*----------------------------
	 jQuery MeanMenu
	------------------------------ */
	jQuery('nav#dropdown').meanmenu();
	/*----------------------------
	/*----------------------------
	counterUp
   ------------------------------ */
	$('.counter2').counterUp({
		delay: 10,
		time: 1000
	});

	/* Custom */

	// $('.category-menu-list .menu-item-has-children > a').on('click', function(){
	//     $(this).parent().toggleClass('open');
	//     $(this).parent().find('.cat-left-drop-menu').toggleClass("open");
	//     return false;
	// });

	let wpgisGallery = function () {
		$('#wpgis-gallery').slick('unslick');

		$('#wpgis-gallery li img').each(function () {
			let thumbAlt = $(this).attr('alt');
			$(this).parent().append('<span class="flexthum-title">' + thumbAlt + '</span>');
		});

		let slickCurrentHeight = $('.wpgis-slider-for .slick-slide.slick-current').css('height');
		$('.wpgis-slider-for').css({
			'height': slickCurrentHeight
		});

		$('#wpgis-gallery li').on('click', function () {
			let index = $(this).index();
			$('.wpgis-slider-for').slick('slickGoTo', index);

			let slickNexttHeight = $('.wpgis-slider-for .slick-slide').eq(index + 1).css('height');


			$('.wpgis-slider-for').animate({
				'height': slickNexttHeight
			}, 400);
		});
	};
	if ($('body').hasClass('single-product')) {
		wpgisGallery();
	}

	let renameSearchForm = function () {
		let inputSearc = $('.search-box input[type="search"]');
		let searchBtn = $('.search-box button[type="submit"]');

		if ($('body').hasClass('_en')) {
			inputSearc.attr('placeholder', 'Find a product ...');
			searchBtn.text('Find');
		} else if ($('body').hasClass('_ro')) {
			inputSearc.attr('placeholder', 'Cautarea produselor...');
			searchBtn.text('Cauta');
		}
	};
	renameSearchForm();

	let convertInchToCm = function () {
		let resultInches = $('.converter__result--inches');
		let inputInches = $('#js-inches');

		$('#js-convert-to-cm').on('click', function () {
			let inputVal = inputInches.val();

			if (inputVal !== '') {
				let result = (inputVal * 2.54).toFixed(2);
				if (result === NaN) {
					resultInches.text();
				} else {
					resultInches.text(result);
				}
			}
		});
	};
	convertInchToCm();

	let convertCmToInch = function () {
		let resultCm = $('.converter__result--cm');
		let inputCm = $('#js-cm');

		$('#js-convert-to-inches').on('click', function () {
			let inputVal = inputCm.val();

			if (inputVal !== '') {
				let result = (inputVal / 0.39).toFixed(2);
				if (result === NaN) {
					resultCm.text();
				} else {
					resultCm.text(result);
				}
			}
		});
	};
	convertCmToInch();

	let currentMenuItemSubmenu = function () {
		let url = location.href;
		let subMenuLinks = document.querySelectorAll('.main-menu ul li ul li a');

		for (let i = 0; i < subMenuLinks.length; i++) {
			let href = subMenuLinks[i].getAttribute('href');
			if (href === url) {
				subMenuLinks[i].parentElement.parentElement.parentElement.parentElement.parentElement.classList.add('current-menu-item');
			}

		}
	};
	currentMenuItemSubmenu();

	let videoSlider = function () {
		$('#js-slider-video').slick({
			dots: true,
			arrows: false,
			fade: true,
			autoplay: true,
			infinite: true,
		});
	};
	videoSlider();

	let unmutedVideo = function () {
		function mute(btn,elem){
			var video = document.getElementById(elem);

			if (video.muted){
				video.muted = false;
				btn.innerHTML = "Mute";
			} else{
				video.muted = true;
				btn.innerHTML = "Sound";
			}
		}

		$('#js-muted-button').on('click', function (e) {
			e.preventDefault();
			let video = document.querySelector('#js-slider video');
			if (video.muted){
				video.muted = false;
				this.innerHTML = '<i class="fa fa-volume-up"></i>';
			} else{
				video.muted = true;
				this.innerHTML = '<i class="fa fa-volume-off"></i>';
			}
		});
	};
	unmutedVideo();

	let countThumbGallery = function () {
		if($(window).width() > 600){
			let countThumb = $('#wpgis-gallery li').length;
			if(countThumb > 5){
				$('.woocommerce div.product div.images').addClass('more-height');
			}
		}
	};
	countThumbGallery();
});

