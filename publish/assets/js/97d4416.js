window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console)arguments.callee=arguments.callee.caller,console.log(Array.prototype.slice.call(arguments))};(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();)b[a]=b[a]||c})(window.console=window.console||{});
(function(){function f(a){return a.replace(/\-[a-z]/g,function(a){return a[1].toUpperCase()})}function h(a){return a.replace(/[A-Z]/g,function(a){return"-"+a.toLowerCase()})}function k(a){var b=/\S/;a.each(function(a){for(var d=a.firstChild,g=-1,w;d;)w=d.nextSibling,d.nodeType==3&&!b.test(d.nodeValue)?a.removeChild(d):d.nodeIndex=++g,d=w})}function i(a){return a._xuiEventID?a._xuiEventID:a._xuiEventID=++i.id}function u(a,b){var c;c=n[a]=n[a]||{},a=c;return a[b]=a[b]||[]}function y(a,b,c){var d=i(a),
b=u(d,b),d=function(b){c.call(a,b)===!1&&(b.preventDefault(),b.stopPropagation())};d.guid=c.guid=c.guid||++i.id;d.handler=c;b.push(d);return d}function s(a){return(a||"").replace(z,"")}var e,j=this,t=new String("string"),l=j.document,A=/^#?([\w-]+)$/,B=/^#/,C=/<([\w:]+)/,m=function(a){return[].slice.call(a,0)};try{m(l.documentElement.childNodes)}catch(D){m=function(a){for(var b=[],c=0;a[c];c++)b.push(a[c]);return b}}j.x$=j.xui=e=function(a,b){return new e.fn.find(a,b)};if(![].forEach)Array.prototype.forEach=
function(a,b){var c=this.length||0,d=0;if(typeof a=="function")for(;d<c;d++)a.call(b,this[d],d,this)};e.fn=e.prototype={extend:function(a){for(var b in a)e.fn[b]=a[b]},find:function(a,b){var c=[];if(a)if(b==void 0&&this.length)c=this.each(function(b){c=c.concat(m(e(a,b)))}).reduce(c);else if(b=b||l,typeof a==t)A.test(a)&&b.getElementById&&b.getElementsByTagName?(c=B.test(a)?[b.getElementById(a.substr(1))]:b.getElementsByTagName(a),c[0]==null&&(c=[])):C.test(a)?(b=l.createElement("i"),b.innerHTML=
a,m(b.childNodes).forEach(function(a){c.push(a)})):c=j.Sizzle!==void 0?Sizzle(a,b):b.querySelectorAll(a),c=m(c);else if(a instanceof Array)c=a;else if(a.nodeName||a===j)c=[a];else{if(a.toString()=="[object NodeList]"||a.toString()=="[object HTMLCollection]"||typeof a.length=="number")c=m(a)}else return this;return this.set(c)},set:function(a){var b=e();b.cache=m(this.length?this:[]);b.length=0;[].push.apply(b,a);return b},reduce:function(a,b){var c=[],a=a||m(this);a.forEach(function(a){c.indexOf(a,
0,b)<0&&c.push(a)});return c},has:function(a){var b=e(a);return this.filter(function(){var a=this,d=null;b.each(function(b){d=d||b==a});return d})},filter:function(a){var b=[];return this.each(function(c,d){a.call(c,d)&&b.push(c)}).set(b)},not:function(a){var b=m(this),c=e(a);return!c.length?this:this.filter(function(a){var g;c.each(function(c){return g=b[a]!=c});return g})},each:function(a){for(var b=0,c=this.length;b<c;++b)if(a.call(this[b],this[b],b,this)===!1)break;return this}};e.fn.find.prototype=
e.fn;e.extend=e.fn.extend;e.extend({html:function(a,b){k(this);if(arguments.length==0){var c=[];this.each(function(a){c.push(a.innerHTML)});return c}arguments.length==1&&arguments[0]!="remove"&&(b=a,a="inner");if(a!="remove"&&b&&b.each!==void 0){if(a=="inner"){var d=l.createElement("p");b.each(function(a){d.appendChild(a)});this.each(function(a){a.innerHTML=d.innerHTML})}else{var g=this;b.each(function(b){g.html(a,b)})}return this}return this.each(function(c){var d,g=0;if(a=="inner")if(typeof b==
t||typeof b=="number"){c.innerHTML=b;c=c.getElementsByTagName("SCRIPT");for(d=c.length;g<d;g++)eval(c[g].text)}else c.innerHTML="",c.appendChild(b);else if(a=="remove")c.parentNode.removeChild(c);else{d=b;g=["outer","top","bottom"].indexOf(a)>-1?c:c.parentNode;typeof d==t?(g=l.createElement("div"),g.innerHTML=d):(g=l.createElement("div"),g.appendChild(d));d=g.childNodes;a=="outer"?c.parentNode.replaceChild(g,c):a=="top"?c.insertBefore(g,c.firstChild):a=="bottom"?c.insertBefore(g,null):a=="before"?
c.parentNode.insertBefore(g,c):a=="after"&&c.parentNode.insertBefore(g,c.nextSibling);for(c=g.parentNode;d.length;)c.insertBefore(d[0],g);c.removeChild(g)}})},attr:function(a,b){if(arguments.length==2)return this.each(function(c){c.tagName&&c.tagName.toLowerCase()=="input"&&a=="value"?c.value=b:c.setAttribute&&(a=="checked"&&(b==""||b==!1||typeof b=="undefined")?c.removeAttribute(a):c.setAttribute(a,b))});else{var c=[];this.each(function(b){b.tagName&&b.tagName.toLowerCase()=="input"&&a=="value"?
c.push(b.value):b.getAttribute&&b.getAttribute(a)&&c.push(b.getAttribute(a))});return c}}});"inner outer top bottom remove before after".split(" ").forEach(function(a){e.fn[a]=function(a){return function(c){return this.html(a,c)}}(a)});e.events={};var n={};e.extend({on:function(a,b,c){return this.each(function(d){if(e.events[a]){var g=i(d),g=u(g,a);c=c||{};c.handler=function(b,c){e.fn.fire.call(e(this),a,c)};g.length||e.events[a].call(d,c)}d.addEventListener(a,y(d,a,b),!1)})},un:function(a,b){return this.each(function(c){for(var d=
i(c),g=u(d,a),f=g.length;f--;)if(b===void 0||b.guid===g[f].guid){c.removeEventListener(a,g[f],!1);var o=n[d][a],e=f,q=1,q=o.slice((q||e)+1||o.length);o.length=e<0?o.length+e:e;o.push.apply(o,q)}n[d][a].length===0&&delete n[d][a];for(var r in n[d])return;delete n[d]})},fire:function(a,b){return this.each(function(c){if(c==l&&!c.dispatchEvent)c=l.documentElement;var d=l.createEvent("HTMLEvents");d.initEvent(a,!0,!0);d.data=b||{};d.eventName=a;c.dispatchEvent(d)})}});"click load submit touchstart touchmove touchend touchcancel gesturestart gesturechange gestureend orientationchange".split(" ").forEach(function(a){e.fn[a]=
function(a){return function(c){return c?this.on(a,c):this.fire(a)}}(a)});e(j).on("load",function(){"onorientationchange"in l.body||function(a,b){e(j).on("resize",function(){var c=j.innerWidth<a&&j.innerHeight>b&&j.innerWidth<j.innerHeight,d=j.innerWidth>a&&j.innerHeight<b&&j.innerWidth>j.innerHeight;if(c||d)j.orientation=c?0:90,e("body").fire("orientationchange"),a=j.innerWidth,b=j.innerHeight})}(j.innerWidth,j.innerHeight)});var v;try{v=!!l.createEvent("TouchEvent").initTouchEvent}catch(E){v=!1}e.touch=
v;e.ready=function(a){domReady(a)};i.id=1;e.extend({tween:function(a,b){var c=function(){var c={};"duration after easing".split(" ").forEach(function(b){a[b]&&(c[b]=a[b],delete a[b])});return c}(a),d=function(a){var b=[],c;if(typeof a!=t){for(c in a)b.push(h(c)+":"+a[c]);b=b.join(";")}else b=a;return b}(a);return this.each(function(a){emile(a,d,c,b)})}});var z=/^(\s|\u00A0)+|(\s|\u00A0)+$/g;e.extend({setStyle:function(a,b){a=f(a);return this.each(function(c){c.style[a]=b})},getStyle:function(a,b){if(b===
void 0){var c=[];this.each(function(b){c.push(l.defaultView.getComputedStyle(b,"").getPropertyValue(h(a)))});return c}else return this.each(function(c){b(l.defaultView.getComputedStyle(c,"").getPropertyValue(h(a)))})},addClass:function(a){var b=a.split(" ");return this.each(function(a){b.forEach(function(b){if(p(b).test(a.className)===!1)a.className=s(a.className+" "+b)})})},hasClass:function(a,b){var c=this,d=a.split(" ");return this.length&&function(){var a=!0;c.each(function(c){d.forEach(function(d){p(d).test(c.className)?
b&&b(c):a=!1})});return a}()},removeClass:function(a){if(a===void 0)this.each(function(a){a.className=""});else{var b=a.split(" ");this.each(function(a){b.forEach(function(b){a.className=s(a.className.replace(p(b),"$1"))})})}return this},toggleClass:function(a){var b=a.split(" ");return this.each(function(a){b.forEach(function(b){a.className=p(b).test(a.className)?s(a.className.replace(p(b),"$1")):s(a.className+" "+b)})})},css:function(a){for(var b in a)this.setStyle(b,a[b]);return this}});var x=
{},p=function(a){var b=x[a];b||(b=RegExp("(^|\\s+)"+a+"(?:\\s+|$)"),x[a]=b);return b};e.extend({xhr:function(a,b,c){function d(){e.readyState==4&&(delete f.xmlHttpRequest,(e.status===0||e.status==200)&&e.handleResp(),/^[45]/.test(e.status)&&e.handleError())}/^(inner|outer|top|bottom|before|after)$/.test(a)||(c=b,b=a,a="inner");var g=c?c:{};if(typeof c=="function")g={},g.callback=c;var f=this,e=new XMLHttpRequest,c=g.method||"get",h=typeof g.async!="undefined"?g.async:!0,q=g.data||null,r;e.queryString=
q;e.open(c,b,h);e.setRequestHeader("X-Requested-With","XMLHttpRequest");c.toLowerCase()=="post"&&e.setRequestHeader("Content-Type","application/x-www-form-urlencoded");for(r in g.headers)g.headers.hasOwnProperty(r)&&e.setRequestHeader(r,g.headers[r]);e.handleResp=g.callback!=null?g.callback:function(){f.html(a,e.responseText)};e.handleError=g.error&&typeof g.error=="function"?g.error:function(){};if(h)e.onreadystatechange=d,this.xmlHttpRequest=e;e.send(q);h||d();return this}});(function(a,b){function c(a,
b,c){return(a+(b-a)*c).toFixed(3)}function d(a,b,c){for(var d=2,e,g,f=[],h=[];e=3,g=arguments[d-1],d--;)if(g.substr(0,1)=="r")for(g=g.match(/\d+/g);e--;)f.push(~~g[e]);else for(g.length==4&&(g="#"+g.substr(1,1)+g.substr(1,1)+g.substr(2,1)+g.substr(2,1)+g.substr(3,1)+g.substr(3,1));e--;)f.push(parseInt(g.substr(1+e*2,2),16));for(;e--;)d=~~(f[e+3]+(f[e]-f[e+3])*c),h.push(d<0?0:d>255?255:d);return"rgb("+h.join(",")+")"}function e(a){var b=parseFloat(a),a=a.replace(/^[\-\d\.]+/,"");return isNaN(b)?{v:a,
f:d,u:""}:{v:b,f:c,u:a}}function f(a){var b={},c=i.length,d;h.innerHTML='<div style="'+a+'"></div>';for(a=h.childNodes[0].style;c--;)if(d=a[i[c]])b[i[c]]=e(d);return b}var h=l.createElement("div"),i="backgroundColor borderBottomColor borderBottomWidth borderLeftColor borderLeftWidth borderRightColor borderRightWidth borderSpacing borderTopColor borderTopWidth bottom color fontSize fontWeight height left letterSpacing lineHeight marginBottom marginLeft marginRight marginTop maxHeight maxWidth minHeight minWidth opacity outlineColor outlineOffset outlineWidth paddingBottom paddingLeft paddingRight paddingTop right textIndent top width wordSpacing zIndex".split(" ");
b[a]=function(a,b,c,d){var a=typeof a=="string"?l.getElementById(a):a,c=c||{},h=f(b),b=a.currentStyle?a.currentStyle:getComputedStyle(a,null),i,j={},k=+new Date,m=c.duration||200,o=k+m,n,p=c.easing||function(a){return-Math.cos(a*Math.PI)/2+0.5};for(i in h)j[i]=e(b[i]);n=setInterval(function(){var b=+new Date,e=b>o?1:(b-k)/m;for(i in h)a.style[i]=h[i].f(j[i].v,h[i].v,p(e))+h[i].u;b>o&&(clearInterval(n),c.after&&c.after(),d&&setTimeout(d,1))},10)}})("emile",this);(function(a,b){function c(a){for(j=
1;a=d.shift();)a()}var d=[],e,f,h=b.documentElement,i=h.doScroll,j=/^loade|c/.test(b.readyState);b.addEventListener&&b.addEventListener("DOMContentLoaded",f=function(){b.removeEventListener("DOMContentLoaded",f,!1);c()},!1);i&&b.attachEvent("onreadystatechange",e=function(){/^c/.test(b.readyState)&&(b.detachEvent("onreadystatechange",e),c())});a.domReady=i?function(b){self!=top?j?b():d.push(b):function(){try{h.doScroll("left")}catch(c){return setTimeout(function(){a.domReady(b)},50)}b()}()}:function(a){j?
a():d.push(a)}})(this,l)})();x$(document).on("DOMContentLoaded",function(){x$("#contact_me").each(function(f){x$(f).on("click",function(){x$("#contact_me_container").addClass("active")})});x$("#bg_module").each(function(f){var h=document.body.offsetHeight+"px";x$(f).setStyle("height",h);x$(f).on("click",function(){x$("#contact_me_container").removeClass("active")})})});
x$(document).on("DOMContentLoaded",function(){x$(".box").each(function(f){x$(f).on("mouseover",function(){x$(f).addClass("over")});x$(f).on("mouseout",function(){x$(this).removeClass("over")})})});
x$(document).on("DOMContentLoaded",function(){x$("body.home_page").each(function(){x$(".box").each(function(f){x$(f).find(".lateload").each(function(f){x$(f).addClass("pic")})})});x$(".project_wrapper").each(function(){x$(".img").each(function(f){x$(f).find(".lateload").each(function(f){x$(f).addClass("pic")})})});x$(".cat_wrapper").each(function(){x$(".row").each(function(f){x$(f).find(".lateload").each(function(f){x$(f).addClass("pic")})})});x$("#nav ul").find("li").each(function(f){var h=x$("#wrapper_class")[0].innerHTML,
f=x$(f).attr("class");h==f&&x$(this).find("a").addClass("active")});x$("#subnav ul").find("li").each(function(f){var h=x$("#p_wrapper_class")[0].innerHTML,f=x$(f).attr("class");h==f&&x$(this).find("a").addClass("active")})});function createCookie(f,h,k){if(k){var i=new Date;i.setTime(i.getTime()+k*864E5);k="; expires="+i.toGMTString()}else k="";document.cookie=f+"="+h+k+"; path=/"}
function readCookie(f){f+="=";for(var h=document.cookie.split(";"),k=0;k<h.length;k++){for(var i=h[k];i.charAt(0)==" ";)i=i.substring(1,i.length);if(i.indexOf(f)==0)return i.substring(f.length,i.length)}return null}function eraseCookie(f){createCookie(f,"",-1)}
x$(document).on("DOMContentLoaded",function(){var f=navigator.userAgent.toLowerCase(),h=f.indexOf("iphone")!=-1,k=f.indexOf("ipad")!=-1,f=f.indexOf("android")!=-1;h|k|f&&(x$("body.home_page").each(function(){x$(".box").each(function(f){x$(f).addClass("touch")})}),x$(window).on("load",function(){setTimeout(function(){window.pageYOffset<50&&window.scrollTo(0,1)},0)}))});function not_available(){alert("Sorry, this project is not available at the moment.")};
