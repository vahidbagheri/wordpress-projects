(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["cabinDeclaration"],{"61cd":function(t,e,a){"use strict";a.r(e);var s=a("c6a6"),i=a("8336"),n=a("b0af"),l=a("99d9"),r=a("ac7c"),o=a("cc20"),c=a("62ad"),d=a("2b5d"),h=a("8fea"),u=a("169a"),p=a("ce7e"),m=a("132d"),f=a("8860"),b=a("da13"),g=a("5d23"),x=a("a797"),y=a("490a"),C=a("0fd9"),v=a("b974"),w=a("2fa4"),k=a("71a3"),D=a("8654"),S=function(){var t=this,e=t._self._c;return e("div",{staticClass:"container"},[e(x["a"],{attrs:{value:t.overlay}},[e(y["a"],{attrs:{indeterminate:"",size:"64"}})],1),e(u["a"],{on:{"click:outside":t.exitandClean},model:{value:t.finalTable,callback:function(e){t.finalTable=e},expression:"finalTable"}},[e(n["a"],{staticClass:"py-5"},[e(l["d"],[t._v(" پرواز های ساخته شده "),e(w["a"]),e(i["a"],{staticClass:"ml-8",attrs:{color:"warning"},on:{click:t.exitandClean}},[t._v("بستن")])],1),e(l["c"],[e("h5"),e(p["a"]),e(h["a"],{staticClass:"elevation-1 px-12",attrs:{headers:t.finalHeaders,height:"200",items:t.classes,"items-per-page":200,dense:"","loading-text":t.$t("pleaseWait"),"no-data-text":t.$t("noItemToShow"),search:t.search1,"hide-default-footer":""},scopedSlots:t._u([{key:"item.flightDate",fn:function(a){return[e("span",{staticStyle:{"min-width":"100px"}},[t._v(t._s(a.item.flightDate))])]}},{key:"top",fn:function(){return[e(C["a"],{staticClass:"justify-space-between px-2"},[e(c["a"],{attrs:{cols:"12",md:"4"}},[e(D["a"],{staticClass:"body-2 moreRadius input",attrs:{placeholder:"جستجو",dense:"","append-icon":"search ","hide-details":""},model:{value:t.search1,callback:function(e){t.search1=e},expression:"search1"}})],1),e(c["a"],{attrs:{cols:"12",md:"8"}},[e(C["a"],{attrs:{justify:"end"}},[e(i["a"],{staticClass:"mx-4",attrs:{small:"",dark:""},scopedSlots:t._u([{key:"default",fn:function(){return[e("download-excel",{attrs:{data:t.classes,name:"classes.xls"}},[t._v("خروجی Excel")])]},proxy:!0}])})],1)],1)],1)]},proxy:!0}])})],1),e(l["d"],{staticClass:"py-0"},[t._v("پرواز های تکراری")]),e(l["c"],[e("h5"),e(p["a"]),e(h["a"],{ref:"second_table",staticClass:"elevation-1 px-12",attrs:{headers:t.finalHeaders,height:"200",items:t.DuplicateClasses,"items-per-page":200,dense:"","loading-text":t.$t("pleaseWait"),"no-data-text":t.$t("noItemToShow"),search:t.search2,"hide-default-footer":""},scopedSlots:t._u([{key:"item.flightDate",fn:function(a){return[e("span",{staticStyle:{"min-width":"100px"}},[t._v(t._s(a.item.flightDate))])]}},{key:"top",fn:function(){return[e(C["a"],{staticClass:"justify-space-between px-2"},[e(c["a"],{attrs:{cols:"12",md:"4"}},[e(D["a"],{staticClass:"body-2 moreRadius input",attrs:{placeholder:"جستجو",dense:"","append-icon":"icon-Search icon-18","hide-details":""},model:{value:t.search2,callback:function(e){t.search2=e},expression:"search2"}})],1),e(c["a"],{attrs:{cols:"12",md:"8"}},[e(C["a"],{attrs:{justify:"end"}},[e(i["a"],{staticClass:"mx-4",attrs:{small:"",dark:""},scopedSlots:t._u([{key:"default",fn:function(){return[e("download-excel",{attrs:{data:t.DuplicateClasses,name:"DuplicateClasses.xls"}},[t._v("خروجی Excel")])]},proxy:!0}])})],1)],1)],1)]},proxy:!0}])})],1)],1)],1),e(n["a"],{staticStyle:{width:"100%","min-height":"120px","border-radius":"5px"},attrs:{flat:"","background-color":"white"}},[e(C["a"],{staticClass:"mt-3 px-10 py-5",attrs:{justify:"space-between"}},[e(k["a"],{staticStyle:{height:"40px",color:"#b7b7b7","letter-spacing":"0px"}},[t._v(" ایجاد ظرفیت پرواز ")]),e(i["a"],{attrs:{color:"warning",depressed:"",dark:"",link:"",to:"/dashboard/editcabindeclaration"}},[t._v(" ویرایش ظرفیت ")])],1),e(p["a"],{staticClass:"py-5 mt-3"}),e(C["a"],{staticClass:"px-3"},[e(c["a"],{attrs:{cols:"12",md:"3"}},[e(s["a"],{staticClass:"destination leftDirection flightinputs",attrs:{dense:"",label:"انتخاب مسیر","hide-no-data":"",items:t.paths,outlined:"","item-text":"searchKey","error-messages":t.pathErrors,"return-object":""},on:{keydown:function(e){t.pathselect=""}},scopedSlots:t._u([{key:"item",fn:function(a){return[e(f["a"],{staticClass:"pa-0",attrs:{"two-line":"",width:"100%"}},[e(b["a"],{staticClass:"pa-0"},[e(g["a"],{staticClass:"py-0",staticStyle:{direction:"ltr","text-align":"initial"}},[e(g["c"],{staticClass:"caption mb-0"},[t._v(" "+t._s(a.item.origin)+" "),e(m["a"],{staticClass:"icon-arrow-right icon-18",staticStyle:{"padding-bottom":"4px"},attrs:{color:"black"}}),t._v(" "+t._s(a.item.destination)+" ")],1)],1)],1),e(p["a"])],1)]}},{key:"selection",fn:function(a){return[e("span",{},[e(o["a"],{staticClass:"caption white--text",attrs:{label:"",small:"",color:"#d50c6a"}},[t._v(t._s(a.item.origin))]),e(m["a"],{staticClass:"px-0 icon-arrow-right icon-18",attrs:{color:"primary"}}),e(o["a"],{staticClass:"caption white--text",attrs:{label:"",small:"",color:"#d50c6a"}},[t._v(t._s(a.item.destination))])],1)]}}]),model:{value:t.pathselect,callback:function(e){t.pathselect=e},expression:"pathselect"}})],1),e(c["a"],{staticClass:"datepickerCenter",attrs:{cols:"12",md:"2"}},[e("date-picker",{ref:"Datepicker",attrs:{locale:t.$locale,label:"از تاریخ",startLabel:"از تاریخ",dense:"",endLabel:"تا تاریخ","locale-config":{fa:{inputFormat:"jYYYY/jMM/jDD"},en:{inputFormat:"dddd YYYY-MM-DD"}},format:"YYYY-MM-DD",selectSource:t.selectSource,from:t.todayJ,modal:!0,rounded:!1,"auto-submit":!0},on:{focus:function(e){t.selectSource=1},rangeBegin:t.rangeBegin},model:{value:t.datesCabin,callback:function(e){t.datesCabin=e},expression:"datesCabin"}})],1),e(c["a"],{staticClass:"datepickerCenter",attrs:{cols:"12",md:"2"}},[e(D["a"],{staticClass:"font-size-13 font-weight-300",attrs:{label:"تا تاریخ",readonly:"",outlined:"",dense:"",errors:t.textFieldtaError||t.textFieldazError},on:{click:function(e){t.$refs.Datepicker.showPicker("input"),t.selectSource=2}},scopedSlots:t._u([{key:"prepend-inner",fn:function(){return[e("i",{staticClass:"homepage-icon-color pl-1 icon-calendar",staticStyle:{"pointer-events":"none"}})]},proxy:!0}]),model:{value:t.displayRetDate,callback:function(e){t.displayRetDate=e},expression:"displayRetDate"}})],1),e(c["a"],{attrs:{cols:"12",md:"2"}},[e(i["a"],{staticClass:"buttons",attrs:{depressed:"",loading:t.loading,dark:""},on:{click:t.searchFlights}},[t._v(" جستجو ")])],1)],1)],1),e("hr",{staticClass:"my-5"}),t.tableShow?e(h["a"],{ref:"first_table",staticClass:"firstTable px-12",staticStyle:{position:"relative"},attrs:{"show-select":"",headers:t.headers,items:t.filteredItems,"items-per-page":200,search:t.searchall,height:"350","item-key":"id",dense:"","multi-sort":"","loading-text":t.$t("pleaseWait"),"no-data-text":t.$t("noItemToShow"),"hide-default-footer":""},on:{"toggle-select-all":()=>{t.selected=t.filteredItems}},scopedSlots:t._u([{key:"top",fn:function(){return[e(C["a"],{staticClass:"px-2"},[e(c["a"],{attrs:{cols:"12",md:"3"}},[e(D["a"],{staticClass:"body-2 pb-5 moreRadius input",attrs:{placeholder:"جستجو",outlined:"",dense:"","append-icon":"icon-Search icon-18","hide-details":""},on:{input:t.filterby},model:{value:t.searchall,callback:function(e){t.searchall=e},expression:"searchall"}})],1)],1)]},proxy:!0},{key:"footer",fn:function(){return[e(C["a"],{attrs:{justify:"space-around"}},[e(c["a"],{staticClass:"px-2",staticStyle:{height:"min-content","min-width":"170px"},attrs:{cols:"12",md:"3"}},[e(v["a"],{staticClass:"cabin",attrs:{items:["Economy","Business","FirstClass","Premium"],outlined:"",dense:"","error-messages":t.cabinClassError,"hide-no-data":"",label:t.$t("cabinClass")},scopedSlots:t._u([{key:"prepend-inner",fn:function(){return[e(m["a"],{attrs:{size:"20"}},[t._v("*")])]},proxy:!0},{key:"selection",fn:function({item:a}){return[e("span",{staticClass:"caption"},[t._v(t._s(a))])]}}],null,!1,4060429968),model:{value:t.cabinClass,callback:function(e){t.cabinClass=e},expression:"cabinClass"}})],1),e(c["a"],{staticClass:"px-2",staticStyle:{height:"min-content","min-width":"170px"},attrs:{cols:"12",md:"1"}},[e(d["a"],{staticClass:"cabin",attrs:{items:["Y","C","F","A"],outlined:"","error-messages":t.cabinClassCodeError,dense:"",maxlength:"1",label:"کد کلاس کابین"},scopedSlots:t._u([{key:"prepend-inner",fn:function(){return[e(m["a"],{attrs:{size:"20"}},[t._v("*")])]},proxy:!0},{key:"item",fn:function(a){return[e(o["a"],{staticClass:"mx-auto caption white--text",attrs:{label:"",small:"",dark:""}},[t._v(t._s(a.item))])]}}],null,!1,3083850015),model:{value:t.cabinClassCode,callback:function(e){t.cabinClassCode=e},expression:"cabinClassCode"}})],1),e(c["a"],{staticClass:"px-2",staticStyle:{height:"min-content","min-width":"170px"},attrs:{cols:"12",md:"1"}},[e(D["a"],{attrs:{outlined:"","error-messages":t.capacityError,type:"number",min:"0",label:"ظرفیت:",dense:""},scopedSlots:t._u([{key:"prepend-inner",fn:function(){return[e(m["a"],{attrs:{size:"20"}},[t._v("*")])]},proxy:!0}],null,!1,3796944784),model:{value:t.capacity,callback:function(e){t.capacity=e},expression:"capacity"}})],1),e(c["a"],{staticClass:"px-2",staticStyle:{height:"min-content","min-width":"170px"},attrs:{cols:"12",md:"1"}},[e(D["a"],{attrs:{outlined:"",dense:"",type:"number",min:"0",max:t.capacity,label:"حداکثر فروش بلیت تور","hide-details":""},on:{keyup:function(e){return t.fixTopValue(0)}},scopedSlots:t._u([{key:"prepend-inner",fn:function(){return[e(m["a"],{attrs:{size:"20"}},[t._v("*")])]},proxy:!0}],null,!1,3796944784),model:{value:t.maxmiumTourSell,callback:function(e){t.maxmiumTourSell=e},expression:"maxmiumTourSell"}})],1),e(c["a"],{staticClass:"px-2",staticStyle:{height:"min-content","min-width":"170px"},attrs:{cols:"12",md:"1"}},[e(D["a"],{attrs:{outlined:"",dense:"",type:"number",min:"0",max:t.capacity,label:"حداکثر فروش بلیت یک طرفه","hide-details":""},on:{input:function(e){return t.keyup(1)}},scopedSlots:t._u([{key:"prepend-inner",fn:function(){return[e(m["a"],{attrs:{size:"20"}},[t._v("*")])]},proxy:!0}],null,!1,3796944784),model:{value:t.maxmiumOneWayTicket,callback:function(e){t.maxmiumOneWayTicket=e},expression:"maxmiumOneWayTicket"}})],1),e(c["a"],{staticClass:"px-2",staticStyle:{height:"min-content","min-width":"170px"},attrs:{cols:"12",md:"1"}},[e(D["a"],{attrs:{dense:"",outlined:"",type:"number",min:"0",max:t.capacity,label:"حداکثر فروش بلیت دو طرفه","hide-details":""},on:{input:function(e){return t.keyup(2)}},scopedSlots:t._u([{key:"prepend-inner",fn:function(){return[e(m["a"],{attrs:{size:"20"}},[t._v("*")])]},proxy:!0}],null,!1,3796944784),model:{value:t.maximumTwoWayTicket,callback:function(e){t.maximumTwoWayTicket=e},expression:"maximumTwoWayTicket"}})],1)],1),e(C["a"],[e(c["a"],{staticClass:"px-2",attrs:{cols:"6",md:"2"}},[e(r["a"],{staticClass:"cabin",attrs:{label:"فروش به همکار B2B"},model:{value:t.B2B,callback:function(e){t.B2B=e},expression:"B2B"}})],1),e(c["a"],{staticClass:"px-2",attrs:{cols:"6",md:"2"}},[e(r["a"],{staticClass:"cabin",attrs:{label:"فروش به مسافر B2C"},model:{value:t.B2C,callback:function(e){t.B2C=e},expression:"B2C"}})],1),e(c["a"],{staticClass:"px-2",attrs:{cols:"6",md:"2"}},[e(r["a"],{staticClass:"cabin",attrs:{label:"نمایش در موتورهای جستجو"},model:{value:t.showInEngin,callback:function(e){t.showInEngin=e},expression:"showInEngin"}})],1),e(c["a"],{staticClass:"px-2",attrs:{cols:"6",md:"2"}},[e(r["a"],{staticClass:"cabin",attrs:{label:"فروش پرواز تک"},model:{value:t.singleFlightCheck,callback:function(e){t.singleFlightCheck=e},expression:"singleFlightCheck"}})],1),e(c["a"],{staticClass:"px-2",attrs:{cols:"6",md:"2"}},[e(r["a"],{staticClass:"cabin",attrs:{label:" فروش پرواز + هتل "},model:{value:t.hotelAndFlightSell,callback:function(e){t.hotelAndFlightSell=e},expression:"hotelAndFlightSell"}})],1),e(c["a"],{staticClass:"px-2",attrs:{cols:"6",md:"2"}},[e(r["a"],{staticClass:"cabin",attrs:{label:"ثبت خرید اتوماتیک"},model:{value:t.autoBuy,callback:function(e){t.autoBuy=e},expression:"autoBuy"}})],1)],1),e(C["a"],{staticClass:"py-5",attrs:{justify:"end"}},[e(i["a"],{attrs:{color:"success"},on:{click:t.finalSubmit}},[t._v("ثبت نهایی")])],1)]},proxy:!0}],null,!1,1323869171),model:{value:t.selected,callback:function(e){t.selected=e},expression:"selected"}}):t._e()],1)},T=[],$=a("5c1f"),_=a("b5ae"),E=a("f2d9"),F=a("02d3"),B={components:{downloadExcel:E["a"],datePicker:$["b"]},mixins:[F["a"]],data:()=>({loading:!1,items:[],paths:[],searchformainTable:"",datesCabin:[],selectSource:1,pathselect:"",search1:"",search2:"",finalTable:!1,filteredItems:[],itemsToShow:[],classes:[],selected:[],DuplicateClasses:[],segments:[],filterType:null,mode1:"persian",mode2:"persian",searchall:"",cabinClass:"Economy",cabinClassCode:"Y",capacity:1,maxmiumTourSell:1,maxmiumOneWayTicket:1,maximumTwoWayTicket:1,singleFlightCheck:0,hotelAndFlightSell:0,autoBuy:0,B2B:"",B2C:"",showInEngin:0,CabinClass:"",CabinClassError:!1,CabinClassCode:"",CabinClassCodeError:!1,textFieldazError:!1,textFieldtaError:!1,tableShow:!1,overlay:!1,headers:[{text:"تاریخ پرواز",width:100,value:"flightDate",sortable:!1,align:"center"},{text:"ساعت پرواز",value:"flightTime",width:100,sortable:!1,align:"center"},{text:"تاریخ رسیدن",width:100,value:"arrivalDate",sortable:!1,align:"center"},{text:"ساعت رسیدن",value:"arriavlTime",width:100,sortable:!1,align:"center"},{text:"روز ",value:"weekday",width:100,sortable:!1,align:"center"},{text:"مبدا",value:"origin",sortable:!1,width:100,align:"center"},{text:"مقصد",value:"destination",sortable:!1,align:"center",width:100},{text:"شماره پرواز",value:"flightNo",sortable:!1,width:100,align:"center"},{text:"ایرلاین(Iata)",value:"airline",sortable:!1,width:150,align:"center"},{text:"هواپیما",value:"airplaneName",width:180,sortable:!1,align:"center"},{text:"توضیحات",value:"description",width:100,sortable:!1,align:"center"}],finalHeaders:[{text:"تاریخ پرواز",width:100,value:"flightDate",sortable:!1,align:"center"},{text:"ساعت پرواز",value:"flightTime",width:100,sortable:!1,align:"center"},{text:"تاریخ رسیدن",width:100,value:"arrivalDate",sortable:!1,align:"center"},{text:"ساعت رسیدن",value:"arriavlTime",width:100,sortable:!1,align:"center"},{text:"روز شمسی",value:"flightDateinPersian",width:100,sortable:!1,align:"center"},{text:"مبدا",value:"origin",sortable:!1,width:100,align:"center"},{text:"مقصد",value:"destination",sortable:!1,align:"center",width:100},{text:"شماره پرواز",value:"flightNo",sortable:!1,width:100,align:"center"},{text:"ایرلاین(Iata)",value:"airline",sortable:!1,width:150,align:"center"},{text:"هواپیما",value:"airplaneName",width:180,sortable:!1,align:"center"},{text:"توضیحات",value:"description",width:100,sortable:!1,align:"center"},{text:"ظرفیت",value:"capacity",width:100,align:"center"},{text:"B2B",value:"btob",width:100,sortable:!1,align:"center"},{text:"B2C",value:"btoc",width:100,sortable:!1,align:"center"},{text:"وب سرویس",value:"webservice",width:100,sortable:!1,align:"center"},{text:"تور",value:"tour",width:100,sortable:!1,align:"center"},{text:"کد کلاس کابین",value:"cabinClassCode",width:100,sortable:!1,align:"center"},{text:" کلاس کابین",value:"cabinClass",width:100,sortable:!1,align:"center"}]}),validations:{pathselect:{required:_["required"]},cabinClass:{required:_["required"]},cabinClassCode:{required:_["required"]},capacity:{required:_["required"],minValue:Object(_["minValue"])(1)}},computed:{todayJ(){return(new this.$persianDate).calendar("j").toString()},retDate(){return 0!=this.datesCabin.length?this.datesCabin[1]:""},displayRetDate(){if(this.retDate){let t="jYYYY/jMM/jDD";return this.$options.filters.simplePersian(new this.$persianDate(this.retDate).toString(t),"fa")}return""},pathErrors(){const t=[];return this.$v.pathselect.$dirty?(!this.$v.pathselect.required&&t.push(""),t):t},cabinClassError(){const t=[];return this.$v.cabinClass.$dirty?(!this.$v.cabinClass.required&&t.push("  کلاس کابین الزامی می باشد"),t):t},cabinClassCodeError(){const t=[];return this.$v.cabinClassCode.$dirty?(!this.$v.cabinClassCode.required&&t.push("  کد کلاس کابین الزامی می باشد"),t):t},capacityError(){const t=[];return this.$v.capacity.$dirty?(!this.$v.capacity.required&&t.push("  ظرفیت الزامی می باشد"),!this.$v.capacity.minValue&&t.push(" ظرفیت نمیتواند کمتر از یک باشد"),t):t}},created(){this.handleDatePickers()},mounted(){this.getPaths()},methods:{rangeBegin(){this.$set(this.datesCabin,1,"")},handleDatePickers(){this.datesCabin.push((new this.$persianDate).calendar("g").toString()),this.datesCabin.push((new this.$persianDate).calendar("g").addDay(14).toString())},getPaths(){this.axios(this.$store.state.baseUrl+"inventory/distinctroutes").then(t=>{this.paths=t.data.items,t.data.items.forEach((t,e)=>{this.$set(t,"searchKey",t.origin+t.destination)})}).catch(t=>{})},filterby(){switch(this.filterType){case"هواپیما":this.filteredItems=this.itemsToShow.filter(t=>-1!==t.airplaneName.toLowerCase().indexOf(this.searchformainTable));break;case"تاریخ میلادی":this.filteredItems=this.itemsToShow.filter(t=>-1!==t.flightDate.indexOf(this.searchformainTable));break}},fixTopValue(t){switch(t){case 0:parseInt(this.maxmiumTourSell)>parseInt(this.capacity)&&(this.maxmiumTourSell=this.capacity);break;case 1:parseInt(this.maxmiumOneWayTicket)>parseInt(this.capacity)&&(this.maxmiumOneWayTicket=this.capacity);break;case 2:parseInt(this.maximumTwoWayTicket)>parseInt(this.capacity)&&(this.maximumTwoWayTicket=this.capacity);break}},exitandClean(){this.finalTable=!1,this.overlay=!1,this.classes=[],this.DuplicateClasses=[]},async searchFlights(){this.loading=!0;let t={Type:"ByDate",RouteId:this.pathselect.id,FromDeparturDate:this.datesCabin[0],ToDeparturDate:this.datesCabin[1]};if(this.datesCabin.length){if(this.$v.$touch(),this.$v.pathselect.$dirty){let e=await this.axios.post(this.$store.state.baseUrl+"inventory/getSegments",t);this.loading=!1,e.data.Success&&(this.tableShow=!0),this.itemsToShow=e.data.Items,this.itemsToShow.forEach((t,e)=>{t.id=e,t.flightDate=this.getDateFormat(t.departurDatetime,"YYYY/MM/DD","g","g"),t.flightTime=this.getDateFormat(t.departurDatetime,"HH:mm","g","g"),t.arrivalDate=this.getDateFormat(t.arrivallDatetime,"YYYY/MM/DD","g","g"),t.arriavlTime=this.getDateFormat(t.arrivallDatetime,"HH:mm","g","g"),t.flightDateinPersian=this.getDateFormat(t.departurDatetime,"jYYYY/jMM/jDD","j","g"),t.weekday=this.getDateFormat(t.departurDatetime,"jdddd","j","g"),t.quotaName=t.name?`${t.name}${t.family}${t.companyName}`:"-"}),this.filteredItems=this.itemsToShow}}else this.textFieldtaError=!0,this.textFieldazError=!0,this.$v.$touch()},finalSubmit(){if(this.$v.$touch(),this.$v.$error)this.CabinClassCodeError=!0,this.CabinClassError=!0;else{this.overlay=!0,this.CabinClassCodeError=!1,this.CabinClassError=!1;var t=[],e=this.B2B?1:0,a=this.B2C?1:0,s=this.showInEngin?1:0,i=this.hotelAndFlightSell?1:0,n=this.singleFlightCheck?1:0,l=this.autoBuy?1:0;this.selected.forEach((r,o)=>{let c={SegmentId:r.id,Capacity:this.capacity,CabinClass:this.cabinClass,MaxRoundtrip:this.maximumTwoWayTicket,MaxOneway:this.maxmiumOneWayTicket,MaxTour:this.maxmiumTourSell,B2B:e,B2C:a,Webservice:s,Tour:i,SaleFlight:n,CabinClassCode:this.cabinClassCode,AutoBuy:l,Quota:0};t.push(c)}),this.sendClasses(t)}},async sendClasses(t){let e=await this.axios.post(this.$store.state.baseUrl+"inventory/classes",{Classes:t});this.overlay=!1,e.data.Classes.length&&(this.finalTable=!0,this.classes=e.data.classes,this.classes.forEach((t,a)=>{let s=new Date(e.data.classes[a].departurDatetime.slice(0,-1)),i=new Date(e.data.classes[a].arrivallDatetime.slice(0,-1));this.classes[a].flightDate=`${s.getFullYear()}/${s.getMonth()+1}/${s.getDate()}`,this.classes[a].flightTime=`${s.getHours()}:${s.getMinutes()}`,this.classes[a].arrivalDate=`${i.getFullYear()}/${i.getMonth()+1}/${i.getDate()}`,this.classes[a].arriavlTime=`${i.getHours()}:${i.getMinutes()}`,this.classes[a].flightDateinPersian=s.toLocaleDateString("fa-IR"),this.classes[a].airline=`(${this.classes[a].airlineIataCode})${this.classes[a].airline}`})),e.data.DuplicateClasses.length&&(this.finalTable=!0,this.DuplicateClasses=e.data.DuplicateClasses,this.DuplicateClasses.forEach((t,a)=>{let s=new Date(e.data.DuplicateClasses[a].departurDatetime.slice(0,-1)),i=new Date(e.data.DuplicateClasses[a].arrivallDatetime.slice(0,-1));this.DuplicateClasses[a].flightDate=`${s.getFullYear()}/${s.getMonth()+1}/${s.getDate()}`,this.DuplicateClasses[a].flightTime=`${s.getHours()}:${s.getMinutes()}`,this.DuplicateClasses[a].arrivalDate=`${i.getFullYear()}/${i.getMonth()+1}/${s.getDate()}`,this.DuplicateClasses[a].arriavlTime=`${i.getHours()}:${i.getMinutes()}`,this.DuplicateClasses[a].flightDateinPersian=s.toLocaleDateString("fa-IR"),this.DuplicateClasses[a].airline=`(${this.DuplicateClasses[a].airlineIataCode})${this.DuplicateClasses[a].airline}`}))}}},j=B,I=(a("ad91"),a("2877")),Y=Object(I["a"])(j,S,T,!1,null,null,null);e["default"]=Y.exports},a0c4:function(t,e,a){},ad91:function(t,e,a){"use strict";a("a0c4")},f2d9:function(t,e,a){"use strict";(function(t){"undefined"!==typeof window?window:"undefined"!==typeof t||"undefined"!==typeof self&&self;function a(t,e){return e={exports:{}},t(e,e.exports),e.exports}var s=a((function(t,e){(function(e,a){t.exports=a()})(0,(function(){return function t(e,a,s){var i,n,l=window,r="application/octet-stream",o=s||r,c=e,d=!a&&!s&&c,h=document.createElement("a"),u=function(t){return String(t)},p=l.Blob||l.MozBlob||l.WebKitBlob||u,m=a||"download";if(p=p.call?p.bind(l):Blob,"true"===String(this)&&(c=[c,o],o=c[0],c=c[1]),d&&d.length<2048&&(m=d.split("/").pop().split("?")[0],h.href=d,-1!==h.href.indexOf(d))){var f=new XMLHttpRequest;return f.open("GET",d,!0),f.responseType="blob",f.onload=function(e){t(e.target.response,m,r)},setTimeout((function(){f.send()}),0),f}if(/^data:([\w+-]+\/[\w+.-]+)?[,;]/.test(c)){if(!(c.length>2096103.424&&p!==u))return navigator.msSaveBlob?navigator.msSaveBlob(y(c),m):C(c);c=y(c),o=c.type||r}else if(/([\x80-\xff])/.test(c)){var b=0,g=new Uint8Array(c.length),x=g.length;for(b;b<x;++b)g[b]=c.charCodeAt(b);c=new p([g],{type:o})}function y(t){var e=t.split(/[:;,]/),a=e[1],s="base64"==e[2]?atob:decodeURIComponent,i=s(e.pop()),n=i.length,l=0,r=new Uint8Array(n);for(l;l<n;++l)r[l]=i.charCodeAt(l);return new p([r],{type:a})}function C(t,e){if("download"in h)return h.href=t,h.setAttribute("download",m),h.className="download-js-link",h.innerHTML="downloading...",h.style.display="none",document.body.appendChild(h),setTimeout((function(){h.click(),document.body.removeChild(h),!0===e&&setTimeout((function(){l.URL.revokeObjectURL(h.href)}),250)}),66),!0;if(/(Version)\/(\d+)\.(\d+)(?:\.(\d+))?.*Safari\//.test(navigator.userAgent))return/^data:/.test(t)&&(t="data:"+t.replace(/^data:([\w\/\-\+]+)/,r)),window.open(t)||confirm("Displaying New Document\n\nUse Save As... to download, then click back to return to this page.")&&(location.href=t),!0;var a=document.createElement("iframe");document.body.appendChild(a),!e&&/^data:/.test(t)&&(t="data:"+t.replace(/^data:([\w\/\-\+]+)/,r)),a.src=t,setTimeout((function(){document.body.removeChild(a)}),333)}if(i=c instanceof p?c:new p([c],{type:o}),navigator.msSaveBlob)return navigator.msSaveBlob(i,m);if(l.URL)C(l.URL.createObjectURL(i),!0);else{if("string"===typeof i||i.constructor===u)try{return C("data:"+o+";base64,"+l.btoa(i))}catch(v){return C("data:"+o+","+encodeURIComponent(i))}n=new FileReader,n.onload=function(t){C(this.result)},n.readAsDataURL(i)}return!0}}))})),i={props:{type:{type:String,default:"xls"},data:{type:Array,required:!1,default:null},fields:{type:Object,required:!1},exportFields:{type:Object,required:!1},defaultValue:{type:String,required:!1,default:""},title:{default:null},footer:{default:null},name:{type:String,default:"data.xls"},fetch:{type:Function},meta:{type:Array,default:()=>[]},worksheet:{type:String,default:"Sheet1"},beforeGenerate:{type:Function},beforeFinish:{type:Function}},computed:{idName(){var t=(new Date).getTime();return"export_"+t},downloadFields(){return void 0!==this.fields?this.fields:void 0!==this.exportFields?this.exportFields:void 0}},methods:{async generate(){"function"===typeof this.beforeGenerate&&await this.beforeGenerate();let t=this.data;if("function"!==typeof this.fetch&&t||(t=await this.fetch()),!t||!t.length)return;let e=this.getProcessedJson(t,this.downloadFields);return"html"===this.type?this.export(this.jsonToXLS(e),this.name.replace(".xls",".html"),"text/html"):"csv"===this.type?this.export(this.jsonToCSV(e),this.name.replace(".xls",".csv"),"application/csv"):this.export(this.jsonToXLS(e),this.name,"application/vnd.ms-excel")},export:async function(t,e,a){let i=this.base64ToBlob(t,a);"function"===typeof this.beforeFinish&&await this.beforeFinish(),s(i,e,a)},jsonToXLS(t){let e='<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><meta name=ProgId content=Excel.Sheet> <meta name=Generator content="Microsoft Excel 11"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">\x3c!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>${worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--\x3e<style>br {mso-data-placement: same-cell;}</style></head><body><table>${table}</table></body></html>',a="<thead>";const s=Object.keys(t[0]).length;let i=this;null!=this.title&&(a+=this.parseExtraData(this.title,'<tr><th colspan="'+s+'">${data}</th></tr>')),a+="<tr>";for(let n in t[0])a+="<th>"+n+"</th>";return a+="</tr>",a+="</thead>",a+="<tbody>",t.map((function(t,e){a+="<tr>";for(let s in t)a+="<td>"+i.valueReformattedForMultilines(t[s])+"</td>";a+="</tr>"})),a+="</tbody>",null!=this.footer&&(a+="<tfoot>",a+=this.parseExtraData(this.footer,'<tr><td colspan="'+s+'">${data}</td></tr>'),a+="</tfoot>"),e.replace("${table}",a).replace("${worksheet}",this.worksheet)},jsonToCSV(t){var e=[];null!=this.title&&e.push(this.parseExtraData(this.title,"${data}\r\n"));for(let a in t[0])e.push(a),e.push(",");return e.pop(),e.push("\r\n"),t.map((function(t){for(let a in t){let s='="'+t[a]+'"';s.match(/[,"\n]/)&&(s='"'+s.replace(/\"/g,'""')+'"'),e.push(s),e.push(",")}e.pop(),e.push("\r\n")})),null!=this.footer&&e.push(this.parseExtraData(this.footer,"${data}\r\n")),e.join("")},getProcessedJson(t,e){let a=this.getKeys(t,e),s=[],i=this;return t.map((function(t,e){let n={};for(let s in a){let e=a[s];n[s]=i.getValue(e,t)}s.push(n)})),s},getKeys(t,e){if(e)return e;let a={};for(let s in t[0])a[s]=s;return a},parseExtraData(t,e){let a="";if(Array.isArray(t))for(var s=0;s<t.length;s++)a+=e.replace("${data}",t[s]);else a+=e.replace("${data}",t);return a},getValue(t,e){const a="object"!==typeof t?t:t.field;let s="string"!==typeof a?[]:a.split("."),i=this.defaultValue;return i=a?s.length>1?this.getValueFromNestedItem(e,s):this.parseValue(e[a]):e,t.hasOwnProperty("callback")&&(i=this.getValueFromCallback(i,t.callback)),i},valueReformattedForMultilines(t){return"string"==typeof t?t.replace(/\n/gi,"<br/>"):t},getValueFromNestedItem(t,e){let a=t;for(let s of e)a&&(a=a[s]);return this.parseValue(a)},getValueFromCallback(t,e){if("function"!==typeof e)return this.defaultValue;const a=e(t);return this.parseValue(a)},parseValue(t){return t||0===t||"boolean"===typeof t?t:this.defaultValue},base64ToBlob(t,e){let a=window.btoa(window.unescape(encodeURIComponent(t))),s=atob(a),i=s.length,n=new Uint8ClampedArray(i);while(i--)n[i]=s.charCodeAt(i);return new Blob([n],{type:e})}}};function n(t,e,a,s,i,n,l,r,o,c){"boolean"!==typeof l&&(o=r,r=l,l=!1);var d,h="function"===typeof a?a.options:a;if(t&&t.render&&(h.render=t.render,h.staticRenderFns=t.staticRenderFns,h._compiled=!0,i&&(h.functional=!0)),s&&(h._scopeId=s),n?(d=function(t){t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext,t||"undefined"===typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),e&&e.call(this,o(t)),t&&t._registeredComponents&&t._registeredComponents.add(n)},h._ssrRegister=d):e&&(d=l?function(){e.call(this,c(this.$root.$options.shadowRoot))}:function(t){e.call(this,r(t))}),d)if(h.functional){var u=h.render;h.render=function(t,e){return d.call(e),u(t,e)}}else{var p=h.beforeCreate;h.beforeCreate=p?[].concat(p,d):[d]}return a}var l=n;const r=i;var o=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{attrs:{id:t.idName},on:{click:t.generate}},[t._t("default",[t._v("\n\t\tDownload "+t._s(t.name)+"\n\t")])],2)},c=[];o._withStripped=!0;const d=void 0,h=void 0,u=void 0,p=!1;var m=l({render:o,staticRenderFns:c},d,r,h,p,u,void 0,void 0);e["a"]=m}).call(this,a("c8ba"))}}]);