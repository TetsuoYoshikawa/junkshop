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

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /var/www/resources/js/app.js: Identifier 'faInstagram' has already been declared. (5:108)\n\n\u001b[0m \u001b[90m 3 |\u001b[39m \u001b[36mimport\u001b[39m { faAddressCard\u001b[33m,\u001b[39m faClock \u001b[33m,\u001b[39m faInstagram\u001b[0m\n\u001b[0m \u001b[90m 4 |\u001b[39m } \u001b[36mfrom\u001b[39m \u001b[32m'@fortawesome/free-regular-svg-icons'\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 5 |\u001b[39m \u001b[36mimport\u001b[39m { faSearch\u001b[33m,\u001b[39m faStoreAlt\u001b[33m,\u001b[39m faShoppingBag\u001b[33m,\u001b[39m faSignOutAlt\u001b[33m,\u001b[39m faYenSign\u001b[33m,\u001b[39m faCamera \u001b[33m,\u001b[39mfaShoppingCart\u001b[33m,\u001b[39m faTrashAlt\u001b[33m,\u001b[39mfaInstagram} \u001b[36mfrom\u001b[39m \u001b[32m'@fortawesome/free-solid-svg-icons'\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m   |\u001b[39m                                                                                                             \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 6 |\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 7 |\u001b[39m library\u001b[33m.\u001b[39madd(faSearch\u001b[33m,\u001b[39m faAddressCard\u001b[33m,\u001b[39m faStoreAlt\u001b[33m,\u001b[39m faShoppingBag\u001b[33m,\u001b[39m faSignOutAlt\u001b[33m,\u001b[39m faYenSign\u001b[33m,\u001b[39m faClock\u001b[33m,\u001b[39m faCamera\u001b[33m,\u001b[39mfaShoppingCart\u001b[33m,\u001b[39mfaTrashAlt\u001b[33m,\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 8 |\u001b[39m\u001b[0m\n    at Parser._raise (/var/www/node_modules/@babel/parser/lib/index.js:569:17)\n    at Parser.raiseWithData (/var/www/node_modules/@babel/parser/lib/index.js:562:17)\n    at Parser.raise (/var/www/node_modules/@babel/parser/lib/index.js:523:17)\n    at ScopeHandler.checkRedeclarationInScope (/var/www/node_modules/@babel/parser/lib/index.js:1731:12)\n    at ScopeHandler.declareName (/var/www/node_modules/@babel/parser/lib/index.js:1697:12)\n    at Parser.checkLVal (/var/www/node_modules/@babel/parser/lib/index.js:11154:24)\n    at Parser.parseImportSpecifier (/var/www/node_modules/@babel/parser/lib/index.js:15176:10)\n    at Parser.parseNamedImportSpecifiers (/var/www/node_modules/@babel/parser/lib/index.js:15152:36)\n    at Parser.parseImport (/var/www/node_modules/@babel/parser/lib/index.js:14983:39)\n    at Parser.parseStatementContent (/var/www/node_modules/@babel/parser/lib/index.js:13623:27)\n    at Parser.parseStatement (/var/www/node_modules/@babel/parser/lib/index.js:13521:17)\n    at Parser.parseBlockOrModuleBlockBody (/var/www/node_modules/@babel/parser/lib/index.js:14110:25)\n    at Parser.parseBlockBody (/var/www/node_modules/@babel/parser/lib/index.js:14101:10)\n    at Parser.parseProgram (/var/www/node_modules/@babel/parser/lib/index.js:13441:10)\n    at Parser.parseTopLevel (/var/www/node_modules/@babel/parser/lib/index.js:13428:25)\n    at Parser.parse (/var/www/node_modules/@babel/parser/lib/index.js:15206:10)\n    at parse (/var/www/node_modules/@babel/parser/lib/index.js:15258:38)\n    at parser (/var/www/node_modules/@babel/core/lib/parser/index.js:52:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (/var/www/node_modules/@babel/core/lib/transformation/normalize-file.js:87:38)\n    at normalizeFile.next (<anonymous>)\n    at run (/var/www/node_modules/@babel/core/lib/transformation/index.js:29:50)\n    at run.next (<anonymous>)\n    at Function.transform (/var/www/node_modules/@babel/core/lib/transform.js:25:41)\n    at transform.next (<anonymous>)\n    at step (/var/www/node_modules/gensync/index.js:261:32)\n    at /var/www/node_modules/gensync/index.js:273:13\n    at async.call.result.err.err (/var/www/node_modules/gensync/index.js:223:11)\n    at /var/www/node_modules/gensync/index.js:189:28\n    at /var/www/node_modules/@babel/core/lib/gensync-utils/async.js:74:7\n    at /var/www/node_modules/gensync/index.js:113:33\n    at step (/var/www/node_modules/gensync/index.js:287:14)\n    at /var/www/node_modules/gensync/index.js:273:13\n    at async.call.result.err.err (/var/www/node_modules/gensync/index.js:223:11)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /var/www/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });