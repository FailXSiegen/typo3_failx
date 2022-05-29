/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/javascript/index.js":
/*!*********************************!*\
  !*** ./src/javascript/index.js ***!
  \*********************************/
/***/ (() => {

eval("var scrollPosition = window.scrollY;\nvar headerContainer = document.getElementById('head');\n\nif (scrollPosition >= 10) {\n  headerContainer.classList.add('sticky-top');\n  headerContainer.classList.add('minify');\n} else {\n  headerContainer.classList.remove('sticky-top');\n  headerContainer.classList.remove('minify');\n}\n\nwindow.addEventListener('scroll', function () {\n  scrollPosition = window.scrollY;\n\n  if (scrollPosition >= 1) {\n    headerContainer.classList.add('sticky-top');\n    headerContainer.classList.add('minify');\n  } else {\n    headerContainer.classList.remove('sticky-top');\n    headerContainer.classList.remove('minify');\n  }\n});\n\n//# sourceURL=webpack:///./src/javascript/index.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/javascript/index.js"]();
/******/ 	
/******/ })()
;