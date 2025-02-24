import $ from "jquery";
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

export const initSwiperCursos = () => {
	const swiper = new Swiper(".swiperCursos", {
		modules: [Pagination, Navigation],
		slidesPerView: "auto",
		spaceBetween: 36,
		centeredSlides: false,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
			clickable: true,
			disabledClass: "swiper-nav-disabled",
		},
		pagination: {
			el: ".swiper-pagination",
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
				slidesPerView: 3,
				spaceBetween: 18,
			}
		},
	});

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
