(function ($) {
	$(document).ready(function () { // wait for DOM

		$(window).on('load', function () {
			// equalheight('#posts_query_stripe .blocks .excerpt');
			// equalheight('#products .svg');
			equalheight('.little_call_to_actions_cols .blue-text');
			equalheight('#why_connect_with_us .bg_color_stripe_repeater .heading .head');
			// equalheight('.get_older_posts h3');
			// equalheight('.get_older_posts .excerpt');
		})










		// $( ".primary-menu .menu-item-has-children" ).hover(
		//   function() {
		//     $(this).find("ul.sub-menu").fadeIn(300);
		//     // $(this).addClass( "hover" );
		//   }, function() {
		//     $(this).find("ul.sub-menu").fadeOut(300);
		//     // $(this).removeClass( "hover" );
		//   }
		// );











		// if(navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0){
		//   /* Microsoft Internet Explorer detected in. */
		//   $('body').addClass('isIE')
		//   $('.single-pagecareer figure').addClass('d-block')
		// } else {
		//
		// }















		// INIT behavior of header

		var header = $('.header')
		// var headerHeight = $('.header').height()
		var top = $(window).scrollTop()
		var top_info_navbar_repeater_height = $('#top_info_navbar_repeater').height()

		if (top < top_info_navbar_repeater_height) {
			header.css({
				'display': 'block',
				'top': top_info_navbar_repeater_height + 1
			})
		} else {

		}

		// on SCROLL behavior of header

		var delta = 0

		$(window).scroll(function (event) {

			// console.log("You've scrolled " + $(window).scrollTop() + " pixels");

			// var header = $('.header')
			var top = $(window).scrollTop()
			var top_info_navbar_repeater_height = $('#top_info_navbar_repeater').height()

			if (top < top_info_navbar_repeater_height) {
				header.css({
					'display': 'block',
					'top': top_info_navbar_repeater_height + 1
				})
			}

			var deltaBefore
			var deltaAfter

			deltaBefore = delta
			delta = top
			deltaAfter = delta

			if (deltaAfter > deltaBefore) {

				header.addClass('hide')
				header.removeClass('show')

			} else {

				header.removeClass('hide')
				header.addClass('show')

			}

			if (deltaAfter < top_info_navbar_repeater_height) {
				header.removeClass('hide')
				header.removeClass('show')
			}

		});










		// ------------------------- Init padding of Body ---------------------------------

		$('body').css({
			paddingTop: $('.header').outerHeight() + $('#top_info_navbar_repeater').outerHeight()
		})













		// ------------------------- anchor smooth scroll animation ---------------------------------

		$(function () {
			$('.page a[href*=\\#]:not([href=\\#])').click(function () {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

					var target = $(this.hash);

					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top - $("header").outerHeight()
						}, 1000);

						return false;
					}
				}
			});
		});














		// ------------------------- back to top + header shrink ---------------------------------

		$(window).on('scroll', function () {

			// back to top
			var scrollTrigger = 100
			var scrollTop = $(window).scrollTop();

			if (scrollTop >= scrollTrigger) {
				$('#back-to-top').addClass('show');
			} else {
				$('#back-to-top').removeClass('show');
			}
		})





















		// ============================================================================ SLIDE-OUT HELP IN SIDEBAR, DESKTOP
		$('#helpWidget h2').on('click', function () {
			$('#helpWidget').toggleClass('opened')
		})

		$('#helpWidget .close').on('click', function () {
			$('#helpWidget').removeClass('opened')
		})

		// ============================================================================ SLIDE-OUT HELP IN MOBILE
		// $('#helpWidgetMobile h2').on('click', function() {
		//   $('#helpWidgetMobile').toggleClass('opened')
		// })
		//
		// $('#helpWidgetMobile .close').on('click', function() {
		//   $('#helpWidgetMobile').removeClass('opened')
		// })

		// ============================================================================ NAVI
		if (window.innerWidth < 768) {
			// $('#navbarTogglerMainNavigation').addClass('collapse')
		} else {
			// $('#navbarTogglerMainNavigation').removeClass('collapse')
		}















		// SEARCH
		var search = $('.search-icon')
		var searchForm = $('.search-form')

		search.on('click', function () {
			searchForm.toggleClass('open')
		})











		// mobile menu_id

		var hamburger = $('.hamburger .mobile-menu-trigger')
		var mobile_menu = $('.hamburger .primary-menu')
		var close_mobile_menu = $('.hamburger .mobile-menu-close')

		hamburger.on('click', function () {
			$('.hamburger').toggleClass('open')
		})

		close_mobile_menu.on('click', function () {
			$('.hamburger').toggleClass('open')
		})
















		// REFERENCES

		// desktop
		if (window.innerWidth > 960) {

			$('#references .references__logos .col:first-child').addClass('active')

			$('#references .references__logos').slick({
				dots: false,
				arrows: true,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 4000,
				slidesToShow: 5,
				prevArrow: $('#references .prevArrow'),
				nextArrow: $('#references .nextArrow')
			})
		}

		// tablet
		if (window.innerWidth >= 768 && window.innerWidth < 960) {

			$('#references .references__logos .col:first-child').addClass('active')

			$('#references .references__logos').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 2
			})

		}

		// medium / large phone
		if (window.innerWidth < 768 && window.innerWidth > 320) {

			$('#references .references__logos .col:first-child').addClass('active')

			$('#references .references__logos').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 1
			})

		}

		// small phone
		if (window.innerWidth <= 320) {

			$('#references .references__logos .col:first-child').addClass('active')

			$('#references .references__logos').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 1
			})

		}






		// contact page custom checkbox

		// var label = $('.page .wpcf7 .wpcf7-list-item')
		// label.append('<span class="checkmark"></span>')








		// REFERENCES FULL - GALLERY

		const images = $('.wp-block-gallery a')
		const imagesArr = Array.prototype.slice.call(images);

		imagesArr.forEach(img => {
			$(img).attr('data-lightbox', 'reference_full_lightbox')
		})









		// TWEAK FOR BLOG TILES = go to data-link href, because we can not have a href on parent element wrapping the_tags(), it would destroy the html markup

		// function openInNewTab(url) {
		//   var win = window.open(url, '_blank');
		//   win.focus();
		// }



		// let tile = $('#tiles_of_posts .tile');
		//
		// $(tile).on('click mouseup', e => {
		//
		//   e.preventDefault();
		//
		//   const url = $(e.target).data('link')
		//
		//   if( e.which == 2 ) {
		//     // openInNewTab($(e.target).data('link'))
		//     window.open(url, '_blank').focus()
		//   } else {
		//     window.location.href = url
		//   }
		// })








		// const tiles = $('#tiles_of_posts .tile .bg-img')
		//
		// for (var i = 0; i < tiles.length; i++) {
		//
		//   $(tiles[i]).on('click mouseup', e => {
		//
		//     e.preventDefault();
		//
		//     const url = $(e.target).data('link')
		//     console.log(url);
		//
		//     if( e.which == 2 ) {
		//       // window.open(url, '_blank').focus()
		//     } else {
		//       // window.location.href = url
		//     }
		//   })
		// }










    

    // $('#products .bg_color_stripe_repeater .row').slick({
    //   dots: false,
    //   arrows: true,
    //   infinite: true,
    //   speed: 300,
    //   autoplay: true,
    //   autoplaySpeed: 4000,
    //   slidesToShow: 5,
    //   prevArrow: $('#products .prevArrow'),
    //   nextArrow: $('#products .nextArrow')
    // })

    equalheight('#products .svg');




		// REFERENCES

		// desktop
		if (window.innerWidth > 960) {

			// $('#products .bg_color_stripe_repeater .row .col:first-child').addClass('active')

			$('#products .bg_color_stripe_repeater .row').slick({
				dots: false,
				arrows: true,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 4000,
				slidesToShow: 5,
				prevArrow: $('#products .prevArrow'),
				nextArrow: $('#products .nextArrow')
			})
		}

		// tablet
		if (window.innerWidth >= 768 && window.innerWidth < 960) {

			// $('#products .bg_color_stripe_repeater .row .col:first-child').addClass('active')

			$('#products .bg_color_stripe_repeater .row').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 2
			})

		}

		// medium / large phone
		if (window.innerWidth < 768 && window.innerWidth > 320) {

			// $('#products .bg_color_stripe_repeater .row .col:first-child').addClass('active')

			$('#products .bg_color_stripe_repeater .row').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 1
			})

		}

		// small phone
		if (window.innerWidth <= 320) {

			// $('#products .bg_color_stripe_repeater .row .col:first-child').addClass('active')

			$('#products .bg_color_stripe_repeater .row').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 1
			})

		}








	})
})(jQuery, window);
