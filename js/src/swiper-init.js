import $ from "jquery";
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

export const initServiciosSwiper = () => {
	const swiper = new Swiper(".serviciosSwiper", {
		modules: [Pagination, Navigation],
		slidesPerView: "auto",
		spaceBetween: 36,
		centeredSlides: false,
		navigation: {
			nextEl: ".swiper-button-next-not",
			prevEl: ".swiper-button-prev-not",
			clickable: true,
			disabledClass: "swiper-nav-disabled",
		},
		pagination: {
			el: ".swiper-pagination-ser",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 2.2,
				spaceBetween: 24,
			},
			768: {
				slidesPerView: 3.1,
				spaceBetween: 20,
			},
			1280: {
				slidesPerView: 4.5,
				spaceBetween: 20,
			},
			1366: {
				slidesPerView: 4.5,
				spaceBetween: 36,
			},
		},
		on: {
			init: function () {
				updateServiciosFraction(this);
			},
			slideChange: function () {
				updateServiciosFraction(this);
			},
		},
	});

	function updateServiciosFraction(swiper) {
		const currentIndex = swiper.realIndex + 1;
		const totalSlides = swiper.slides.length;
		const fractionHtml = `
			<span class="current">${currentIndex}</span>
			<span class="separator">/</span>
			<span class="total">${totalSlides}</span>
		`;
		document.querySelector(".swiper-fraction-ser") ? document.querySelector(".swiper-fraction-ser").innerHTML = fractionHtml : null;

	}

	function initHeightServicios() {
		if ($(".serviciosSwiper").length) {
			$(".serviciosSwiper .swiper-slide h3").height("auto");

			let maxHeightServicios = 0;
			$(".serviciosSwiper .swiper-slide h3").each(function () {
				let height = $(this).height();
				maxHeightServicios =
					height > maxHeightServicios ? height : maxHeightServicios;
			});
			$(".serviciosSwiper .swiper-slide h3").height(maxHeightServicios);
		}
	}

	initHeightServicios();

	let resizeTimerServicios;
	$(window).on("resize", function () {
		clearTimeout(resizeTimerServicios);
		resizeTimerServicios = setTimeout(function () {
			initHeightServicios();
			swiper.update();
		}, 250);
	});
};
