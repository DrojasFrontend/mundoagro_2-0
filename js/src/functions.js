import $ from "jquery";

export const componentsToEqualize = [
	".noticiaDestacadas h2",
	".noticiaDestacadas .fs-p-small",
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
