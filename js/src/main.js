import {} from "bootstrap";
import $ from "jquery";
import {
	initSwiperCursos,
	initSwiperPapelDigital,
} from "./swiper-init";
import { equalizeHeights, componentsToEqualize, initClickableCards } from "./functions.js";

let Main = {
	init: async function () {
		$(document).ready(() => {
			this.initComponents();
			this.initEventListeners();

			if (document.querySelector(".swiperCursos")) {
				initSwiperCursos();
			}

			if (document.querySelector(".swiperPapelDigital")) {
				initSwiperPapelDigital();
			}

			initClickableCards(".clickeable");
		});
	},

	initComponents: function () {
		componentsToEqualize.forEach((selector) => equalizeHeights(selector));

		$(window).on("resize", () => {
			componentsToEqualize.forEach((selector) => equalizeHeights(selector));
		});
	},

	initEventListeners: function () {
		console.log("Event listeners initialized");
	},
};

Main.init();
