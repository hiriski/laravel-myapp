import { isBlogIndex } from '../routes_function';

if(isBlogIndex()) {
	let paginationElem = document.getElementById('__pg__');
	let ul = paginationElem.querySelector('ul.pagination');

	// let paginationObject = {
	// 	previous : {
	// 		prevActive : ul.querySelector('li [rel=prev]'),
	// 		disabled : ul.querySelector('ul li:first-child.disabled')
	// 	},
	// 	next : {
	// 		nextActive : ul.querySelector('li [rel=next]'),
	// 		disabled : ul.querySelector('ul li:last-child.disabled')
	// 	},
	// };

	let paginationObject = {
		previous : ul.querySelector('li:first-child > *'),
		next  	 : ul.querySelector('li:last-child > *'),
	};

	let prevLink = paginationObject.previous.innerHTML = `<i class="material-icons">arrow_back</i> <span>Previous</span>`;
	let nextLink = paginationObject.next.innerHTML = `<span>Next</span> <i class="material-icons">arrow_forward</i>`;
}