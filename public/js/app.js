/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _front_components_overlay__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./front/components/overlay */ "./resources/js/front/components/overlay.js");
/* harmony import */ var _front_components_nav__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./front/components/nav */ "./resources/js/front/components/nav.js");
/* harmony import */ var _front_components_nav__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_front_components_nav__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _front_pages_home__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./front/pages/home */ "./resources/js/front/pages/home.js");
/* harmony import */ var _front_pages_about__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./front/pages/about */ "./resources/js/front/pages/about.js");
/* harmony import */ var _front_pages_blog__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./front/pages/blog */ "./resources/js/front/pages/blog.js");




 // const removePreload = () => {
//     setTimeout(() => {
//         document.getElementById("_x0").className = 'removed';
//         console.log("Preload Removed!");
//     }, 500);
// }

/** Scroll */
// window.addEventListener('scroll', () => {
//     let userScrollTo = window.scrollY;
//     if(userScrollTo > 100) {
//         moveNavigation('left');
//         if(isIndex()) {
//             layoutStyle('left');
//         }
//     }
//     if(userScrollTo > 400) {
//         if(currentRouteName === 'blog.show') {
//             showFloatingShare();
//         }
//     }
//     else {
//         moveNavigation('top');
//         if(currentRouteName === 'blog.show') {
//             removeFloatingShare();
//         }
//         else if(currentRouteName === 'index') {
//             layoutStyle('center');
//         }
//     }
// });

/***/ }),

/***/ "./resources/js/front/components/nav.js":
/*!**********************************************!*\
  !*** ./resources/js/front/components/nav.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/** Navigation */
window.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    showNavigation();
  }, 500);
});
window.addEventListener("scroll", function () {
  if (window.scrollY > 50) {
    moveNavigation('left');
  } else {
    moveNavigation('center');
  }
});
/** Dapatkan ukuran lebar halaman */

var getPageWrapWidth = function getPageWrapWidth() {
  var pageWrap = document.querySelector('main#main .Anh > div[class*=__] > .__');

  if (pageWrap) {
    var wrapWidth = pageWrap.clientWidth;
    return wrapWidth;
  }
};

var setNavigationWidth = function setNavigationWidth(callback) {
  var nav = document.querySelector('#_n_');
  /** jika element nav-nya ada */

  if (nav) {
    /** ambil lebar navigasi saat ini (berdasarkan lebar browser user */
    navWidth = nav.clientWidth;
    /** Kurang lebar navigasi dengan lebar page wrap (dapat dari function getPageWrapWidth) kemudian bagi dua hasil baginya. Ahhhh lieur :-D */

    var paddingSize = (navWidth - getPageWrapWidth()) / 2;
    nav.style.paddingLeft = paddingSize + 'px';
    nav.style.paddingRight = paddingSize + 'px';
    /** jika callback itu function */

    if (typeof callback == 'function') {
      /** kirimkan variable nav ke callback */
      callback(nav);
    }
  }
};

var showNavigation = function showNavigation() {
  setNavigationWidth(function (nav) {
    /** terima variable dari param callback */
    nav.dataset.hasSetWidth = true;
  });
};

var moveNavigation = function moveNavigation(position) {
  var nav = document.getElementById('_n_');

  if (nav) {
    nav.setAttribute('data-position', position);
  }
};

/***/ }),

/***/ "./resources/js/front/components/overlay.js":
/*!**************************************************!*\
  !*** ./resources/js/front/components/overlay.js ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _global_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../global_element */ "./resources/js/front/global_element.js");


var setOverlay = function setOverlay(arg) {
  _global_element__WEBPACK_IMPORTED_MODULE_0__["overflay"].setAttribute('data-show', arg);
};

/* harmony default export */ __webpack_exports__["default"] = (setOverlay);

/***/ }),

/***/ "./resources/js/front/global_element.js":
/*!**********************************************!*\
  !*** ./resources/js/front/global_element.js ***!
  \**********************************************/
/*! exports provided: AnhOi, footer, hero, overflay */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AnhOi", function() { return AnhOi; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "footer", function() { return footer; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "hero", function() { return hero; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "overflay", function() { return overflay; });
var AnhOi = document.getElementById('AnhOi');
var footer = document.querySelector("footer#main");
var hero = document.getElementById('hero');
var overflay = document.querySelector('.___g--dark___');


/***/ }),

/***/ "./resources/js/front/pages/about.js":
/*!*******************************************!*\
  !*** ./resources/js/front/pages/about.js ***!
  \*******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _routes_function__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../routes_function */ "./resources/js/front/routes_function.js");

/** About */

if (Object(_routes_function__WEBPACK_IMPORTED_MODULE_0__["isAbout"])()) {
  window.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
      showAboutImage();
      backButton();
    }, 1000);
  });
  /** Back button */

  var backButton = function backButton() {
    var btnBack = document.querySelector('#back');

    if (btnBack) {
      btnBack.addEventListener('click', function (e) {
        e.preventDefault();
        window.history.back();
      });
    }
  };
  /* Get element parent image dan lebarnya (px)  */


  var getInfoParentImage = function getInfoParentImage(callback) {
    var parentImage = document.querySelector('#about ._r ._a ._x > [class*=img]');

    if (parentImage) {
      var parentImageWidth = parentImage.clientWidth;

      if (typeof callback == "function") {
        /** parameter pertama yang dikirim adalah parent elemen
         * parameter kedua nilai lebar parent element (px) */
        callback(parentImage, parentImageWidth);
      }
    }
  };
  /** Set posisi image ke tengah */


  var setImagePosition = function setImagePosition(parent, width) {
    /* get element image */
    var elementImage = parent.querySelector('img');
    /* Kurangi lebar element parent dengan lebar element image kemudian bagi dua */

    var paddingSize = (width - elementImage.clientWidth) / 2;
    elementImage.style.paddingLeft = paddingSize + 'px';
    elementImage.dataset.hasCenter = 'true'; // true for show image

    console.log('Aku pindah ke tengah dong!');
  };
  /** Show about image */


  var showAboutImage = function showAboutImage() {
    /* terima parameter dari callback */
    getInfoParentImage(function (parent, width) {
      setImagePosition(parent, width);
    });
  };
}

/***/ }),

/***/ "./resources/js/front/pages/blog.js":
/*!******************************************!*\
  !*** ./resources/js/front/pages/blog.js ***!
  \******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _global_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../global_element */ "./resources/js/front/global_element.js");
/* harmony import */ var _components_overlay__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/overlay */ "./resources/js/front/components/overlay.js");
/* harmony import */ var _routes_function__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../routes_function */ "./resources/js/front/routes_function.js");



/** Floating share parent element */

var floatingShareElem = document.querySelector("#_psh");
/** Line Number for pre tag */

(function () {
  for (var tagPre = document.querySelectorAll('pre[class*="language-"]:not([data-line-numbers="false"]'), preLength = tagPre.length, a = 0; preLength > a; a++) {
    tagPre[a].innerHTML = '<span class="line-number"></span>' + tagPre[a].innerHTML;

    for (var s = tagPre[a].innerHTML.split(/\n/).length, r = 0; s > r; r++) {
      var l = tagPre[a].getElementsByTagName("span")[0];
      l.innerHTML += "<span>" + (r + 1) + "</span>";
    }
  }
})();
/** Code Data File Name */


var blogCode = document.querySelectorAll('pre[class*="language-"][data-filename]');

if (blogCode) {
  for (var i = 0; i < blogCode.length; i++) {
    var codeFileName = blogCode[i].dataset.filename;
    var newElem = document.createElement('span');
    newElem.className = "code-filename";
    newElem.textContent = codeFileName;
    blogCode[i].appendChild(newElem);
  }
}
/** Floating Share Button Blog */


if (floatingShareElem) {
  var btnFloatingShare = floatingShareElem.querySelector("div[class^=s] > .a");
  var icon = floatingShareElem.querySelector("i");
  btnFloatingShare.addEventListener('click', function () {
    floatingShare(floatingShareElem, btnFloatingShare, icon);
  });
}

var setFloatingShare = function setFloatingShare(parent, btn, icon, callback) {
  parent.className = parent.className == "x" ? 'show' : 'x';
  icon.textContent = parent.className == "x" ? 'share' : 'close';
  /** kirimkan nama class parent saat ini ke dalam callback */

  if (typeof callback == "function") {
    callback(parent.className);
  }
};

var floatingShare = function floatingShare(parent, btn, icon) {
  /** Terima nama class parent floating share untuk di uji */
  setFloatingShare(parent, btn, icon, function (floatingShareClassName) {
    if (floatingShareClassName === "show") {
      Object(_components_overlay__WEBPACK_IMPORTED_MODULE_1__["default"])('true');
      /** jika overlay di click click juga share buttonnya */

      _global_element__WEBPACK_IMPORTED_MODULE_0__["overflay"].addEventListener('click', function (e) {
        e.preventDefault();
        btn.click();
      });
    } else {
      Object(_components_overlay__WEBPACK_IMPORTED_MODULE_1__["default"])('false');
    }
  });
};
/** Show and hide floating share button (when scroll) */


if (Object(_routes_function__WEBPACK_IMPORTED_MODULE_2__["isSingleBlog"])()) {
  window.addEventListener('scroll', function () {
    var relatedPost = document.getElementById('RP');
    var batasBawah = _global_element__WEBPACK_IMPORTED_MODULE_0__["AnhOi"].clientHeight - relatedPost.clientHeight - _global_element__WEBPACK_IMPORTED_MODULE_0__["footer"].clientHeight - 500;

    if (window.scrollY > 350) {
      showFloatingShare('true');

      if (window.scrollY > batasBawah) {
        showFloatingShare('false'); // console.log('Masuk sini...');
      }
    } else {
      showFloatingShare('false');
    }
  });

  var showFloatingShare = function showFloatingShare(arg) {
    floatingShareElem.dataset.show = arg;
  };
}

/***/ }),

/***/ "./resources/js/front/pages/home.js":
/*!******************************************!*\
  !*** ./resources/js/front/pages/home.js ***!
  \******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _routes_function__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../routes_function */ "./resources/js/front/routes_function.js");
/* harmony import */ var _global_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../global_element */ "./resources/js/front/global_element.js");


/** Typed */

if (Object(_routes_function__WEBPACK_IMPORTED_MODULE_0__["isIndex"])()) {
  var typed3 = new Typed('#typed', {
    // strings: ['My strings are: <i>strings</i> with', 'My strings are: <strong>HTML</strong>', 'My strings are: Chars &times; &copy;'],
    strings: ['Hi, i am <strong>Riski</strong>', 'Hi, i am <strong>Web Developer</strong>', 'Hi, i am <strong class="laravel-color"><span class="laravelicon"><svg width="256px" height="264px" viewBox="0 0 256 264" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid"><g><path d="M255.855641,59.619717 C255.950565,59.9710596 256,60.3333149 256,60.6972536 L256,117.265345 C256,118.743206 255.209409,120.108149 253.927418,120.843385 L206.448786,148.178786 L206.448786,202.359798 C206.448786,203.834322 205.665123,205.195421 204.386515,205.937838 L105.27893,262.990563 C105.05208,263.119455 104.804608,263.201946 104.557135,263.289593 C104.464333,263.320527 104.376687,263.377239 104.278729,263.403017 C103.585929,263.58546 102.857701,263.58546 102.164901,263.403017 C102.051476,263.372083 101.948363,263.310215 101.840093,263.26897 C101.613244,263.186479 101.376082,263.1143 101.159544,262.990563 L2.07258227,205.937838 C0.7913718,205.201819 0,203.837372 0,202.359798 L0,32.6555248 C0,32.2843161 0.0515567729,31.9234187 0.144358964,31.5728326 C0.175293028,31.454252 0.24747251,31.3459828 0.288717928,31.2274022 C0.366053087,31.0108638 0.438232569,30.7891697 0.55165747,30.5880982 C0.628992629,30.4540506 0.742417529,30.3457814 0.83521972,30.2220451 C0.953800298,30.0570635 1.06206952,29.8869261 1.20127281,29.7425672 C1.31985339,29.6239866 1.4745237,29.5363401 1.60857131,29.4332265 C1.75808595,29.3094903 1.89213356,29.1754427 2.06227091,29.0774848 L2.06742659,29.0774848 L51.6134853,0.551122364 C52.8901903,-0.183535768 54.4613221,-0.183535768 55.7380271,0.551122364 L105.284086,29.0774848 L105.294397,29.0774848 C105.459379,29.1805983 105.598582,29.3094903 105.748097,29.4280708 C105.882144,29.5311844 106.031659,29.6239866 106.15024,29.7374115 C106.294599,29.8869261 106.397712,30.0570635 106.521448,30.2220451 C106.609095,30.3457814 106.727676,30.4540506 106.799855,30.5880982 C106.918436,30.7943253 106.985459,31.0108638 107.06795,31.2274022 C107.109196,31.3459828 107.181375,31.454252 107.212309,31.5779883 C107.307234,31.9293308 107.355765,32.2915861 107.356668,32.6555248 L107.356668,138.651094 L148.643332,114.878266 L148.643332,60.6920979 C148.643332,60.3312005 148.694889,59.9651474 148.787691,59.619717 C148.823781,59.4959808 148.890804,59.3877116 148.93205,59.269131 C149.014541,59.0525925 149.08672,58.8308984 149.200145,58.629827 C149.27748,58.4957794 149.390905,58.3875102 149.478552,58.2637739 C149.602288,58.0987922 149.705401,57.9286549 149.84976,57.7842959 C149.968341,57.6657153 150.117856,57.5780688 150.251903,57.4749553 C150.406573,57.351219 150.540621,57.2171714 150.705603,57.1192136 L150.710758,57.1192136 L200.261973,28.5928511 C201.538395,27.8571345 203.110093,27.8571345 204.386515,28.5928511 L253.932573,57.1192136 C254.107866,57.2223271 254.241914,57.351219 254.396584,57.4697996 C254.525476,57.5729132 254.674991,57.6657153 254.793572,57.7791402 C254.93793,57.9286549 255.041044,58.0987922 255.16478,58.2637739 C255.257582,58.3875102 255.371007,58.4957794 255.443187,58.629827 C255.561767,58.8308984 255.628791,59.0525925 255.711282,59.269131 C255.757683,59.3877116 255.824707,59.4959808 255.855641,59.619717 Z M247.740605,114.878266 L247.740605,67.8378666 L230.402062,77.8192579 L206.448786,91.6106946 L206.448786,138.651094 L247.745761,114.878266 L247.740605,114.878266 Z M198.194546,199.97272 L198.194546,152.901386 L174.633101,166.357704 L107.351512,204.757188 L107.351512,252.27191 L198.194546,199.97272 Z M8.25939501,39.7961379 L8.25939501,199.97272 L99.0921175,252.266755 L99.0921175,204.762344 L51.6392637,177.906421 L51.6237967,177.89611 L51.603174,177.885798 C51.443348,177.792996 51.3093004,177.658949 51.1597857,177.545524 C51.0308938,177.44241 50.8813791,177.359919 50.7679542,177.246494 L50.7576429,177.231027 C50.6235953,177.102135 50.5307931,176.942309 50.4173682,176.79795 C50.3142546,176.658747 50.1905184,176.540167 50.1080276,176.395808 L50.1028719,176.380341 C50.0100697,176.22567 49.9533572,176.040066 49.8863334,175.864773 C49.8193096,175.710103 49.7316631,175.565744 49.6904177,175.400762 L49.6904177,175.395606 C49.6388609,175.19969 49.6285496,174.993463 49.6079269,174.792392 C49.5873041,174.637722 49.5460587,174.483051 49.5460587,174.328381 L49.5460587,174.31807 L49.5460587,63.5689658 L25.5979377,49.7723734 L8.25939501,39.8012935 L8.25939501,39.7961379 Z M53.6809119,8.89300821 L12.3994039,32.6555248 L53.6706006,56.4180414 L94.9469529,32.6503692 L53.6706006,8.89300821 L53.6809119,8.89300821 Z M75.1491521,157.19091 L99.0972731,143.404629 L99.0972731,39.7961379 L81.7587304,49.7775291 L57.8054537,63.5689658 L57.8054537,167.177457 L75.1491521,157.19091 Z M202.324244,36.934737 L161.047891,60.6972536 L202.324244,84.4597702 L243.59544,60.6920979 L202.324244,36.934737 Z M198.194546,91.6106946 L174.24127,77.8192579 L156.902727,67.8378666 L156.902727,114.878266 L180.850848,128.664547 L198.194546,138.651094 L198.194546,91.6106946 Z M103.216659,197.616575 L163.759778,163.052915 L194.023603,145.781396 L152.778185,122.034346 L105.289242,149.374903 L62.0073307,174.292291 L103.216659,197.616575 Z" fill="#FF2D20"></path></g></svg></span> Laravel Addict</strong>'],
    typeSpeed: 70,
    startDelay: 500,
    backSpeed: 30,
    smartBackspace: true,
    // this is a default
    loop: true
  });
}
/** Hero Style for Homepage */


if (Object(_routes_function__WEBPACK_IMPORTED_MODULE_0__["isIndex"])()) {
  window.addEventListener('DOMContentLoaded', function () {
    homeAction();
  });
  window.addEventListener('scroll', function () {
    homeAction();
  });

  var homeAction = function homeAction() {
    if (window.scrollY > 200) {
      setLayout('left');
    } else {
      setLayout('center');
    }
  };
}
/** Layout Style */


var moveHero = function moveHero(position) {
  _global_element__WEBPACK_IMPORTED_MODULE_1__["hero"].dataset.position = position;
  /** jika posisi ke kiri set z-index menjadi 1 */

  if (position === "left") {
    setTimeout(function () {
      _global_element__WEBPACK_IMPORTED_MODULE_1__["hero"].style.zIndex = '1';
    }, 500);
  } else if (position === "center") {
    setTimeout(function () {
      _global_element__WEBPACK_IMPORTED_MODULE_1__["hero"].removeAttribute('style');
    }, 200);
  }
};

var setLayoutAnhOi = function setLayoutAnhOi(style) {
  _global_element__WEBPACK_IMPORTED_MODULE_1__["AnhOi"].dataset.layoutStyle = style;
};

var setLayout = function setLayout(position) {
  setLayoutAnhOi(position);
  moveHero(position);
};

/***/ }),

/***/ "./resources/js/front/routes_function.js":
/*!***********************************************!*\
  !*** ./resources/js/front/routes_function.js ***!
  \***********************************************/
/*! exports provided: isIndex, isAbout, isSingleBlog */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "isIndex", function() { return isIndex; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "isAbout", function() { return isAbout; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "isSingleBlog", function() { return isSingleBlog; });
function isIndex() {
  if (currentRouteName === "index") {
    return true;
  }
}

function isAbout() {
  if (currentRouteName === "about") {
    return true;
  }
}

function isSingleBlog() {
  if (currentRouteName === "blog.show") {
    return true;
  }
}



/***/ }),

/***/ "./resources/sass/back/app.scss":
/*!**************************************!*\
  !*** ./resources/sass/back/app.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/front/app.scss":
/*!***************************************!*\
  !*** ./resources/sass/front/app.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/back/app.scss ./resources/sass/front/app.scss ***!
  \**************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /opt/lampp/htdocs/myapp/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /opt/lampp/htdocs/myapp/resources/sass/back/app.scss */"./resources/sass/back/app.scss");
module.exports = __webpack_require__(/*! /opt/lampp/htdocs/myapp/resources/sass/front/app.scss */"./resources/sass/front/app.scss");


/***/ })

/******/ });