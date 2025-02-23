import $ from "jquery";

export const componentsToEqualize = [
	".noticiaDestacada h2",
	".noticiaDestacada .fs-p-small",
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
