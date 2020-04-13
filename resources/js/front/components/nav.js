/** Navigation */
window.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        showNavigation();
    }, 500);
});


window.addEventListener("scroll", () => {
    if(window.scrollY > 50) {
        moveNavigation('left')
    }
    else {
        moveNavigation('center');
    }
});


/** Dapatkan ukuran lebar halaman */
const getPageWrapWidth = () => {
    let pageWrap = document.querySelector('main#main .Anh > div[class*=__] > .__');
    if(pageWrap) {
        let wrapWidth = pageWrap.clientWidth;
        return wrapWidth;
    }
}

const setNavigationWidth = (callback) => {
    let nav     = document.querySelector('#_n_');
    /** jika element nav-nya ada */
    if(nav) {
        /** ambil lebar navigasi saat ini (berdasarkan lebar browser user */
        navWidth    = nav.clientWidth;

        /** Kurang lebar navigasi dengan lebar page wrap (dapat dari function getPageWrapWidth) kemudian bagi dua hasil baginya. Ahhhh lieur :-D */
        let paddingSize         = (navWidth - getPageWrapWidth()) / 2;
        nav.style.paddingLeft   = paddingSize + 'px';
        nav.style.paddingRight  = paddingSize + 'px';

        /** jika callback itu function */
        if(typeof callback == 'function') {
            /** kirimkan variable nav ke callback */
            callback(nav);
        }
    }
}

const showNavigation = () => {
    setNavigationWidth(function(nav) {
        /** terima variable dari param callback */
        nav.dataset.hasSetWidth = true;
    });
}


const moveNavigation = (position) => {
    let nav = document.getElementById('_n_');
    if(nav) {
        nav.setAttribute('data-position', position);
    }
}