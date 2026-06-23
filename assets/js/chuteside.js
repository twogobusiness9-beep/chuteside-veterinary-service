/**
 * Chuteside theme scripts: sticky-header shadow, mobile nav, appointment confirmation.
 */
(function () {
	'use strict';

	var header = document.getElementById('siteHeader');
	if (header) {
		var onScroll = function () {
			header.classList.toggle('scrolled', window.scrollY > 8);
		};
		onScroll();
		window.addEventListener('scroll', onScroll, { passive: true });
	}

	var toggle = document.querySelector('.nav-toggle');
	var nav = document.getElementById('primaryNav');
	if (toggle && nav) {
		toggle.addEventListener('click', function () {
			var open = nav.classList.toggle('open');
			toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
		});
		nav.addEventListener('click', function (e) {
			if (e.target.tagName === 'A') {
				nav.classList.remove('open');
				toggle.setAttribute('aria-expanded', 'false');
			}
		});
	}

	// Appointment form: show a local confirmation (no backend needed for the demo).
	var form = document.getElementById('apptForm');
	if (form) {
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			var nameField = form.querySelector('[name="full_name"]');
			var name = nameField && nameField.value ? nameField.value.trim() : '';
			var success = document.getElementById('apptSuccess');
			if (success) {
				var nameEl = success.querySelector('.appt-success-name');
				if (nameEl) {
					nameEl.textContent = name || 'neighbor';
				}
				form.style.display = 'none';
				success.style.display = 'block';
				success.scrollIntoView({ behavior: 'smooth', block: 'center' });
			}
		});
	}
})();
