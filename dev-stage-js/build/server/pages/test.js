"use strict";
/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(() => {
var exports = {};
exports.id = "pages/test";
exports.ids = ["pages/test"];
exports.modules = {

/***/ "./pages/test.js":
/*!***********************!*\
  !*** ./pages/test.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react/jsx-dev-runtime */ \"react/jsx-dev-runtime\");\n/* harmony import */ var react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ \"react\");\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! axios */ \"axios\");\n/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\nconst test = ()=>{\n    const { 0: sites , 1: setSites  } = (0,react__WEBPACK_IMPORTED_MODULE_1__.useState)([]);\n    const { 0: info , 1: setinfo  } = (0,react__WEBPACK_IMPORTED_MODULE_1__.useState)({\n        siteUrl: \"\",\n        inspect: \"\"\n    });\n    const handelClick = async ()=>{\n        try {\n            const res = await axios__WEBPACK_IMPORTED_MODULE_2___default().get(\"http://localhost:5000/sites\");\n            setSites(res.data);\n            console.log(res.data);\n        } catch (error) {\n            console.log(error);\n        }\n    };\n    const handelChange = async (e)=>{\n        const { value , name  } = e.target;\n        setinfo((prev)=>({\n                ...prev,\n                [name]: value\n            }));\n    };\n    const handel = async ()=>{\n        try {\n            console.log(info);\n            const res = await axios__WEBPACK_IMPORTED_MODULE_2___default().post(\"http://localhost:5000/urls\", info);\n            console.log(res.data);\n        } catch (error) {\n            console.log(error);\n        }\n    };\n    console.log(sites);\n    return /*#__PURE__*/ (0,react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.jsxDEV)(\"div\", {\n        children: [\n            /*#__PURE__*/ (0,react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.jsxDEV)(\"a\", {\n                href: \"http://localhost:5000/\",\n                children: \"auth\"\n            }, void 0, false, {\n                fileName: \"C:\\\\wamp64\\\\www\\\\dev-stage-js\\\\pages\\\\test.js\",\n                lineNumber: 32,\n                columnNumber: 7\n            }, undefined),\n            /*#__PURE__*/ (0,react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.jsxDEV)(\"button\", {\n                onClick: handelClick,\n                children: \"sites\"\n            }, void 0, false, {\n                fileName: \"C:\\\\wamp64\\\\www\\\\dev-stage-js\\\\pages\\\\test.js\",\n                lineNumber: 33,\n                columnNumber: 7\n            }, undefined),\n            sites.length ? /*#__PURE__*/ (0,react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.jsxDEV)(react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.Fragment, {\n                children: [\n                    /*#__PURE__*/ (0,react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.jsxDEV)(\"select\", {\n                        onChange: handelChange,\n                        defaultValue: 1,\n                        name: \"siteUrl\",\n                        children: [\n                            \"$\",\n                            sites.map((elem, index)=>/*#__PURE__*/ (0,react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.jsxDEV)(\"option\", {\n                                    value: elem.siteUrl,\n                                    children: elem.siteUrl\n                                }, index, false, {\n                                    fileName: \"C:\\\\wamp64\\\\www\\\\dev-stage-js\\\\pages\\\\test.js\",\n                                    lineNumber: 38,\n                                    columnNumber: 13\n                                }, undefined))\n                        ]\n                    }, void 0, true, {\n                        fileName: \"C:\\\\wamp64\\\\www\\\\dev-stage-js\\\\pages\\\\test.js\",\n                        lineNumber: 36,\n                        columnNumber: 9\n                    }, undefined),\n                    /*#__PURE__*/ (0,react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.jsxDEV)(\"input\", {\n                        onChange: handelChange,\n                        type: \"text\",\n                        name: \"inspect\"\n                    }, void 0, false, {\n                        fileName: \"C:\\\\wamp64\\\\www\\\\dev-stage-js\\\\pages\\\\test.js\",\n                        lineNumber: 42,\n                        columnNumber: 9\n                    }, undefined),\n                    /*#__PURE__*/ (0,react_jsx_dev_runtime__WEBPACK_IMPORTED_MODULE_0__.jsxDEV)(\"button\", {\n                        onClick: handel,\n                        children: \"check\"\n                    }, void 0, false, {\n                        fileName: \"C:\\\\wamp64\\\\www\\\\dev-stage-js\\\\pages\\\\test.js\",\n                        lineNumber: 43,\n                        columnNumber: 9\n                    }, undefined)\n                ]\n            }, void 0, true) : \"\"\n        ]\n    }, void 0, true, {\n        fileName: \"C:\\\\wamp64\\\\www\\\\dev-stage-js\\\\pages\\\\test.js\",\n        lineNumber: 31,\n        columnNumber: 5\n    }, undefined);\n};\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (test);\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,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P2QwOTkiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFJlYWN0LHt1c2VTdGF0ZX0gZnJvbSAncmVhY3QnXHJcbmltcG9ydCBheGlvcyBmcm9tICdheGlvcydcclxuY29uc3QgdGVzdCA9ICgpID0+IHtcclxuICBjb25zdCBbc2l0ZXMsc2V0U2l0ZXNdPXVzZVN0YXRlKFtdKVxyXG4gIGNvbnN0IFtpbmZvLHNldGluZm9dPXVzZVN0YXRlKHtzaXRlVXJsOlwiXCIsaW5zcGVjdDpcIlwifSlcclxuICBjb25zdCBoYW5kZWxDbGljayA9IGFzeW5jKCk9PntcclxuICAgIHRyeSB7XHJcbiAgICAgIGNvbnN0IHJlcyA9IGF3YWl0IGF4aW9zLmdldChcImh0dHA6Ly9sb2NhbGhvc3Q6NTAwMC9zaXRlc1wiKSAgXHJcbiAgICAgIHNldFNpdGVzKHJlcy5kYXRhKVxyXG4gICAgICBjb25zb2xlLmxvZyhyZXMuZGF0YSk7XHJcbiAgICB9IGNhdGNoIChlcnJvcikge1xyXG4gICAgICAgIGNvbnNvbGUubG9nKGVycm9yKTtcclxuICAgIH1cclxufVxyXG4gIGNvbnN0IGhhbmRlbENoYW5nZSA9YXN5bmMgKGUpPT57XHJcbiAgICBjb25zdCB7dmFsdWUsbmFtZX0gPSBlLnRhcmdldFxyXG4gICAgc2V0aW5mbyhwcmV2PT4oey4uLnByZXYsW25hbWVdOnZhbHVlfSkpXHJcbiAgfVxyXG4gIGNvbnN0IGhhbmRlbD1hc3luYyAoKT0+e1xyXG4gICAgdHJ5IHtcclxuICAgICAgY29uc29sZS5sb2coaW5mbyk7XHJcbiAgICAgIGNvbnN0IHJlcyA9IGF3YWl0IGF4aW9zLnBvc3QoXCJodHRwOi8vbG9jYWxob3N0OjUwMDAvdXJsc1wiLGluZm8pIFxyXG4gICAgICBjb25zb2xlLmxvZyhyZXMuZGF0YSk7XHJcbiAgICB9IGNhdGNoIChlcnJvcikge1xyXG4gICAgICBjb25zb2xlLmxvZyhlcnJvcik7XHJcbiAgICB9XHJcblxyXG4gIH1cclxuICBjb25zb2xlLmxvZyhzaXRlcyk7XHJcbiAgcmV0dXJuIChcclxuICAgIDxkaXY+XHJcbiAgICAgIDxhIGhyZWY9J2h0dHA6Ly9sb2NhbGhvc3Q6NTAwMC8nPmF1dGg8L2E+XHJcbiAgICAgIDxidXR0b24gb25DbGljaz17aGFuZGVsQ2xpY2t9PnNpdGVzPC9idXR0b24+ICBcclxuICAgICAge3NpdGVzLmxlbmd0aCAgID8gKFxyXG4gICAgICAgIDw+XHJcbiAgICAgICAgPHNlbGVjdCBvbkNoYW5nZT17aGFuZGVsQ2hhbmdlfSBkZWZhdWx0VmFsdWU9ezF9IG5hbWU9XCJzaXRlVXJsXCI+XHJcbiAgICAgICAgICAke3NpdGVzLm1hcCgoZWxlbSxpbmRleCk9PihcclxuICAgICAgICAgICAgPG9wdGlvbiBrZXk9e2luZGV4fSB2YWx1ZT17ZWxlbS5zaXRlVXJsfSA+e2VsZW0uc2l0ZVVybH08L29wdGlvbj4gIFxyXG4gICAgICAgICAgICApKVxyXG4gICAgICAgICAgfVxyXG4gICAgICAgIDwvc2VsZWN0PlxyXG4gICAgICAgIDxpbnB1dCBvbkNoYW5nZT17aGFuZGVsQ2hhbmdlfSB0eXBlPXtcInRleHRcIn0gbmFtZT1cImluc3BlY3RcIiAvPlxyXG4gICAgICAgIDxidXR0b24gb25DbGljaz17aGFuZGVsfT5jaGVjazwvYnV0dG9uPlxyXG4gICAgICAgICA8Lz5cclxuICAgICAgKTogXCJcIn1cclxuICAgICBcclxuICAgIDwvZGl2PlxyXG4gIClcclxufVxyXG5cclxuZXhwb3J0IGRlZmF1bHQgdGVzdCJdLCJuYW1lcyI6WyJSZWFjdCIsInVzZVN0YXRlIiwiYXhpb3MiLCJ0ZXN0Iiwic2l0ZXMiLCJzZXRTaXRlcyIsImluZm8iLCJzZXRpbmZvIiwic2l0ZVVybCIsImluc3BlY3QiLCJoYW5kZWxDbGljayIsInJlcyIsImdldCIsImRhdGEiLCJjb25zb2xlIiwibG9nIiwiZXJyb3IiLCJoYW5kZWxDaGFuZ2UiLCJlIiwidmFsdWUiLCJuYW1lIiwidGFyZ2V0IiwicHJldiIsImhhbmRlbCIsInBvc3QiLCJkaXYiLCJhIiwiaHJlZiIsImJ1dHRvbiIsIm9uQ2xpY2siLCJsZW5ndGgiLCJzZWxlY3QiLCJvbkNoYW5nZSIsImRlZmF1bHRWYWx1ZSIsIm1hcCIsImVsZW0iLCJpbmRleCIsIm9wdGlvbiIsImlucHV0IiwidHlwZSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./pages/test.js\n");

/***/ }),

/***/ "axios":
/*!************************!*\
  !*** external "axios" ***!
  \************************/
/***/ ((module) => {

module.exports = require("axios");

/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "react" ***!
  \************************/
/***/ ((module) => {

module.exports = require("react");

/***/ }),

/***/ "react/jsx-dev-runtime":
/*!****************************************!*\
  !*** external "react/jsx-dev-runtime" ***!
  \****************************************/
/***/ ((module) => {

module.exports = require("react/jsx-dev-runtime");

/***/ })

};
;

// load runtime
var __webpack_require__ = require("../webpack-runtime.js");
__webpack_require__.C(exports);
var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
var __webpack_exports__ = (__webpack_exec__("./pages/test.js"));
module.exports = __webpack_exports__;

})();