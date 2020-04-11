// function MyAction({trigger, target, overlay}) {
//     this.trigger    = document.querySelector(trigger);
//     this.target     = document.querySelector(target);
//     this.overlay    = document.querySelector(overlay);

//     this.trigger.addEventListener('click', function(e) {
//         e.preventDefault();
//         console.log(this.trigger);
//     });

//     /** method */
    
//     this.doThis = function() {
        
//     }
// }


/** Testing Action */
// var testingAction = new MyAction({
//     trigger : '#_psh div[class^=s] > .a',
//     target  : '#_psh',
//     overlay : '.___g--dark___'
// });

const AnhOi = document.getElementById('AnhOi');
const hero = document.getElementById('hero');

function isIndex() {
    if(currentRouteName === "index") {
        return true;
    }
}


/** Typed */
if(isIndex()) {
    var typed3 = new Typed('#typed', {
        // strings: ['My strings are: <i>strings</i> with', 'My strings are: <strong>HTML</strong>', 'My strings are: Chars &times; &copy;'],
        strings: [
            'Hi, i am <strong>Riski</strong>',
            'Hi, i am <strong>Backend Engineer</strong>',
            'Hi, i am <strong class="laravel-color">Laravel Addict :-)</strong>'],
        typeSpeed: 70,
        startDelay: 500,
        backSpeed: 30,
        smartBackspace: true, // this is a default
        loop: true
    });
}


const changeTitle = () => {
    let title = document.querySelector('title');
    title.textContent = String.fromCodePoint(0x211B, 0x1D4BE, 0x1D4C8, 0x1D4C0, 0x1D4BE);
}

window.addEventListener('DOMContentLoaded', () => {
    // removePreload();
    // changeTitle();
})

const removePreload = () => {
    setTimeout(() => {
        document.getElementById("_x0").className = 'removed';
        console.log("Preload Removed!");
    }, 500);
}


/** Line Number for pre tag */
(function () {
    for (var tagPre = document.querySelectorAll('pre[class*="language-"]:not([data-line-numbers="false"]'),
            preLength = tagPre.length,
            a = 0; preLength > a; a++) {
        tagPre[a].innerHTML = '<span class="line-number"></span>' + tagPre[a].innerHTML;
        for (var s = tagPre[a].innerHTML.split(/\n/).length, r = 0; s > r; r++) {
            var l = tagPre[a].getElementsByTagName("span")[0];
            l.innerHTML += "<span>" + ( r + 1 ) + "</span>";
        }
    }
})();


/** Code Data File Name */
const blogCode = document.querySelectorAll('pre[class*="language-"][data-filename]');
if(blogCode) {
    for(var i = 0; i < blogCode.length; i++) {
        const codeFileName = blogCode[i].dataset.filename;
        const newElem = document.createElement('span');
        newElem.className = "code-filename";
        newElem.textContent = codeFileName;

        blogCode[i].appendChild(newElem);
    }
}


/** Scroll */
window.addEventListener('scroll', () => {
    let userScrollTo = window.scrollY;
    if(userScrollTo > 100) {
        moveNavigation('left');
        if(isIndex()) {
            layoutStyle('left');
        }
    }
    if(userScrollTo > 400) {
        if(currentRouteName === 'blog.show') {
            showFloatingShare();
        }
    }
    else {
        moveNavigation('top');
        if(currentRouteName === 'blog.show') {
            removeFloatingShare();
        }
        else if(currentRouteName === 'index') {
            layoutStyle('center');
        }
    }
});


/** Navigation */
window.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        showNavigation();
    }, 500);
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
    let nav     = document.querySelector('#_n_[data-position="top"]');
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



/** Global Overlay */
var overlayElement = document.querySelector('.___g--dark___');

const addOverlayDark = () => {
    overlayElem    = document.createElement('div');
    overlayElem.className = '___g--dark___';
    AnhOi.appendChild(overlayElem);
    currentOverlay = true;
}

const removeOverlay = () => {
    overlayElem = document.querySelector('.___g--dark___');
    AnhOi.removeChild(overlayElem);
}




/** Floating Share Button Blog */
const floatingShare = document.querySelector("#_psh");
var btnFloatingShare;
if(floatingShare) {
    btnFloatingShare = floatingShare.querySelector("div[class^=s] > .a");
}

if(floatingShare) {
    btnFloatingShare.addEventListener('click', () => {
        if(floatingShare.classList.contains('x')) {
            floatingAction('ready', 'close')
            addOverlayDark();
        } else {
            floatingAction('x', 'share');
            removeOverlay();
        }
    });
}


const showFloatingShare = () => {
    floatingShare.setAttribute('data-show', 'true');
}


const floatingAction = (classname, materialIcon) => {
    floatingShare.className = classname;
    btnFloatingShare.querySelector('.a i').textContent = materialIcon;
}

const removeFloatingShare = () => {
    floatingShare.setAttribute('data-show', 'false');
}


/** Layout Style */
const layoutStyle = (position) => {
    AnhOi.setAttribute('data-layout-style', position);
    hero.setAttribute('data-position', position);
}