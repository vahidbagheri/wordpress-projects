(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["getPdf"],{af3a:function(t,e,n){"use strict";n.r(e);var o=n("b0af"),r=n("99d9"),c=function(){var t=this,e=t._self._c;t._self._setupProxy;return e(o["a"],{staticClass:"pa-4 mb-2",staticStyle:{"border-radius":"15px","margin-top":"110px"},attrs:{flat:""}},[e(r["b"],{staticClass:"mt-n2 text-center"},[-1==t.loading?e("h2",{staticClass:"d-flex justify-center align-center"},[e("i",{staticClass:"icon-download grey--text px-3"}),t._v(t._s(t.$t("downloadingPdf"))+" ")]):t._e(),0==t.loading?e("h2",{staticClass:"d-flex justify-center align-center"},[e("i",{staticClass:"icon-info-circle error--text px-3"}),t._v(t._s(t.$t("thereIsAnError"))+" ")]):t._e(),1==t.loading?e("h2",{staticClass:"d-flex justify-center align-center"},[e("i",{staticClass:"icon-tick-circle green--text px-3"}),t._v(t._s(t.$t("pdfDownloaded"))+" ")]):t._e()])],1)},a=[],i=n("60a3"),s=n("81f6"),l=function(){var t=function(e,n){return t=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n])},t(e,n)};return function(e,n){if("function"!==typeof n&&null!==n)throw new TypeError("Class extends value "+String(n)+" is not a constructor or null");function o(){this.constructor=e}t(e,n),e.prototype=null===n?Object.create(n):(o.prototype=n.prototype,new o)}}(),u=function(t,e,n,o){var r,c=arguments.length,a=c<3?e:null===o?o=Object.getOwnPropertyDescriptor(e,n):o;if("object"===typeof Reflect&&"function"===typeof Reflect.decorate)a=Reflect.decorate(t,e,n,o);else for(var i=t.length-1;i>=0;i--)(r=t[i])&&(a=(c<3?r(a):c>3?r(e,n,a):r(e,n))||a);return c>3&&a&&Object.defineProperty(e,n,a),a},p=function(t){function e(){var e=null!==t&&t.apply(this,arguments)||this;return e.loading=-1,e}return l(e,t),e.prototype.mounted=function(){s["a"].$on("tokenRecieved",this.handler)},e.prototype.handler=function(t){var e=this,n="".concat(this.$store.state.baseUrl,"report/getpdf?id=").concat(this.$route.query.id,"&serviceid=").concat(this.$route.query.serviceid);this.$route.query.lang&&(n+="&lang=".concat(this.$route.query.lang)),console.log(t),this.axios(n,{headers:{"Content-Type":"application/pdf"},responseType:"arraybuffer"}).then((function(t){var n={year:"numeric",month:"numeric",day:"numeric",hour:"numeric",minute:"numeric",second:"numeric"},o=(new Date).toLocaleDateString("en-GB",n),r=new Blob([t.data],{type:"application/pdf"}),c=document.createElement("a");c.href=window.URL.createObjectURL(r),c.download="ticket_".concat(o,".pdf"),document.body.appendChild(c),c.click(),e.loading=1})).catch((function(t){e.loading=0}))},e=u([Object(i["a"])({})],e),e}(i["d"]),f=p,d=f,y=n("2877"),h=Object(y["a"])(d,c,a,!1,null,null,null);e["default"]=h.exports}}]);