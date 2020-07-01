


/**
 * Blog Pager
 * without any API resources
 */


class BlogPager {
	constructor(options) {

		if(options.element) {
			this.element = options.element;
		} else {
			this.element = document.querySelector('ul.pagination');
		}

		// Arrow svg
		this.arrowBack 		= options.arrowBack;
		this.arrowForward 	= options.arrowForward;

		// Nagigation text
		this.prevText 		= options.prevText;
		this.nextText 		= options.nextText;

		this.prev = this.element.querySelector('li:first-child'); // prev li element
		this.next = this.element.querySelector('li:last-child');  // next li element

		this.nextLink = null;
		this.prevLink = null;

		if(!this.prev.classList.contains('disabled')) {
			this.prevLink = this.prev.querySelector('a').href;
		}
		if(!this.next.classList.contains('disabled')) {
			this.nextLink = this.next.querySelector('a').href;
		}

		this.init();

	}

	init() {
		// DOM
		this.prev.innerHTML = this.prev.classList.contains('disabled') ? `<span>${ this.arrowBack }<span>${ this.prevText }</span></span>` : `<a href="${ this.prevLink }" rel="prev">${ this.arrowBack }<span>Prev</span></a>`;
		this.next.innerHTML = this.next.classList.contains('disabled') ? `<span><span>${ this.nextText }</span>${ this.arrowForward }</span>` : `<a href="${ this.nextLink }" rel="prev"> <span>Next</span>${ this.arrowForward } </a>`;
	}

	getLinks() {
		let links = [
			this.prev.querySelector('a').href,
			this.next.querySelector('a').href,
		];

		return links;
	}

}

let blogPagerOptions = {
	element : document.querySelector('ul.pagination'),
	prevText : "Prev",
	nextText : "Next",
	arrowBack : `<svg viewBox="0 0 25.995 11.574"><defs></defs><path d="M29.995,9.064H6.771L10.814,5.02,9.787,4,4,9.787l5.787,5.787,1.02-1.02L6.771,10.51H29.995Z" transform="translate(-4 -4)"/></svg>`,
	arrowForward : `<svg viewBox="0 0 25.995 11.574"><defs></defs><path d="M29.995,9.064H6.771L10.814,5.02,9.787,4,4,9.787l5.787,5.787,1.02-1.02L6.771,10.51H29.995Z" transform="translate(29.995 15.574) rotate(180)"/></svg>`
};

new BlogPager(blogPagerOptions);