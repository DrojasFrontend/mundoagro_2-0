import $ from "jquery";

export const componentsToEqualize = [
	".noticiaDestacadas h2",
	".noticiaDestacadas .fs-p-small",
	".noticiaRecientes h2",
	".noticiaRecientes .fs-p-small",
];

export function equalizeHeights(selector) {
	$(selector).height(
		Math.max.apply(
			null,
			$(selector).map(function () {
				return $(this).height("auto").height();
			})
		)
	);
}

export const initClickableCards = (cardSelector) => {
	$(cardSelector)
		.on("click", function (e) {
			let url = $(this).find("a").attr("href");
			if (url) {
				location.href = url;
			}
		})
		.css("cursor", "pointer");

	$(`${cardSelector} a`).on("click", function (e) {
		e.stopPropagation();
	});
};
