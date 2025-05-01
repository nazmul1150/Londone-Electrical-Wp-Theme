document.addEventListener('DOMContentLoaded', function () {
	const accordions = document.querySelectorAll('[data-accordion]');

	accordions.forEach((accordion) => {
		const buttons = accordion.querySelectorAll('button');
		buttons.forEach((button) => {
			button.addEventListener('click', () => {
				const index = parseInt(button.dataset.index);
				const allContents = accordion.querySelectorAll('.accordion-content');
				const allButtons = accordion.querySelectorAll('button');

				allContents.forEach((el, i) => {
					el.style.display = i === index ? 'block' : 'none';
					allButtons[i].classList.toggle('active', i === index);
				});
			});
		});
	});
});
