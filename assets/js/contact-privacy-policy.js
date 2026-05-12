(function () {
	'use strict';

	var cfg = typeof gdAirconRepairContact !== 'undefined' ? gdAirconRepairContact : null;
	var el = document.getElementById('privacy-policy-content');

	if (!cfg || !el || !cfg.restPages || !cfg.slug) {
		return;
	}

	var url =
		cfg.restPages +
		(cfg.restPages.indexOf('?') === -1 ? '?' : '&') +
		'slug=' +
		encodeURIComponent(cfg.slug);

	fetch(url, { credentials: 'same-origin' })
		.then(function (res) {
			if (!res.ok) {
				throw new Error('HTTP ' + res.status);
			}
			return res.json();
		})
		.then(function (data) {
			if (!data || !data[0] || !data[0].content || !data[0].content.rendered) {
				return;
			}
			el.innerHTML = data[0].content.rendered;
		})
		.catch(function () {
			/* 失敗時はブロック側のプレースホルダのまま */
		});
})();
