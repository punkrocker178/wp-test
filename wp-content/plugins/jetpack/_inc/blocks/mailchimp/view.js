!function(e,t){for(var r in t)e[r]=t[r]}(window,function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}return r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=264)}({15:function(e,t,r){var n=r(3);function o(e,t){var r=Object.keys(e);return Object.getOwnPropertySymbols&&r.push.apply(r,Object.getOwnPropertySymbols(e)),t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r}e.exports=function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?o(r,!0).forEach((function(t){n(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):o(r).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}},264:function(e,t,r){r(51),e.exports=r(265)},265:function(e,t,r){"use strict";r.r(t);var n=r(3),o=r.n(n),i=r(15),s=r.n(i),c=r(74),u=r.n(c),a=r(42),l=r.n(a),f=(r(266),"wp-block-jetpack-mailchimp");function p(e,t){var r=e.querySelector("form"),n=e.querySelector("."+f+"_processing"),i=e.querySelector("."+f+"_error"),c=e.querySelector("."+f+"_success");r.addEventListener("submit",(function(u){u.preventDefault();var a=r.querySelector("input[name=email]"),f=[].slice.call(r.querySelectorAll("input[type=hidden].mc-submit-param")).reduce((function(e,t){return s()({},e,o()({},t.name,t.value))}),{});a.classList.remove("error");var p=a.value;l.a.validate(p)?(e.classList.add("is-processing"),n.classList.add("is-visible"),function(e,t,r){var n="https://public-api.wordpress.com/rest/v1.1/sites/"+encodeURIComponent(e)+"/email_follow/subscribe?email="+encodeURIComponent(t);for(var o in r)n+="&"+encodeURIComponent(o)+"="+encodeURIComponent(r[o]);return new Promise((function(e,t){var r=new XMLHttpRequest;r.open("GET",n),r.onload=function(){if(200===r.status){var n=JSON.parse(r.responseText);e(n)}else{var o=JSON.parse(r.responseText);t(o)}},r.send()}))}(t,p,f).then((function(e){n.classList.remove("is-visible"),e.error&&"member_exists"!==e.error?i.classList.add("is-visible"):c.classList.add("is-visible")}),(function(){n.classList.remove("is-visible"),i.classList.add("is-visible")}))):a.classList.add("error")}))}"undefined"!=typeof window&&u()((function(){Array.from(document.querySelectorAll("."+f)).forEach((function(e){var t=e.getAttribute("data-blog-id");try{p(e,t)}catch(r){0}}))}))},266:function(e,t,r){},3:function(e,t){e.exports=function(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}},41:function(e,t,r){"object"==typeof window&&window.Jetpack_Block_Assets_Base_Url&&(r.p=window.Jetpack_Block_Assets_Base_Url)},42:function(e,t,r){"use strict";var n=/^[-!#$%&'*+\/0-9=?A-Z^_a-z{|}~](\.?[-!#$%&'*+\/0-9=?A-Z^_a-z`{|}~])*@[a-zA-Z0-9](-*\.?[a-zA-Z0-9])*\.[a-zA-Z](-?[a-zA-Z0-9])+$/;t.validate=function(e){if(!e)return!1;if(e.length>254)return!1;if(!n.test(e))return!1;var t=e.split("@");return!(t[0].length>64)&&!t[1].split(".").some((function(e){return e.length>63}))}},51:function(e,t,r){"use strict";r.r(t);r(41)},74:function(e,t){!function(){e.exports=this.wp.domReady}()}}));