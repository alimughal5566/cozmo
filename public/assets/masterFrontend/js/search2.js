!function(e,t,i){"use strict";var r=e.SE||{};r.ui=r.ui||{},r.ui.collapsible=function(){function e(e){e&&(c=e.collapsibleTrigger||c),l=t.querySelectorAll(c),a()}function i(){this.classList.contains("isActive")?s(this):r(this)}function r(e){e.classList.add("isActive"),e.nextElementSibling.classList.add("isExpanded"),setTimeout(function(){e.closest(".jsCollapsible").scrollTo({left:0,top:e.offsetTop})},100)}function s(e){e.classList.remove("isActive"),e.nextElementSibling.classList.remove("isExpanded")}function a(){l.length>0&&l.forEach(function(e){e.addEventListener("click",i)})}var l,c=".jsCollapsibleTrigger",n=".jsCollapsible";return{initialize:e,expandElement:r,collapseElement:s,element:function(){return t.querySelector(n)}}}(),r.ui.Pill=function(e){return this.element=t.createElement("span"),this.element.classList="AreaSearchPill jsSearchAreaPill",this.element.innerText=e,this.element.setAttribute("data-area-name",e),this.element},r.ui.searchAreaDropdown=function(){function s(){Z=t.querySelector(".jsSearchAreaDropdown"),$=t.querySelector(".jsSearchAreaInput"),le=Z.querySelectorAll(".jsSearchAreaCheckbox"),ee=Z.querySelector(".jsSearchAreaSelectedAreas"),se=t.querySelector(".jsSearchAreaDropdownSearchButton"),ae=se.querySelector(".jsSearchAreaDropdownSearchButtonText"),te=Z.querySelector(".jsCollapsible"),ie=Z.querySelectorAll(".jsSearchAreaItem"),re=te.querySelector(".jsSearchAllItem"),r.ui.collapsible.initialize(),G(),J(),R()}function a(){var e=ee.offsetHeight,t=$.offsetHeight;$.offsetTop>e-t?$.classList.add("isHiddenCursor"):$.classList.remove("isHiddenCursor")}function l(){Z.querySelectorAll(".isHighlighted").forEach(function(e){e.classList.remove("isHighlighted")})}function c(){ce||(Z.classList.add("isActive"),ce=!0,l(),re.classList.add("isHighlighted"))}function n(){ee.scrollTop=0,Z.classList.remove("isActive"),ce=!1,b()}function o(){1===ee.children.length&&(ee.classList.remove("isFilled"),$.setAttribute("placeholder","Neighborhood, Address, Building, Keyword")),ee.children.length>1&&(ee.classList.add("isFilled"),$.setAttribute("placeholder",""))}function u(){$.value=""}function d(){e.gon&&e.gon.ua_is_mobile&&n()}function h(e){ee.insertBefore(e,ee.lastElementChild)}function f(e){ee.removeChild(e),o()}function g(e,t){return function(){f(e),t.checked=!1}}function S(){var e=ee.querySelector(".jsSearchAreaPill");Z.querySelector(".jsCheckAll").checked=!1,e&&f(e)}function A(){le.forEach(function(e){if(!e.classList.contains("jsCheckAll")){var t=ee.querySelector('[data-area="'+e.getAttribute("data-area")+'"]');e.checked=!1,t&&f(t)}})}function v(e){var i="input[data-area='"+e+"']",r=t.querySelector(i);r.checked||r.click()}function p(e){var t=e.getAttribute("data-always-checked-with")||e.getAttribute("data-area-non-sale-checked-with");t&&v(t)}function m(e){var t=new r.ui.Pill(e.getAttribute("data-area-name"));ee.querySelector('[data-area="'+e.getAttribute("data-area")+'"]');(!e.classList.contains("jsCheckAll")&&Z.querySelector(".jsCheckAll").checked&&S(),e.classList.contains("jsCheckAll")&&A(),e.checked)?(N(e,!1),Q(e),t.setAttribute("data-area",e.getAttribute("data-area")),t.onclick=g(t,e),u(),h(t),ee.scrollTop=ee.scrollHeight,p(e)):f(ee.querySelector('[data-area="'+e.getAttribute("data-area")+'"]'));o(),d()}function b(){Z.querySelectorAll(".jsSearchAreaItem.u-hidden").forEach(function(e){e.classList.remove("u-hidden")}),Z.querySelectorAll(".jsCollapsibleTrigger.isActive").forEach(function(e){r.ui.collapsible.collapseElement(e),e.classList.remove("isActive")})}function j(e){m(e.target)}function L(e){var t=e.target.value.toLowerCase().trim();c(),t.length>0?(Z.querySelectorAll(".jsCollapsibleTrigger").forEach(function(e){r.ui.collapsible.expandElement(e),e.classList.add("u-hidden")}),le.forEach(function(e){e.getAttribute("data-area-name").toLowerCase().indexOf(t)<0?e.closest(".jsSearchAreaItem").classList.add("u-hidden"):e.closest(".jsSearchAreaItem").classList.remove("u-hidden")})):b(),U()?V():W(),X(e.target.value.trim())}function y(e){var t=te.offsetHeight,i=te.scrollTop,r=i+t,s=e.offsetTop,a=s+e.offsetHeight;s<i+e.offsetHeight?te.scrollTo({left:0,top:s-e.offsetHeight}):a>r&&te.scrollTo({left:0,top:a-t>0?a-t:0})}function E(e){e.classList.add("isHighlighted"),y(e)}function q(e){var t=e.closest(".isExpanded").querySelectorAll(".jsCollapsibleChild");return e==t[t.length-1].querySelector(".jsSearchAreaItem")}function C(e){return e===e.closest(".isExpanded").querySelector(".jsSearchAreaItem")}function k(e,t){var i=e.nextElementSibling;return i.classList.contains(t)?i:null}function T(e,t){var i=e.previousElementSibling;return i.classList.contains(t)?i:null}function H(e,t){if("down"===t)var i=k(e.closest(".jsTrigger"),"jsTrigger").querySelector(".jsSearchAreaItem");else if("up"===t)i=T(e.closest(".jsTrigger"),"jsTrigger").querySelector(".jsSearchAreaItem");E(i)}function w(e){E(e.closest(".jsTrigger").querySelector(".jsCollapsibleChild .jsSearchAreaItem"))}function x(e,t){if("down"===t)var i=k(e.closest(".jsCollapsibleChild"),"jsCollapsibleChild").querySelector(".jsSearchAreaItem");else if("up"===t)i=T(e.closest(".jsCollapsibleChild"),"jsCollapsibleChild").querySelector(".jsSearchAreaItem");E(i)}function I(e){var t=T(e.closest(".jsTrigger"),"jsTrigger").querySelectorAll(".jsSearchAreaItem");E(t[t.length-1])}function D(e){E(e.closest(".jsTrigger").querySelector(".jsSearchAreaItem"))}function P(e){var t=T(e.closest(".jsTrigger"),"jsTrigger").querySelector(".jsCollapsibleTrigger");if(t)return t.classList.contains("isActive")}function B(e){var t=e.closest(".isExpanded"),i=Z.querySelectorAll(".jsCollapsibleTrigger");if(e===i[i.length-1]&&!e.classList.contains("isActive")||e===ie[ie.length-1])return!1;t?q(e)?H(e,"down"):x(e,"down"):e.classList.contains("isActive")?w(e):H(e,"down");e.classList.remove("isHighlighted")}function z(e){var t=e.closest(".isExpanded");if(e===Z.querySelectorAll(".jsTrigger")[0].querySelector(".jsSearchAreaItem"))return!1;t?C(e)?D(e):x(e,"up"):P(e)?I(e):H(e,"up"),e.classList.remove("isHighlighted")}function F(e){var t=e.querySelector(".jsSearchAreaCheckbox");e.classList.contains("isActive")?(e.classList.remove("isActive"),e.nextElementSibling.classList.remove("isExpanded")):e.classList.contains("jsCollapsibleTrigger")?(e.classList.add("isActive"),e.nextElementSibling.classList.add("isExpanded")):(!0===t.checked?t.checked=!1:t.checked=!0,m(t))}function O(){var e=ee.lastElementChild.previousElementSibling;if(!(ee.lastElementChild.value.length>0)&&e){var t=te.querySelector('[data-area="'+e.getAttribute("data-area")+'"]');f(e),t.checked=!1}}function _(e){var t=te.querySelector(".isHighlighted");switch(e.keyCode){case 40:B(t);break;case 38:z(t);break;case 13:e.preventDefault(),F(t);break;case 8:O()}}function K(){$.classList.contains("isHiddenCursor")&&$.classList.remove("isHiddenCursor"),$.focus()}function M(e){Z.contains(e.target)||e.target.classList.contains("jsSearchAreaPill")||n()}function N(e,i){var r=e.dataset.parentId,s=ee.querySelector('[data-area="'+e.getAttribute("data-area")+'"]');(i&&(e.checked=!1),r)&&N(t.getElementById("area-"+r),!0);s&&f(s)}function Q(e){var i=e.dataset.childrenIds;i&&i.split(",").forEach(function(e){var i=t.getElementById("area-"+e),r=ee.querySelector('[data-area="'+i.getAttribute("data-area")+'"]');r&&f(r),i&&(i.checked=!1,Q(i))})}function G(){$.addEventListener("focus",c),$.addEventListener("input",L),Z.addEventListener("keydown",_),ee.addEventListener("click",K),t.addEventListener("click",M),ee.addEventListener("scroll",a),le.forEach(function(e){i(e).on("change",j)}),ie.forEach(function(e){e.addEventListener("mouseenter",function(e){te.querySelector(".isHighlighted")&&te.querySelector(".isHighlighted").classList.remove("isHighlighted"),e.target.classList.add("isHighlighted")})}),se.addEventListener("click",Y)}function J(){var e=i.cookie("se:search:shared:state"),t=e?e.split("|")[0]:[];t.length>0&&t.split(",").forEach(function(e){Z.querySelector("input[data-area='"+e+"']").checked=!0})}function R(){le.forEach(function(e){if(e.checked){var t=new r.ui.Pill(e.getAttribute("data-area-name"));t.setAttribute("data-area",e.getAttribute("data-area")),t.onclick=function(){e.click()},h(t),$.setAttribute("placeholder","")}})}function U(){return 0===r.ui.collapsible.element().offsetHeight}function V(){se.classList.remove("u-hidden")}function W(){se.classList.add("u-hidden")}function X(e){ae.innerText='"'+e+'..."'}function Y(e){e.target.disabled=!0;var i=t.createElement("form"),r=t.createElement("input");r.style.display="none",r.type="text",r.name="search",r.value=$.value,i.setAttribute("action","/search"),i.setAttribute("method","get"),i.appendChild(r),t.body.appendChild(i),i.submit()}var Z,$,ee,te,ie,re,se,ae,le=[],ce=!1;return{initialize:s,open:open,close:close}}(),e.addEventListener("DOMContentLoaded",function(){r.ui.searchAreaDropdown.initialize()})}(window,document,jQuery);