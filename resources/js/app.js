import './front/components/overlay';
import './front/components/nav';
import './front/pages/home';
import './front/pages/about';
import './front/pages/blog';
import './front/pages/template-page';
import './front/pages/contact';




/** Berikut informasi yang akan saya ambil untuk dimainkan */

/** Nilai jarak saat ini antara document body dan scroll ke atas (jika scroll di mentokan ke atas maka nilainya akan 0) */
var currentState = document.body.scrollTop || document.documentElement.scrollTop;

/** nilai tinggi total halaman */
var scrollHeight = document.documentElement.scrollHeight;

/** Nilai tinggi yang saat ini dilihat oleh user */
var clientHeight = document.documentElement.clientHeight;

/** Untuk mengambil nilai total scroll sampai bawah saya harus mengurangi nilai scrollHeight dengan clientHeight, dengan cara seperti ini saya bisa mendapatkan nilai scroll sampai habis yang nantikan akan di uji dengan window.scrollY */
var pageHeight = (scrollHeight - clientHeight);


/** Coba buat scroll progress yang akan di panggil oleh event ketika window di scroll */
const scrollProgress = () => {
	/** Lah, kenapa harus di definisikan lagi disini ? 
	 * Karena variable yang di atas itu nilainya tetap, tapi yang disini nilainya dinamis akan berubah2 ketika window scroll, kenapa bisa begitu ? karena function ini dipanggil oleh event scroll. Jadi semua variable disini akan dinamis */
	var currentState = document.body.scrollTop || document.documentElement.scrollTop
	var scrollHeight = document.documentElement.scrollHeight;
	var clientHeight = document.documentElement.clientHeight;
	var pageHeight   = (scrollHeight - clientHeight);

	let scrollStatePercentage = (currentState / pageHeight) * 100;
	let scrollStatePercentageFixed = scrollStatePercentage.toFixed();
	console.log(`Progress scroll saat ini ${scrollStatePercentageFixed}%`);
}

window.addEventListener("scroll", scrollProgress);



/** Ketika window di rezize melebihi batas, misal ukuran tablet kemudian di rezie ke ukuran mobile maka window akan reload secara otomatis 

untuk sementara ide nya saya buat ketika window di resize lebih dari 100 atau kurang dari 100 (pixel) maka window akan reload otomatis
*/

/** Define variable yang isinya lebar layar (window width) (nilai variable ini akan fix meskipun dipanggil di dalam event listener resize) */
let windowFixCurrentOuterWidth = window.outerWidth;

const windowResized = (currentWidth, callback) => {

	/** kedua variable ini berisi nilai lebar window dikurang / ditambah 100 */
	let greaterHundred 		 = windowFixCurrentOuterWidth + 100;
	let smallerHundred		 = windowFixCurrentOuterWidth - 100;

	if ((currentWidth >= greaterHundred) || (currentWidth <= smallerHundred)) {
		setTimeout(()=> {
			window.location.reload();
		}, 500);
	}
	
	/** panggil callback */
	callback("window resized");

}

window.addEventListener('resize', () => {

	/** Sedangkan variable ini akan berubah nilainya ketika lebar window di ubah */
  let currentWindowWidth = window.outerWidth;

  windowResized(currentWindowWidth, (mgs) => console.warn(mgs));

});