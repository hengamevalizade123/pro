/* eslint-env browser */
(function () {
	'use strict';
	document.addEventListener('DOMContentLoaded', function () {
		// Your custom JavaScript goes here
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

		btn.addEventListener("click", function() {
			video.setAttribute("controls", "controls"); // ← کنترل‌ها را فعال کن
			video.play();
			btn.classList.add("hidden");
		});

		video.addEventListener("pause", function() {
			btn.classList.remove("hidden"); // دکمه برگرده
		});

		video.addEventListener("ended", function() {
			btn.classList.remove("hidden"); // وقتی تموم شد
		});
	});
	jQuery(document).ready(function ($) {
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
	});
})();
