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
/*! no static exports found */
/***/ (function(module, exports) {

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
var AnhOi = document.getElementById('AnhOi');
var hero = document.getElementById('hero');

function isIndex() {
  if (currentRouteName === "index") {
    return true;
  }
}
/** Typed */


if (isIndex()) {
  var typed3 = new Typed('#typed', {
    // strings: ['My strings are: <i>strings</i> with', 'My strings are: <strong>HTML</strong>', 'My strings are: Chars &times; &copy;'],
    strings: ['Hi, i am <strong>Riski</strong>', 'Hi, i am <strong>Backend Engineer</strong>', 'Hi, i am <strong class="laravel-color">Laravel Addict :-)</strong>'],
    typeSpeed: 70,
    startDelay: 500,
    backSpeed: 30,
    smartBackspace: true,
    // this is a default
    loop: true
  });
}

var changeTitle = function changeTitle() {
  var title = document.querySelector('title');
  title.textContent = String.fromCodePoint(0x211B, 0x1D4BE, 0x1D4C8, 0x1D4C0, 0x1D4BE);
};

window.addEventListener('DOMContentLoaded', function () {// removePreload();
  // changeTitle();
});

var removePreload = function removePreload() {
  setTimeout(function () {
    document.getElementById("_x0").className = 'removed';
    console.log("Preload Removed!");
  }, 500);
};
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
/** Scroll */


window.addEventListener('scroll', function () {
  var userScrollTo = window.scrollY;

  if (userScrollTo > 100) {
    moveNavigation('left');

    if (isIndex()) {
      layoutStyle('left');
    }
  }

  if (userScrollTo > 400) {
    if (currentRouteName === 'blog.show') {
      showFloatingShare();
    }
  } else {
    moveNavigation('top');

    if (currentRouteName === 'blog.show') {
      removeFloatingShare();
    } else if (currentRouteName === 'index') {
      layoutStyle('center');
    }
  }
});
/** Navigation */

window.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    showNavigation();
  }, 500);
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
  var nav = document.querySelector('#_n_[data-position="top"]');
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
/** Global Overlay */


var overlayElement = document.querySelector('.___g--dark___');

var addOverlayDark = function addOverlayDark() {
  overlayElem = document.createElement('div');
  overlayElem.className = '___g--dark___';
  AnhOi.appendChild(overlayElem);
  currentOverlay = true;
};

var removeOverlay = function removeOverlay() {
  overlayElem = document.querySelector('.___g--dark___');
  AnhOi.removeChild(overlayElem);
};
/** Floating Share Button Blog */


var floatingShare = document.querySelector("#_psh");
var btnFloatingShare;

if (floatingShare) {
  btnFloatingShare = floatingShare.querySelector("div[class^=s] > .a");
}

if (floatingShare) {
  btnFloatingShare.addEventListener('click', function () {
    if (floatingShare.classList.contains('x')) {
      floatingAction('ready', 'close');
      addOverlayDark();
    } else {
      floatingAction('x', 'share');
      removeOverlay();
    }
  });
}

var showFloatingShare = function showFloatingShare() {
  floatingShare.setAttribute('data-show', 'true');
};

var floatingAction = function floatingAction(classname, materialIcon) {
  floatingShare.className = classname;
  btnFloatingShare.querySelector('.a i').textContent = materialIcon;
};

var removeFloatingShare = function removeFloatingShare() {
  floatingShare.setAttribute('data-show', 'false');
};
/** Layout Style */


var layoutStyle = function layoutStyle(position) {
  AnhOi.setAttribute('data-layout-style', position);
  hero.setAttribute('data-position', position);
};

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