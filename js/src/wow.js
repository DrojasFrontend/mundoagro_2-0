import WOW from "wow.js";
import "animate.css";

document.addEventListener("DOMContentLoaded", function () {
	const wow = new WOW({
		boxClass: "wow",
		animateClass: "animated",
		offset: 0,
		mobile: true,
		live: true,
		callback: function (box) {},
		scrollContainer: null,
	});

	wow.init();
});
