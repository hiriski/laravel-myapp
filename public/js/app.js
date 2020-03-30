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

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// require('./bootstrap');
// // import Swall from 'sweetalert2';
// const Swall = require('sweetalert2');
// window.Vue = require('vue');
// const app = new Vue({
//     el: '#app',
// });
console.log('App js for front');

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

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n   ╷\n38 │ @import 'pages/404';\n   │         ^^^^^^^^^^^\n   ╵\n  /opt/lampp/htdocs/myapp/resources/sass/front/app.scss 38:9  root stylesheet\n    at runLoaders (/opt/lampp/htdocs/myapp/node_modules/webpack/lib/NormalModule.js:316:20)\n    at /opt/lampp/htdocs/myapp/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /opt/lampp/htdocs/myapp/node_modules/loader-runner/lib/LoaderRunner.js:233:18\n    at context.callback (/opt/lampp/htdocs/myapp/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at render (/opt/lampp/htdocs/myapp/node_modules/sass-loader/dist/index.js:73:7)\n    at Function.call$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:87203:16)\n    at _render_closure1.call$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:76994:12)\n    at _RootZone.runBinary$3$3 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:25521:18)\n    at _RootZone.runBinary$3 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:25525:19)\n    at _FutureListener.handleError$1 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23975:19)\n    at _Future__propagateToListeners_handleError.call$0 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:24271:40)\n    at Object._Future__propagateToListeners (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:3500:88)\n    at _Future._completeError$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:24099:9)\n    at _AsyncAwaitCompleter.completeError$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23491:12)\n    at Object._asyncRethrow (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:3256:17)\n    at /opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:13326:20\n    at _wrapJsFunctionForAsync_closure.$protected (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:3279:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23512:12)\n    at _awaitOnObject_closure0.call$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23504:25)\n    at _RootZone.runBinary$3$3 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:25521:18)\n    at _RootZone.runBinary$3 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:25525:19)\n    at _FutureListener.handleError$1 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23975:19)\n    at _Future__propagateToListeners_handleError.call$0 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:24271:40)\n    at Object._Future__propagateToListeners (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:3500:88)\n    at _Future._completeError$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:24099:9)\n    at _AsyncAwaitCompleter.completeError$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23491:12)\n    at Object._asyncRethrow (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:3256:17)\n    at /opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:15981:20\n    at _wrapJsFunctionForAsync_closure.$protected (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:3279:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23512:12)\n    at _awaitOnObject_closure0.call$2 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23504:25)\n    at _RootZone.runBinary$3$3 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:25521:18)\n    at _RootZone.runBinary$3 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:25525:19)\n    at _FutureListener.handleError$1 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:23975:19)\n    at _Future__propagateToListeners_handleError.call$0 (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:24271:40)\n    at Object._Future__propagateToListeners (/opt/lampp/htdocs/myapp/node_modules/sass/sass.dart.js:3500:88)");

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