(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["cipFlights"],{"33e5":function(t,e,a){"use strict";a("f972")},f459:function(t,e,a){"use strict";a.r(e);var s=a("c6a6"),i=a("8336"),n=a("a609"),r=a("b0af"),o=a("99d9"),l=a("cc20"),c=a("62ad"),u=a("a523"),p=a("8fea"),h=a("132d"),f=a("adda"),d=a("8860"),g=a("da13"),m=a("1800"),b=a("5d23"),y=a("0fd9"),v=a("b974"),C=function(){var t=this,e=t._self._c;t._self._setupProxy;return e(u["a"],{staticClass:"mt-12"},[t.newContracts.length?e(r["a"],{staticClass:"px-6 pt-6 pb-2 theme-card dir-ltr moreRadius button shadowAndRadius new-contracts-notifs",attrs:{width:"400",flat:""}},[e("div",{staticClass:"d-flex align-center justify-space-between"},[e("div",[e(o["d"],{staticClass:"white-space-nowrap px-0 pt-0 pb-2"},[e("div",{staticClass:"unseenMassagesChip pa-1 mr-4 rounded white--text d-flex align-center justify-center font-size-16",staticStyle:{width:"30px",height:"30px","box-shadow":"0px 15px 30px rgba(239, 35, 60, 0.5)"}},[t._v(" "+t._s(t.newContracts.length)+" ")]),t._v(" New Contracts "),e(l["a"],{staticClass:"mx-2 py-1",attrs:{small:""}},[t._v("Arrival")])],1),e(o["b"],{staticClass:"white-space-nowrap grey--text px-0 mt-0"},[t._v("Please check and update list")])],1),e(o["c"],{staticClass:"w-fit-content pa-0 mb-8"},[e(h["a"],{staticClass:"icon-remove icon-18 theme-element-bg pa-1 rounded",on:{click:t.getData}})],1)],1),e("div",{staticClass:"custom-scroll",staticStyle:{"max-height":"200px","overflow-y":"auto","overflow-x":"hidden"}},t._l(t.newContracts,(function(a,s){return e(y["a"],{key:"newContracts"+s,on:{click:function(e){return t.openManifest(a)}}},[e(c["a"],{staticClass:"pb-0 text-start",attrs:{cols:"6"}},[t._v("Airline:"),e("span",{staticClass:"mx-1 font-weight-500"},[t._v(t._s(a.airline))])]),e(c["a"],{staticClass:"pb-0 text-end",attrs:{cols:"6"}},[e("i",{staticClass:"icon-export-3 icon-16 px-1"})]),e(c["a"],{staticClass:"pt-0 text-start",attrs:{cols:"6"}},[t._v("Flight Number:"),e("span",{staticClass:"mx-1 font-weight-500"},[t._v(t._s(a.flightNumber))])]),e(c["a"],{staticClass:"pt-0 text-end",attrs:{cols:"6"}},[t._v("Flight Time:"),e("span",{staticClass:"mx-1 font-weight-500"},[t._v(t._s(a.flightDateTime.split(" ")[1]))])])],1)})),1),e(o["a"],{staticClass:"justify-end w-100 pt-2"},[e(i["a"],{staticClass:"moreRadius button",attrs:{"x-large":"",color:"blue",dark:"",width:"120",height:"48",depressed:""},on:{click:t.getData}},[t._v(" Update List ")])],1)],1):t._e(),e(r["a"],{staticClass:"pa-4 mb-3 moreRadius button",attrs:{flat:"",tile:""}},[e(o["d"],{staticClass:"black--text"},[t._v(" گزارش پروازهای CIP")]),e(y["a"],{staticClass:"mx-0"},[e(c["a"],{staticClass:"position-relative pb-0 px-2 d-flex",attrs:{cols:"4"}},[e("date-picker",{staticClass:"mr-2",attrs:{locale:t.$locale,label:t.$t("fromDate"),startLabel:t.$t("fromDate"),dense:"",type:"datetime","locale-config":{fa:{inputFormat:"jYYYY/jMM/jDD HH:mm"},en:{inputFormat:"YYYY/MM/DD HH:mm"}},mode:"single",modal:""},on:{focus:function(e){t.shift=null}},model:{value:t.startDate,callback:function(e){t.startDate=e},expression:"startDate"}}),e("date-picker",{staticClass:"mr-2",attrs:{locale:t.$locale,label:t.$t("toDate"),startLabel:t.$t("toDate"),dense:"",type:"datetime","locale-config":{fa:{inputFormat:"jYYYY/jMM/jDD HH:mm"},en:{inputFormat:"YYYY/MM/DD HH:mm"}},mode:"single",modal:""},on:{focus:function(e){t.shift=null}},model:{value:t.endDate,callback:function(e){t.endDate=e},expression:"endDate"}})],1),e(c["a"],{staticClass:"position-relative pb-0"},[e(s["a"],{staticClass:"cip-flight__airline moreRadius input",attrs:{dense:"",clearable:"","clear-icon":"icon-remove icon-18",outlined:"",label:t.$t("airlines"),"hide-no-data":"","hide-details":"auto",items:t.airlines,"item-text":"searchAirlines","cache-items":!1,"item-value":"iata","menu-props":{"offset-y":!0,closeOnClick:!0,minWidth:"100%",contentClass:"moreRadius button custom-scroll horizontal-center"},"return-object":"","append-icon":"icon-chevron-down icon-18",attach:".cip-flight__airline","search-input":t.searchAirlines},on:{click:function(e){t.AirlineIata=""},"update:searchInput":function(e){t.searchAirlines=e},"update:search-input":function(e){t.searchAirlines=e}},scopedSlots:t._u([{key:"item",fn:function(a){return[e(d["a"],{staticClass:"pa-0",attrs:{width:"100%"}},[e(g["a"],{staticClass:"pa-0"},[a.item.iata?e(m["a"],{staticClass:"ma-0"},[e(l["a"],{staticClass:"white--text",attrs:{label:"",small:"",color:"#d50c6a"}},[t._v(t._s(a.item.iata))])],1):t._e(),e(b["a"],{},[e(b["c"],{staticClass:"mb-0"},[t._v(t._s(a.item.name))])],1)],1)],1)]}},{key:"selection",fn:function(a){return[e("span",{staticClass:"caption"},[t._v(t._s(a.item.name))]),a.item.iata?e("span",{},[e(l["a"],{staticClass:"caption white--text",attrs:{label:"",small:"",color:"#d50c6a"}},[t._v(t._s(a.item.iata))])],1):t._e()]}}],null,!0),model:{value:t.AirlineIata,callback:function(e){t.AirlineIata=e},expression:"AirlineIata"}})],1),e(c["a"],{staticClass:"position-relative pb-0 px-2"},[e("number-field",{attrs:{label:t.$t("flightNumber"),height:40,dense:"",noDot:!0},on:{"keypress-enter-event":t.getData},model:{value:t.FlightNumber,callback:function(e){t.FlightNumber=e},expression:"FlightNumber"}})],1),e(c["a"],{staticClass:"position-relative pb-0 px-2"},[e(v["a"],{staticClass:"moreRadius input flightType font-size-13",attrs:{outlined:"",dense:"","append-icon":"icon-chevron-down icon-18",attach:".flightType",label:t.$t("flightType"),"hide-details":"","item-value":"value","item-text":"text",clearable:"","clear-icon":"icon-remove icon-18","menu-props":{"offset-y":!0,closeOnClick:!0,minWidth:"100%",contentClass:"moreRadius button custom-scroll horizontal-center"},items:[{value:"inbound",text:t.$t("inbound")},{value:"outbound",text:t.$t("outbound")}]},model:{value:t.FlightType,callback:function(e){t.FlightType=e},expression:"FlightType"}})],1)],1),e(y["a"],{staticClass:"mx-0",attrs:{justify:"start"}},[e(c["a"],{staticClass:"position-relative pb-0 px-2",attrs:{cols:"4"}},[e(n["a"],{staticClass:"row mx-0",staticStyle:{"border-left":"1px solid #f2f2f2"},attrs:{color:"buttons",group:""},on:{change:t.changeShift},model:{value:t.shift,callback:function(e){t.shift=e},expression:"shift"}},[e(i["a"],{staticClass:"my-0 moreRadius button col",attrs:{value:0,dense:"",height:"42"}},[t._v(" شیفت قبلی ")]),e(i["a"],{staticClass:"my-0 moreRadius button col",attrs:{value:1,dense:"",height:"42"}},[t._v(" شیفت فعلی ")]),e(i["a"],{staticClass:"my-0 moreRadius button col",attrs:{value:2,dense:"",height:"42"}},[t._v(" شیفت بعدی ")])],1)],1),e(c["a"],{staticClass:"position-relative pb-0 px-2",attrs:{cols:"4"}},[e(n["a"],{staticClass:"row mx-0",attrs:{color:"buttons",group:""},on:{change:t.changeDay},model:{value:t.day,callback:function(e){t.day=e},expression:"day"}},[e(i["a"],{staticClass:"my-0 moreRadius button col",attrs:{value:0,dense:"",height:"42"}},[t._v(" روز قبل ")]),e(i["a"],{staticClass:"my-0 moreRadius button col",attrs:{value:1,dense:"",height:"42"}},[t._v(" روز فعلی ")]),e(i["a"],{staticClass:"my-0 moreRadius button col",attrs:{value:2,dense:"",height:"42"}},[t._v(" روز بعد ")])],1)],1),e(c["a"],{staticClass:"position-relative py-0 px-2 d-flex justify-end mr-auto",attrs:{cols:"3"}},[e(i["a"],{staticClass:"moreRadius button",attrs:{color:"buttons",dark:"","x-large":"",width:"180",height:"44",depressed:""},on:{click:t.getData}},[t._v(" "+t._s(t.$t("search")))])],1)],1)],1),e(p["a"],{staticClass:"ruleTable mb-8",staticStyle:{"border-radius":"20px"},attrs:{headers:t.headers,items:t.items,"item-key":"id","items-per-page":-1,loading:t.dataLoading,"hide-default-footer":"","loading-text":t.$t("pleaseWait"),"no-data-text":t.$t("noDataFound"),flat:""},on:{"click:row":t.openManifest},scopedSlots:t._u([t.items.length?{key:"body.append",fn:function(){return[e("tr",{staticClass:"no-colors"},[e("td",{staticClass:"text-center"},[t._v("تعداد کل")]),e("td",{attrs:{colspan:"5"}}),e("td",{staticClass:"text-center"},[e("div",{staticClass:"d-flex justify-center align-center px-2 py-1"},[e("span",{staticClass:"mx-2"},[t._v(" "+t._s(t.total.cip)+" / "+t._s(t.total.shownCIP))])])]),e("td",{staticClass:"text-center"},[e("div",{staticClass:"d-flex justify-center align-center px-2 py-1"},[e("span",{staticClass:"mx-2"},[t._v(" "+t._s(t.total.bc)+" / "+t._s(t.total.shownBC))])])]),e("td",{staticClass:"text-center"},[e("div",{staticClass:"d-flex justify-center align-center px-2 py-1"},[e("span",{staticClass:"mx-2"},[t._v(" "+t._s(t.total.pass)+" / "+t._s(t.total.shownPass))])])])])]},proxy:!0}:null,{key:"item.row",fn:function({index:e}){return[t._v(" "+t._s(t._f("simplePersian")(e+1,t.$i18n.locale))+" ")]}},{key:"item.tripType",fn:function({item:e}){return[t._v(" "+t._s(t._f("cipTripType")(e.tripType))+"/"+t._s(t._f("cipFlightType")(e.flightType))+" ")]}},{key:"item.flightNumber",fn:function({item:e}){return[t._v(" "+t._s(`${e.airline} ${e.flightNumber.substring(0,2).toUpperCase()==e.airline.toUpperCase()?e.flightNumber.substring(2):e.flightNumber}`)+" ")]}},{key:"item.PassengerTypeCode",fn:function({item:e}){return[t._v(" "+t._s(t._f("human")(e.PassengerTypeCode))+" ")]}},{key:"item.Time",fn:function({item:e}){return[t._v(" "+t._s(e.flightDateTime.substring(11,16))+" ")]}},{key:"item.Date",fn:function({item:a}){return[e("div",[t._v(t._s(a.flightDateTime.substring(0,10)))]),a.flightDateTime?e("div",[t._v(" "+t._s(t._f("simplePersian")(t._f("persianDateTime")(a.flightDateTime.substring(0,10)),t.$i18n.locale))+" ")]):t._e()]}},{key:"item.status",fn:function({item:a}){return[a.status&&1==a.status?e(l["a"],{staticClass:"green--text green-bg caption w-fit-content pa-1 rounded",attrs:{label:"",small:""}},[e("i",{staticClass:"icon-show icon-16 pl-1"}),t._v("Show ")]):a.status&&2==a.status?e(l["a"],{staticClass:"red--text caption w-fit-content px-1 rounded",attrs:{label:"",small:"",color:"#FEE9EC"}},[e("i",{staticClass:"icon-hide icon-16 pl-1"}),t._v("No Show ")]):e("span",[t._v("--")])]}},{key:"item.passengerCount",fn:function({item:e}){return[t._v(" "+t._s(e.passengerCount)+" / "+t._s(e.ShowPassenger)+" ")]}},{key:"item.bcCount",fn:function({item:e}){return[t._v(" "+t._s(e.Business)+" / "+t._s(e.BusinessShowPassenger)+" ")]}},{key:"item.cipCount",fn:function({item:e}){return[t._v(" "+t._s(e.passengerCount-e.Business)+" / "+t._s(e.ShowPassenger-e.BusinessShowPassenger)+" ")]}},{key:"item.airline",fn:function({item:a}){return[e("span",{staticClass:"d-flex align-center"},[e(f["a"],{staticClass:"airline-logo",attrs:{src:t.imgUrl(a.airline,t.$i18n.locale),"max-width":"100"}}),e("span",{staticClass:"mx-2"},[t._v(t._s(a.airline))])],1)]}},{key:"item.print",fn:function({item:a}){return[e(i["a"],{staticClass:"rounded-lg",attrs:{depressed:"",text:"",disabled:!("inbound"==a.flightType||"outbound"==a.flightType&&a.BusinessShowPassenger)},on:{click:function(e){return e.stopPropagation(),t.getPassengers(a)}}},["inbound"==a.flightType?e("span",{staticClass:"caption"},[t._v(" چاپ برد ")]):e("span",{staticClass:"caption"},[t._v("رسید ایرلاین")])])]}}],null,!0)})],1)},D=[],w=a("60a3"),x=a("3817"),_=a("5df0"),S=a("c514"),k=a("5c1f"),T=function(){var t=function(e,a){return t=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var a in e)Object.prototype.hasOwnProperty.call(e,a)&&(t[a]=e[a])},t(e,a)};return function(e,a){if("function"!==typeof a&&null!==a)throw new TypeError("Class extends value "+String(a)+" is not a constructor or null");function s(){this.constructor=e}t(e,a),e.prototype=null===a?Object.create(a):(s.prototype=a.prototype,new s)}}(),$=function(t,e,a,s){var i,n=arguments.length,r=n<3?e:null===s?s=Object.getOwnPropertyDescriptor(e,a):s;if("object"===typeof Reflect&&"function"===typeof Reflect.decorate)r=Reflect.decorate(t,e,a,s);else for(var o=t.length-1;o>=0;o--)(i=t[o])&&(r=(n<3?i(r):n>3?i(e,a,r):i(e,a))||r);return n>3&&r&&Object.defineProperty(e,a,r),r},P=function(t,e,a,s){function i(t){return t instanceof a?t:new a((function(e){e(t)}))}return new(a||(a=Promise))((function(a,n){function r(t){try{l(s.next(t))}catch(e){n(e)}}function o(t){try{l(s["throw"](t))}catch(e){n(e)}}function l(t){t.done?a(t.value):i(t.value).then(r,o)}l((s=s.apply(t,e||[])).next())}))},N=function(t,e){var a,s,i,n,r={label:0,sent:function(){if(1&i[0])throw i[1];return i[1]},trys:[],ops:[]};return n={next:o(0),throw:o(1),return:o(2)},"function"===typeof Symbol&&(n[Symbol.iterator]=function(){return this}),n;function o(t){return function(e){return l([t,e])}}function l(n){if(a)throw new TypeError("Generator is already executing.");while(r)try{if(a=1,s&&(i=2&n[0]?s["return"]:n[0]?s["throw"]||((i=s["return"])&&i.call(s),0):s.next)&&!(i=i.call(s,n[1])).done)return i;switch(s=0,i&&(n=[2&n[0],i.value]),n[0]){case 0:case 1:i=n;break;case 4:return r.label++,{value:n[1],done:!1};case 5:r.label++,s=n[1],n=[0];continue;case 7:n=r.ops.pop(),r.trys.pop();continue;default:if(i=r.trys,!(i=i.length>0&&i[i.length-1])&&(6===n[0]||2===n[0])){r=0;continue}if(3===n[0]&&(!i||n[1]>i[0]&&n[1]<i[3])){r.label=n[1];break}if(6===n[0]&&r.label<i[1]){r.label=i[1],i=n;break}if(i&&r.label<i[2]){r.label=i[2],r.ops.push(n);break}i[2]&&r.ops.pop(),r.trys.pop();continue}n=e.call(t,r)}catch(o){n=[6,o],s=0}finally{a=i=0}if(5&n[0])throw n[1];return{value:n[0]?n[1]:void 0,done:!0}}},I=function(t,e,a){if(a||2===arguments.length)for(var s,i=0,n=e.length;i<n;i++)!s&&i in e||(s||(s=Array.prototype.slice.call(e,0,i)),s[i]=e[i]);return t.concat(s||Array.prototype.slice.call(e))},A=function(t){function e(){var e=null!==t&&t.apply(this,arguments)||this;return e.dataLoading=!1,e.selectedRow="",e.items=[],e.airlines=[],e.searchAirlines="",e.Cabin="",e.FlightNumber="",e.NationalId="",e.checkDate="",e.PassengerName="",e.PassportNo="",e.AirlineIata="",e.endDate="",e.selectedLocale="fa",e.startDate="",e.currentShiftDates=[],e.newContracts=[],e.AirportCode=null,e.FlightType=null,e.day=null,e.shift=1,e.headers=[{text:"#",value:"row",align:"center",sortable:!1},{text:e.$t("airline"),value:"airline",align:"center",sortable:!1,width:50},{text:e.$t("flightNumber"),value:"flightNumber",align:"center",sortable:!1},{text:e.$t("flightTime"),value:"Time",align:"center",sortable:!1},{text:e.$t("date"),value:"Date",align:"center"},{text:e.$t("travelType")+"/"+e.$t("flightType"),value:"tripType",align:"center",sortable:!1},{text:"CIP",value:"cipCount",align:"center",sortable:!1,width:100},{text:"BC",value:"bcCount",align:"center",sortable:!1,width:100},{text:e.$t("all"),value:"passengerCount",align:"center",sortable:!1,width:100},{text:"",value:"print",align:"center",sortable:!1,width:100}],e}return T(e,t),e.prototype.mounted=function(){this.currentShift()},e.prototype.startChecking=function(){var t=this;setInterval((function(){var e=t.$store.state.baseUrl+"report/cipmanifest/allflights?CheckDate="+t.checkDate+"&StartDate="+t.currentShiftDates[0]+"&EndDate="+t.currentShiftDates[1]+"&FlightType=inbound";t.axios.get(e).then((function(e){e.data.Items=e.data.Items.filter((function(t){return"inbound"==t.flightType})),e.data.Items.length&&(t.newContracts=I(I([],t.newContracts,!0),e.data.Items.map((function(t){return{flightType:t.flightType,flightDateTime:t.flightDateTime,flightNumber:t.flightNumber,airline:t.airline}})),!0))})).catch((function(t){console.log(t)})),t.checkDate=(new t.$persianDate).calendar("g").toString("YYYY-MM-DD HH:mm")}),3e5)},e.prototype.openBoardPrint=function(t,e){var a={passengers:t,flightNo:e.airline+e.flightNumber};sessionStorage.setItem("boardData",JSON.stringify(a));var s=this.$router.resolve({name:"boardpassengers",query:{total:"true"}});window.open(s.href,"_blank")},e.prototype.getPassengers=function(t){return P(this,void 0,void 0,(function(){var e,a,s,i,n;return N(this,(function(r){switch(r.label){case 0:return e=this.$store.state.baseUrl+"report/cipmanifest?CipServiceTypeId=0&StartDate="+t.flightDateTime+"&EndDate="+t.flightDateTime+"&Airline="+t.airline+"&FlightNumber="+t.flightNumber+"&FlightType="+t.flightType,a={flightDateTime:t.flightDateTime,airline:t.airline,flightNumber:t.flightNumber,flightType:t.flightType},[4,this.axios(e)];case 1:return s=r.sent(),"inbound"==t.flightType?this.openBoardPrint(s.data.Items,a):(i=s.data.Items.filter((function(t){return"Business"==t.cabinClass&&t.status})),i.length?(sessionStorage.setItem("bcPassengers",JSON.stringify(i)),n=this.$router.resolve({name:"businessReport",query:a}),window.open(n.href,"_blank")):this.$toast.error("No Shown Business Passengers!")),[2]}}))}))},Object.defineProperty(e.prototype,"total",{get:function(){return{pass:this.items.reduce((function(t,e){return t+e.passengerCount}),0),shownPass:this.items.reduce((function(t,e){return t+e.ShowPassenger}),0),cip:this.items.reduce((function(t,e){return t+(e.passengerCount-e.Business)}),0),shownCIP:this.items.reduce((function(t,e){return t+(e.ShowPassenger-e.BusinessShowPassenger)}),0),bc:this.items.reduce((function(t,e){return t+e.Business}),0),shownBC:this.items.reduce((function(t,e){return t+e.BusinessShowPassenger}),0)}},enumerable:!1,configurable:!0}),e.prototype.openManifest=function(t){console.log(t);var e=this.cnLodash.cloneDeep(t);delete e.NotShow,delete e.cipDate,delete e.cipType,delete e.tripType,delete e.cabinClass,delete e.ShowPassenger,delete e.passengerCount;var a=this.$router.resolve({name:"cipmanifest",query:e});window.open(a.href,"_blank")},e.prototype.changeShift=function(){this.day=null,1==this.shift?this.currentShift():2==this.shift?this.nextShift():this.prevShift()},e.prototype.changeDay=function(){this.shift=null,1==this.day?this.currentDay():2==this.day?this.nextDay():this.prevDay()},e.prototype.currentDay=function(){var t=(new this.$persianDate).calendar("g").toString();this.startDate=t+" 00:00",this.endDate=t+" 23:59",this.getData()},e.prototype.nextDay=function(){var t=(new this.$persianDate).calendar("g").addDay(1).toString();this.startDate=t+" 00:00",this.endDate=t+" 23:59",this.getData()},e.prototype.prevDay=function(){var t=(new this.$persianDate).calendar("g").subDay(1).toString();this.startDate=t+" 00:00",this.endDate=t+" 23:59",this.getData()},e.prototype.currentShift=function(){var t=(new this.$persianDate).toString("HH"),e=(new this.$persianDate).calendar("g").toString(),a=(new this.$persianDate).calendar("g").addDay(1).toString(),s=(new this.$persianDate).calendar("g").subDay(1).toString();8<=parseInt(t)&&parseInt(t)<19?(this.startDate=e+" 08:00",this.endDate=e+" 18:59"):(this.startDate=parseInt(t)>=19?e+" 19:00":s+" 19:00",this.endDate=parseInt(t)>=19?a+" 07:59":e+" 07:59"),this.currentShiftDates=[this.startDate,this.endDate],this.getData()},e.prototype.nextShift=function(){var t=(new this.$persianDate).toString("HH"),e=(new this.$persianDate).calendar("g").toString(),a=(new this.$persianDate).calendar("g").addDay(1).toString();8<=parseInt(t)&&parseInt(t)<19?(this.startDate=e+" 19:00",this.endDate=a+" 07:59"):(this.startDate=parseInt(t)>=19?a+" 08:00":e+" 08:00",this.endDate=parseInt(t)>=19?a+" 18:59":e+" 18:59"),this.getData()},e.prototype.prevShift=function(){var t=(new this.$persianDate).toString("HH"),e=(new this.$persianDate).calendar("g").toString(),a=(new this.$persianDate).calendar("g").subDay(1).toString();8<=parseInt(t)&&parseInt(t)<19?(this.startDate=a+" 19:00",this.endDate=e+" 07:59"):(this.startDate=parseInt(t)>=19?e+" 08:00":a+" 08:00",this.endDate=parseInt(t)>=19?e+" 18:59":a+" 18:59"),this.getData()},e.prototype.searchAirlinesChanged=function(t){var e=this;t&&t.length>1&&this.axios(this.$store.state.baseUrl+"airlines?name="+t).then((function(t){t.data.Items.forEach((function(t){e.$set(t,"searchAirlines",t.name+t.iata)})),e.airlines=t.data.Items}))},e.prototype.getData=function(){var t=this;this.checkDate=(new this.$persianDate).calendar("g").toString("YYYY-MM-DD HH:mm"),this.newContracts.splice(0),this.dataLoading=!0;var e=this.$store.state.baseUrl+"report/cipmanifest/allflights?StartDate="+this.startDate+"&EndDate="+this.endDate;e+=this.AirlineIata?"&Airline="+this.AirlineIata.iata:"",e+=this.AirportCode?"&Airport="+this.AirportCode.airportCode:"",e+=this.FlightNumber?"&FlightNumber="+this.FlightNumber:"",e+=this.Cabin?"&CabinClass="+this.Cabin:"",e+=this.NationalId?"&NationalId="+this.NationalId:"",e+=this.PassengerName?"&PassengerName="+this.PassengerName:"",e+=this.PassportNo?"&PassportNo="+this.PassportNo:"",e+=this.FlightType?"&FlightType="+this.FlightType:"",this.axios.get(e).then((function(e){t.startChecking(),t.items=e.data.Items,t.dataLoading=!1})).catch((function(e){console.log(e),t.dataLoading=!1}))},$([Object(w["e"])("searchAirlines")],e.prototype,"searchAirlinesChanged",null),e=$([Object(w["a"])({components:{NumberField:S["a"],AppAriportSelect:x["a"],datePicker:k["b"]}})],e),e}(Object(w["b"])(_["a"])),F=A,j=F,Y=(a("33e5"),a("2877")),R=Object(Y["a"])(j,C,D,!1,null,"95bf324e",null);e["default"]=R.exports},f972:function(t,e,a){}}]);