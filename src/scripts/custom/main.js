/* eslint-env browser */
(function () {
	'use strict';
	document.addEventListener('DOMContentLoaded', function () {
		// header fixed scroll
		window.addEventListener("scroll", function () {
			const header = document.querySelector("#masthead");
			const scrollPosition = window.scrollY;

			if (scrollPosition > 30) {
				header.classList.add("fixed-header");
			} else {
				header.classList.remove("fixed-header");
			}
		});
		// video player
		const video = document.getElementById("myVideo");
		const btn = document.getElementById("playBtn");

		btn.addEventListener("click", function () {
			video.setAttribute("controls", "controls"); // ← کنترل‌ها را فعال کن
			video.play();
			btn.classList.add("hidden");
		});

		video.addEventListener("pause", function () {
			btn.classList.remove("hidden"); // دکمه برگرده
		});

		video.addEventListener("ended", function () {
			btn.classList.remove("hidden"); // وقتی تموم شد
		});
	});
	jQuery(document).ready(function ($) {
		// Faq
		if ($('.faq-question').length) {
			$('.faq-question').click(function (e) {
				e.preventDefault();
				var answer = $(this).next('.faq-answer');
				var toggle = $(this).find('.faq-toggle');

				if (answer.is(':visible')) {
					answer.slideUp();
					$(this).removeClass('active');
				} else {
					$('.faq-answer').slideUp();
					$('.faq-question').removeClass('active');
					answer.slideDown();
					$(this).addClass('active');
				}
			});
		}
		//   home desc
		const $btn = $(".more-toggle");
		$btn.on("click", function () {
			const $parent = $(this).closest(".c-home-desc__content");
			const $moreText = $parent.find(".more-desc");
			$moreText.stop().slideToggle(500);
			$parent.toggleClass("open");
			if ($parent.hasClass("open")) {
				$(this).text("مشاهده کمتر");
			} else {
				$(this).text("مشاهده بیشتر");
			}
		});
		// Hamburger Menu
		var hamburger = document.querySelector('.js-hamburger');

		if (hamburger) {
			var hamburgerMenu = function hamburgerMenu() {
				document.getElementsByTagName('html')[0].classList.toggle('is-fixed');
				document.querySelector('.js-navs').classList.toggle('is-open');
			};

			hamburger.addEventListener('click', hamburgerMenu, false);
		}

		// Popup
		function shouldShowPopup() {
			const lastSeen = localStorage.getItem('popupSeenTime');
			if (!lastSeen) return true;


			const now = Date.now();
			const diffHours = (now - parseInt(lastSeen)) / (1000 * 60 * 60);
			return diffHours >= 3;
		}

		function showPopup() {
			$('#popup-overlay').fadeIn(300);
			localStorage.setItem('popupSeenTime', Date.now());
		}

		if (shouldShowPopup()) {
			setTimeout(showPopup, 3000);
		}

		// Close on X click
		$('#popup-close').click(function () {
			$('#popup-overlay').fadeOut(250);
		});

		// Close on clicking outside the popup
		$('#popup-overlay').click(function (e) {
			if (e.target.id === 'popup-overlay') {
				$('#popup-overlay').fadeOut(250);
			}
		});

		// Close on clicking outside the popup
		$(document).on('click', function (e) {
			if (!$(e.target).closest('#popup-box').length) {
				$('#popup-overlay').fadeOut(250);
			}
		});
		// زمانی که روی منوی اصلی کلیک می‌شود
		$('.parent-sub-menu').on('click', function (e) {
			e.preventDefault();
			if ($(window).width() >= 768) return;

			let subMenu = $(this).next('ul');

			if (subMenu.hasClass('open')) {

				subMenu.removeClass('open');

			} else {

				$('.c-menu > li > ul.open').removeClass('open');

				subMenu.addClass('open');
			}
		});
	});
})();
