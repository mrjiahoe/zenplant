const filterButtons = document.querySelectorAll('.category-button button');
const filterableProduct = document.querySelectorAll('.shop-grid .product');

const filterProduct = (e) => {
	document.querySelector('.active').classList.remove('active');
	e.target.classList.add('active');

	filterableProduct.forEach((product) => {
		product.classList.add('hide');

		if (
			product.dataset.name === e.target.dataset.name ||
			e.target.dataset.name === 'all'
		) {
			product.classList.remove('hide');
		}
	});
};

filterButtons.forEach((button) =>
	button.addEventListener('click', filterProduct)
);
