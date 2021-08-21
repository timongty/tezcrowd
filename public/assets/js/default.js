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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/default.js":
/*!****************************************!*\
  !*** ./resources/assets/js/default.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.dropdown = function () {
  return {
    open: false,
    sidebarOpen: false,
    mobile: false
  };
};

window.modals = function () {
  return {
    deleteModal: false,
    bindDeleteForm: function bindDeleteForm(e, $dispatch) {
      var delete_modal = $('.delete_modal');
      var route = e.target.attributes.route.nodeValue;
      var title = e.target.attributes.title.nodeValue;
      var desc = e.target.attributes.desc.nodeValue;
      delete_modal.find('.delete_form').attr('action', route);
      delete_modal.find('.title').text(title);
      delete_modal.find('.desc').text(desc);
    },
    submitDeleteForm: function submitDeleteForm(e, $dispatch) {
      var title = 'Delete';
      var desc = 'Are you sure you want to delete this?';
      var delete_modal = $('.delete_modal');
      var delete_form = delete_modal.find('.delete_form');
      delete_modal.find('.title').text(title);
      delete_modal.find('.desc').text(desc);
      delete_form.submit();
    },
    imageModal: false
  };
};

$(document).ready(function () {
  $('.left_sidebar .menu-list-item').on('click', function () {
    $('.left_sidebar .menu-list-item a').removeClass('is_active');
    $(this).find('a').addClass('is_active');
  }); // $("img").on("error", function () {
  //     $(this).attr("src", "https://cdn1.mockupgen.com/assets/images/default-mockupgen.jpg");
  // });
  // delay notification after 5 secs

  setTimeout(function () {
    $('.notification_container').find('.notification_content').fadeOut(500);
  }, 5000); // click x to dismiss notification

  $(document).on('click', '.dismiss', closeNotification);

  function closeNotification() {
    $('.notification_container').find('.notification_content').fadeOut(500);
  }

  ;
});

/***/ }),

/***/ 1:
/*!**********************************************!*\
  !*** multi ./resources/assets/js/default.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/tim/Desktop/Code/tezcrowd/resources/assets/js/default.js */"./resources/assets/js/default.js");


/***/ })

/******/ });