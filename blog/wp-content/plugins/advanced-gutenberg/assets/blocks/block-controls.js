!function(e){var t={};function n(a){if(t[a])return t[a].exports;var r=t[a]={i:a,l:!1,exports:{}};return e[a].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,a){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:a})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(n.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(a,r,function(t){return e[t]}.bind(null,r));return a},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){e.exports=n(1)},function(e,t,n){"use strict";var a,r=function(){function e(e,t){for(var n=0;n<t.length;n++){var a=t[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(t,n,a){return n&&e(t.prototype,n),a&&e(t,a),t}}(),o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var a in n)Object.prototype.hasOwnProperty.call(n,a)&&(e[a]=n[a])}return e},l=n(2),c=(a=l)&&a.__esModule?a:{default:a},i=n(3),s=n(5);function u(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function d(e){if(Array.isArray(e)){for(var t=0,n=Array(e.length);t<e.length;t++)n[t]=e[t];return n}return Array.from(e)}!function(e,t,n,a,l,g,m){a=wp.blockEditor||wp.editor;var h=t.addFilter,v=e.sprintf,b=e.__,p=n.hasBlockSupport,f=a,y=f.InspectorControls,C=(f.BlockControls,l.DateTimePicker,l.ToggleControl),k=l.PanelBody,_=l.Notice,x=l.FormTokenField,T=l.SelectControl,E=g.createHigherOrderComponent,R=m.Component,w=m.Fragment;if(parseInt(advgbBlocks.block_controls)){var S=["core/freeform","core/legacy-widget","core/widget-area","core/column","advgb/tab","advgb/column"],O=function(){return void 0!==advgb_block_controls_vars.controls&&Object.keys(advgb_block_controls_vars.controls).length>0?advgb_block_controls_vars.controls:[]},A=function(e){return void 0!==e&&e},B=function(e){var t=O(),n=0,a=[];return Object.keys(t).forEach((function(e){A(advgb_block_controls_vars.controls[e])&&a.push(e)})),a.forEach((function(t){D(e,t,"enabled")&&n++})),n>0},P=function(){var e=O(),t=0;return Object.keys(e).map((function(e){A(advgb_block_controls_vars.controls[e])&&t++})),t>0},D=function(e,t,n){if(!(!!(void 0===e||!e.length)||!e.some((function(e){return e.control===t})))){var a=e.findIndex((function(e){return e.control===t}));return!(a<0)&&[].concat(d(e))[a][n]}return null};"undefined"!=typeof advgb_block_controls_vars&&void 0!==advgb_block_controls_vars.non_supported&&advgb_block_controls_vars.non_supported.length>0&&(S=[].concat(d(S),d(advgb_block_controls_vars.non_supported)),S=[].concat(d(new Set(S)))),h("blocks.registerBlockType","advgb/blockControls",(function(e){return!S.includes(e.name)&&P()&&(e.attributes=o(e.attributes,{advgbBlockControls:{type:"array",items:{type:"object"},default:[]}})),e})),h("editor.BlockEdit","advgb/addBlockControls",E((function(e){return function(t){function n(e){var t;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,n);var a=function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t=n.__proto__||Object.getPrototypeOf(n)).call.apply(t,[this].concat(d(e))));return a.state={taxModOptions:[],termOptions:[],searchTermWord:"",initArchive:!0,updateTaxLabels:!1},a.isPost=a.isPost.bind(a),a}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(n,t),r(n,[{key:"getTermSlugs",value:function(e){var t=this,n=(this.getTaxonomies(),[]);return e.forEach((function(e){var a=t.getTaxonomies(),r=a.findIndex((function(t){return t.slug===e}));a[r].terms.forEach((function(e){n.push(e.slug)}))})),n}},{key:"getTaxonomies",value:function(){return void 0!==advgb_block_controls_vars.taxonomies&&advgb_block_controls_vars.taxonomies.length>0?advgb_block_controls_vars.taxonomies:[]}},{key:"getUserRoles",value:function(){return void 0!==advgb_block_controls_vars.user_roles&&advgb_block_controls_vars.user_roles.length>0?advgb_block_controls_vars.user_roles:[]}},{key:"getTerms",value:function(e){var t=this,n=(this.getTaxonomies(),[]);return e.forEach((function(e){var a=t.getTaxonomies(),r=a.findIndex((function(t){return t.slug===e}));a[r].terms.forEach((function(e){n.push({slug:e.slug,title:e.title+" ("+a[r].title+")"})}))})),n}},{key:"getPages",value:function(){return void 0!==advgb_block_controls_vars.page&&advgb_block_controls_vars.page.length>0?advgb_block_controls_vars.page:[]}},{key:"changeControlKey",value:function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"",a=this.props,r=a.attributes,l=a.setAttributes,c=r.advgbBlockControls,i={control:"schedule",enabled:!0,dateFrom:null,dateTo:null,recurring:!1},s={control:"user_role",enabled:!0,roles:[],approach:"public"},g={control:"archive",enabled:!0,taxonomies:[],approach:"exclude"},m={control:"page",enabled:!0,pages:[],approach:"exclude"},h=!(void 0===c||!c.length),v=!(!h||!c.some((function(t){return t.control===e})));if(v){var b=c.findIndex((function(t){return t.control===e}));if(b<0)return!1;var p=[].concat(d(c)),f=p[b];p[b]="boolean"==typeof f[t]?o({},p[b],u({},t,!f[t])):o({},p[b],u({},t,n)),l({advgbBlockControls:p})}else if(h&&!v)switch(e){case"schedule":l({advgbBlockControls:[].concat(d(c),[i])});break;case"user_role":l({advgbBlockControls:[].concat(d(c),[s])});break;case"archive":l({advgbBlockControls:[].concat(d(c),[g])});break;case"page":l({advgbBlockControls:[].concat(d(c),[m])})}else switch(e){case"schedule":l({advgbBlockControls:[i]});break;case"user_role":l({advgbBlockControls:[s]});break;case"archive":l({advgbBlockControls:[g]});break;case"page":l({advgbBlockControls:[m]})}}},{key:"changeArchiveControl",value:function(e,t){var n=this,a=this.props,r=a.attributes,l=a.setAttributes,c=r.advgbBlockControls,i=[],s=c.findIndex((function(e){return"archive"===e.control}));if(s<0)return!1;var g=[].concat(d(c));if("taxonomies"===e)t.forEach((function(e){var t=g[s].taxonomies.findIndex((function(t){return t.tax===e}));if(-1===t)i.push({tax:e,terms:[],all:!0});else{var n=g[s].taxonomies[t].terms.length?g[s].taxonomies[t].terms:[];n.length;i.push({tax:e,terms:n,all:!n.length})}})),g[s]=o({},g[s],u({},"taxonomies",i)),l({advgbBlockControls:g});else if("terms"===e){var m={},h=this.currentArchiveControl("taxonomies");t.forEach((function(e){var t=n.state.termOptions.find((function(t){return t.slug===e}));void 0===m[t.tax]&&(m[t.tax]=[]);g[s].taxonomies.findIndex((function(e){return e.tax===t.tax}));h.includes(t.tax)&&m[t.tax].push(e)})),Object.keys(m).forEach((function(e){var t=g[s].taxonomies.findIndex((function(t){return t.tax===e}));t>=0&&(g[s].taxonomies[t]={tax:e,terms:m[e],all:!m[e].length})})),h.forEach((function(e){if(!Object.keys(m).includes(e)){var t=g[s].taxonomies.findIndex((function(t){return t.tax===e}));t>=0&&(g[s].taxonomies[t]={tax:e,terms:[],all:!0})}})),l({advgbBlockControls:g})}}},{key:"currentArchiveControl",value:function(e){var t=this.props,n=t.attributes,a=(t.setAttributes,n.advgbBlockControls),r=[],o=D(a,"archive","taxonomies").length?D(a,"archive","taxonomies"):[];return"taxonomies"===e?o.forEach((function(e){r.push(e.tax)})):"terms"===e&&o.forEach((function(e){e.terms.forEach((function(e){r.push(e)}))})),r}},{key:"taxonomiesChanged",value:function(){var e=this,t=this.props.attributes.advgbBlockControls,n=D(t,"archive","terms")?D(t,"archive","terms"):[],a=D(t,"archive","taxonomies")?D(t,"archive","taxonomies"):[];if(n.length){var r=[];n.forEach((function(t){var n=e.state.termOptions.findIndex((function(e){return e.slug===t}));a.includes(e.state.termOptions[n].tax)&&r.push(e.state.termOptions[n].slug)})),this.changeControlKey("archive","terms",r)}this.setState({termOptions:this.state.termOptions.filter((function(t){return e.currentArchiveControl("taxonomies").includes(t.tax)}))}),this.modifyTaxLabels()}},{key:"initArchiveControl",value:function(){var e=this;this.props.attributes.advgbBlockControls;wp.apiFetch({path:wp.url.addQueryArgs("advgb/v1/terms",{taxonomies:this.currentArchiveControl("taxonomies"),ids:this.currentArchiveControl("terms")})}).then((function(t){e.modifyTaxLabels(),e.setState({termOptions:t,initArchive:!1,updateTaxLabels:!1})}))}},{key:"iniTaxLabels",value:function(){var e=[];return this.getTaxonomies().forEach((function(t){e.push({slug:t.slug,title:v(b("All %s terms","advanced-gutenberg"),t.title),singular:t.title})})),e}},{key:"modifyTaxLabels",value:function(){var e=this.props.attributes.advgbBlockControls,t=D(e,"archive","taxonomies").length?D(e,"archive","taxonomies"):[],n=[].concat(d(this.state.taxModOptions));n.forEach((function(e,a){var r=t.find((function(t){return e.slug===t.tax})),l=o({},n[a]);l.title=v(void 0!==r&&r.terms.length?b("Selected %s terms","advanced-gutenberg"):b("All %s terms","advanced-gutenberg"),l.singular),n[a]=l})),this.setState({taxModOptions:n,updateTaxLabels:!1})}},{key:"searchTerms",value:function(){var e=this,t=this.state,n=t.termOptions,a=t.searchTermWord;this.props.attributes.advgbBlockControls;wp.apiFetch({path:wp.url.addQueryArgs("advgb/v1/terms",{search:a,taxonomies:this.currentArchiveControl("taxonomies")})}).then((function(t){var a=[].concat(d(n),d(t));a=Array.from(new Set(a.map((function(e){return e.slug})))).map((function(e){return a.find((function(t){return t.slug===e}))})),e.setState({termOptions:a})}))}},{key:"isPost",value:function(){return wp.data.select("core/editor")&&wp.data.select("core/editor").getCurrentPostId()}},{key:"getTimezoneLabel",value:function(){return void 0!==advgbBlocks.timezone&&advgbBlocks.timezone.length?advgbBlocks.timezone.replace(/_/g," "):b("WordPress settings timezone","advanced-gutenberg")}},{key:"getTimezoneSlug",value:function(){return void 0!==advgbBlocks.timezone&&advgbBlocks.timezone.length?advgbBlocks.timezone:"UTC"}},{key:"componentDidMount",value:function(){this.setState({taxModOptions:this.iniTaxLabels()})}},{key:"componentDidUpdate",value:function(e,t){var n=this.props,a=n.attributes,r=n.isSelected,o=n.name,l=a.advgbBlockControls,c=e.attributes.advgbBlockControls,i=this.state,s=i.searchTermWord,u=i.initArchive,d=t.searchTermWord;!this.isPost()&&!S.includes(o)&&r&&u&&A(advgb_block_controls_vars.controls.archive)&&D(l,"archive","enabled")&&this.currentArchiveControl("taxonomies").length&&this.currentArchiveControl("terms").length&&this.initArchiveControl(),s!==d&&s.length>2&&this.searchTerms(),!this.isPost()&&A(advgb_block_controls_vars.controls.archive)&&D(l,"archive","enabled")&&(D(c,"archive","taxonomies")!==D(l,"archive","taxonomies")||this.state.updateTaxLabels)&&this.taxonomiesChanged()}},{key:"render",value:function(){var t=this,n=this.props,a=n.attributes,r=(n.setAttributes,a.advgbBlockControls);return[this.props.isSelected&&!S.includes(this.props.name)&&P()&&React.createElement(y,{key:"advgb-bc-controls"},React.createElement(k,{title:b("Block Controls","advanced-gutenberg"),icon:"visibility",initialOpen:!1,className:B(r)?"advgb-feature-icon-active":""},A(advgb_block_controls_vars.controls.schedule)&&React.createElement(w,null,React.createElement(C,{label:b("Schedule","advanced-gutenberg"),help:D(r,"schedule","enabled")?b("Choose when to start showing and/or stop showing this block.","advanced-gutenberg"):"",checked:D(r,"schedule","enabled"),onChange:function(){return t.changeControlKey("schedule","enabled")}}),D(r,"schedule","enabled")&&React.createElement(w,null,React.createElement("div",{style:{marginBottom:30}},React.createElement(i.AdvDateTimeControl,{buttonLabel:b("Now","advanced-gutenberg"),dateLabel:b("Start showing","advanced-gutenberg"),date:D(r,"schedule","dateFrom"),onChangeDate:function(e){return t.changeControlKey("schedule","dateFrom",e)},onDateClear:function(){return t.changeControlKey("schedule","dateFrom",null)},onInvalidDate:!1}),React.createElement(i.AdvDateTimeControl,{buttonLabel:b("Never","advanced-gutenberg"),dateLabel:b("Stop showing","advanced-gutenberg"),date:D(r,"schedule","dateTo")?D(r,"schedule","dateTo"):null,onChangeDate:function(e){return t.changeControlKey("schedule","dateTo",e)},onDateClear:function(){return t.changeControlKey("schedule","dateTo",null)},onInvalidDate:function(e){if(D(r,"schedule","dateFrom")){var t=new Date(e.getTime());t.setHours(0,0,0,0);var n=new Date(D(r,"schedule","dateFrom"));return n.setHours(0,0,0,0),t.getTime()<n.getTime()}}}),D(r,"schedule","dateFrom")>D(r,"schedule","dateTo")&&React.createElement(_,{className:"advgb-notice-sidebar",status:"warning",isDismissible:!1},b('"Stop showing" date should be after "Start showing" date!',"advanced-gutenberg")),D(r,"schedule","dateFrom")&&D(r,"schedule","dateTo")&&React.createElement(C,{label:b("Recurring","advanced-gutenberg"),checked:D(r,"schedule","recurring"),onChange:function(){return t.changeControlKey("schedule","recurring")},help:b("If Recurring is enabled, this block will be displayed every year between the selected dates.","advanced-gutenberg")}),React.createElement(i.AdvDaysControl,{label:b("On these days (optional)","advanced-gutenberg"),days:D(r,"schedule","days")?D(r,"schedule","days"):[],onChangeDays:function(e){return t.changeControlKey("schedule","days",e)}}),React.createElement("label",{style:{marginBottom:8,display:"block"}},b("Between these times (optional)","advanced-gutenberg")),React.createElement(i.AdvTimeControl,{label:b("From","advanced-gutenberg"),currentTime:D(r,"schedule","timeFrom")?D(r,"schedule","timeFrom"):null,onChangeTime:function(e){return t.changeControlKey("schedule","timeFrom",e)},onTimeClear:function(){return t.changeControlKey("schedule","timeFrom",null)}}),React.createElement(i.AdvTimeControl,{label:b("To","advanced-gutenberg"),currentTime:D(r,"schedule","timeTo")||null,onChangeTime:function(e){return t.changeControlKey("schedule","timeTo",e)},onTimeClear:function(){return t.changeControlKey("schedule","timeTo",null)}}),D(r,"schedule","timeFrom")&&D(r,"schedule","timeTo")&&"01/01/2020T"+D(r,"schedule","timeFrom")>="01/01/2020T"+D(r,"schedule","timeTo")&&React.createElement(_,{className:"advgb-notice-sidebar",status:"warning",isDismissible:!1},b('"To" time should be after "From" time!',"advanced-gutenberg")),(D(r,"schedule","timeFrom")&&!D(r,"schedule","timeTo")||!D(r,"schedule","timeFrom")&&D(r,"schedule","timeTo"))&&React.createElement(_,{className:"advgb-notice-sidebar",status:"warning",isDismissible:!1},b('Please choose "From" time and "To" time.',"advanced-gutenberg")),React.createElement(i.AdvTimezoneControl,{label:b("Timezone","advanced-gutenberg"),defaultTimezone:this.getTimezoneLabel(),value:D(r,"schedule","timezone")?D(r,"schedule","timezone"):this.getTimezoneSlug(),onChangeTimezone:function(e){return t.changeControlKey("schedule","timezone",e)}})))),A(advgb_block_controls_vars.controls.user_role)&&React.createElement(w,null,React.createElement(C,{label:b("User roles","advanced-gutenberg"),help:D(r,"user_role","enabled")?b("Choose which users can see this block.","advanced-gutenberg"):"",checked:D(r,"user_role","enabled"),onChange:function(){return t.changeControlKey("user_role","enabled")}}),D(r,"user_role","enabled")&&React.createElement(w,null,React.createElement("div",{className:"advgb-revert-mb"},React.createElement(T,{value:D(r,"user_role","approach"),options:[{value:"public",label:b("Show to everyone","advanced-gutenberg")},{value:"hidden",label:b("Hide from everyone","advanced-gutenberg")},{value:"login",label:b("Show to logged in users","advanced-gutenberg")},{value:"logout",label:b("Show to logged out users","advanced-gutenberg")},{value:"include",label:b("Show to the selected user roles","advanced-gutenberg")},{value:"exclude",label:b("Hide from the selected user roles","advanced-gutenberg")}],onChange:function(e){return t.changeControlKey("user_role","approach",e)}})),("include"===D(r,"user_role","approach")||"exclude"===D(r,"user_role","approach"))&&React.createElement(w,null,React.createElement(x,{multiple:!0,label:b("Select user roles","advanced-gutenberg"),placeholder:b("Search","advanced-gutenberg"),suggestions:(0,s.getOptionSuggestions)(this.getUserRoles()),maxSuggestions:10,value:(0,s.getOptionTitles)(D(r,"user_role","roles")?D(r,"user_role","roles"):[],this.getUserRoles()),onChange:function(e){t.changeControlKey("user_role","roles",(0,s.getOptionSlugs)(e,t.getUserRoles()))},__experimentalExpandOnFocus:!0}),("include"===D(r,"user_role","approach")||"exclude"===D(r,"user_role","approach"))&&!D(r,"user_role","roles").length&&React.createElement(_,{className:"advgb-notice-sidebar",status:"warning",isDismissible:!1,style:{marginBottom:30}},b("Please select at least one user role.","advanced-gutenberg"))))),!this.isPost()&&React.createElement(w,null,A(advgb_block_controls_vars.controls.archive)&&React.createElement(w,null,React.createElement(C,{label:b("Term archives","advanced-gutenberg"),help:D(r,"archive","enabled")?b("Choose on which taxonomies and terms archive pages your blocks can be displayed.","advanced-gutenberg"):"",checked:D(r,"archive","enabled"),onChange:function(){return t.changeControlKey("archive","enabled")}}),D(r,"archive","enabled")&&React.createElement(w,null,React.createElement("div",{className:"advgb-revert-mb--disabled",style:{marginBottom:20}},React.createElement(T,{value:D(r,"archive","approach"),options:[{value:"include",label:b("Show for selected terms","advanced-gutenberg")},{value:"exclude",label:b("Hide for selected terms","advanced-gutenberg")}],onChange:function(e){return t.changeControlKey("archive","approach",e)}})),React.createElement(x,{multiple:!0,label:b("Select taxonomies","advanced-gutenberg"),placeholder:b("Search taxonomies","advanced-gutenberg"),suggestions:(0,s.getOptionSuggestions)(this.state.taxModOptions||this.getTaxonomies()),maxSuggestions:10,value:(0,s.getOptionTitles)(this.currentArchiveControl("taxonomies"),this.state.taxModOptions||this.getTaxonomies()),onChange:function(e){t.changeArchiveControl("taxonomies",(0,s.getOptionSlugs)(e,t.state.taxModOptions||t.getTaxonomies()))},__experimentalExpandOnFocus:!0}),D(r,"archive","taxonomies").length>0&&React.createElement(w,null,React.createElement(x,{multiple:!0,label:b("Filter terms","advanced-gutenberg"),placeholder:b("Search terms","advanced-gutenberg"),suggestions:(0,s.getOptionSuggestions)(this.state.termOptions),maxSuggestions:10,value:(0,s.getOptionTitles)(this.currentArchiveControl("terms"),this.state.termOptions),onChange:function(e){t.changeArchiveControl("terms",(0,s.getOptionSlugs)(e,t.state.termOptions)),t.setState({updateTaxLabels:!0})},onInputChange:function(e){t.setState({searchTermWord:e})},__experimentalShowHowTo:!1}),React.createElement("div",{className:"advgb-revert-mb--disabled components-form-token-field__help",style:{marginBottom:20}},b("Use this filter to apply only to some terms.","advanced-gutenberg"))))),A(advgb_block_controls_vars.controls.page)&&React.createElement(w,null,React.createElement(C,{label:b("Pages","advanced-gutenberg"),help:D(r,"page","enabled")?b("Choose in which pages this block can be displayed.","advanced-gutenberg"):"",checked:D(r,"page","enabled"),onChange:function(){return t.changeControlKey("page","enabled")}}),D(r,"page","enabled")&&React.createElement(w,null,React.createElement("div",{className:"advgb-revert-mb"},React.createElement(T,{value:D(r,"page","approach"),options:[{value:"include",label:b("Show on the selected pages","advanced-gutenberg")},{value:"exclude",label:b("Hide on the selected pages","advanced-gutenberg")}],onChange:function(e){return t.changeControlKey("page","approach",e)}})),("include"===D(r,"page","approach")||"exclude"===D(r,"page","approach"))&&React.createElement(x,{multiple:!0,label:b("Select pages","advanced-gutenberg"),placeholder:b("Search","advanced-gutenberg"),suggestions:(0,s.getOptionSuggestions)(this.getPages()),maxSuggestions:10,value:(0,s.getOptionTitles)(D(r,"page","pages")?D(r,"page","pages"):[],this.getPages()),onChange:function(e){t.changeControlKey("page","pages",(0,s.getOptionSlugs)(e,t.getPages()))},__experimentalExpandOnFocus:!0})))))),React.createElement(e,o({key:"block-edit-advgb-dates"},this.props))]}}]),n}(R)}),"withEditControls")),h("editor.BlockListBlock","advgb/loadBackendBlockControls",E((function(e){return function(t){if(!S.includes(t.name)&&p(t.name,"advgb/blockControls",!0)&&P()){var n=t.attributes.advgbBlockControls,a=!1===t.isSelected&&B(n)?"advgb-bc-editor-preview":"";return React.createElement(e,o({},t,{className:(0,c.default)(t.className,a),advgbBlockControls:""+n}))}return React.createElement(e,t)}}),"withAttributes"))}}(wp.i18n,wp.hooks,wp.blocks,wp.blockEditor,wp.components,wp.compose,wp.element)},function(e,t,n){var a;
/*!
	Copyright (c) 2018 Jed Watson.
	Licensed under the MIT License (MIT), see
	http://jedwatson.github.io/classnames
*/!function(){"use strict";var n={}.hasOwnProperty;function r(){for(var e=[],t=0;t<arguments.length;t++){var a=arguments[t];if(a){var o=typeof a;if("string"===o||"number"===o)e.push(a);else if(Array.isArray(a)){if(a.length){var l=r.apply(null,a);l&&e.push(l)}}else if("object"===o){if(a.toString!==Object.prototype.toString&&!a.toString.toString().includes("[native code]")){e.push(a.toString());continue}for(var c in a)n.call(a,c)&&a[c]&&e.push(c)}}}return e.join(" ")}e.exports?(r.default=r,e.exports=r):void 0===(a=function(){return r}.apply(t,[]))||(e.exports=a)}()},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var a=function(){function e(e,t){for(var n=0;n<t.length;n++){var a=t[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(t,n,a){return n&&e(t.prototype,n),a&&e(t,a),t}}(),r=function(e,t){if(Array.isArray(e))return e;if(Symbol.iterator in Object(e))return function(e,t){var n=[],a=!0,r=!1,o=void 0;try{for(var l,c=e[Symbol.iterator]();!(a=(l=c.next()).done)&&(n.push(l.value),!t||n.length!==t);a=!0);}catch(e){r=!0,o=e}finally{try{!a&&c.return&&c.return()}finally{if(r)throw o}}return n}(e,t);throw new TypeError("Invalid attempt to destructure non-iterable instance")};t.AdvDateTimeControl=function(e){var t=k(!1),n=r(t,2),a=n[0],o=n[1],l=function(){o(!a)},c=e.buttonLabel,i=e.dateLabel,s=e.date,u=e.onChangeDate,m=e.onDateClear,b=e.onInvalidDate;return React.createElement(C,null,React.createElement("div",{className:"advgb-advcalendar-control"},React.createElement("label",null,i),React.createElement("div",null,React.createElement(d,{isLink:!0,icon:"calendar",onClick:l},React.createElement(v,{text:x("Change date","advanced-gutenberg")},React.createElement("span",null,s?moment(s).format("MMMM DD YYYY, h:mm a"):c))),s&&React.createElement(d,{icon:"no-alt",className:"advgb-advcalendar-remove-icon",onClick:function(){return m()}}))),a&&React.createElement(h,{className:"advgb-advcalendar-popover",onClose:o.bind(null,!1),resize:!1},React.createElement("label",{className:"advgb-advcalendar-popover-label"},i,React.createElement(d,{icon:"no-alt",className:"advgb-advcalendar-remove-icon",onClick:l})),React.createElement(g,{currentDate:s,onChange:u,is12Hour:!0,isInvalidDate:b})))},t.AdvDaysControl=function(e){var t=[{slug:0,label:T("S","Sunday first letter","advanced-gutenberg")},{slug:1,label:x("M","advanced-gutenberg")},{slug:2,label:T("T","Tuesday first letter","advanced-gutenberg")},{slug:3,label:x("W","advanced-gutenberg")},{slug:4,label:T("T","Thursday first letter","advanced-gutenberg")},{slug:5,label:x("F","advanced-gutenberg")},{slug:6,label:T("S","Saturday first letter","advanced-gutenberg")}],n=e.label,a=e.days,o=e.onChangeDays,l=k(a),c=r(l,2),s=c[0],u=c[1];function d(e){return s.some((function(t){return t===e}))}return React.createElement(C,null,React.createElement("div",{className:"advgb-checkbox-wrapper"},React.createElement("label",null,n),React.createElement("div",{className:"advgb-checkbox-inline"},t.map((function(e){return React.createElement(m,{label:e.label,checked:d(e.slug),onChange:function(){return function(e){var n=void 0;if(d(e))n=s.filter((function(t){return t!==e}));else{var a=t.find((function(t){return t.slug===e}));n=[].concat(i(s),[a.slug])}var r=[].concat(i(new Set(n)));u(r),o&&o(n)}(e.slug)}})})))))},t.AdvTimeControl=function(e){var t=e.label,n=e.currentTime,a=e.onChangeTime,r=e.onTimeClear;return React.createElement(R,{label:t,currentTime:n,onChangeTime:a,onTimeClear:r})},t.AdvTimezoneControl=function(e){var t=e.label,n=e.defaultTimezone;return React.createElement(C,null,E("advgb.timezoneControl",React.createElement(C,null,React.createElement("div",{style:{marginTop:10,marginBottom:30}},React.createElement("div",{style:{marginBottom:6}},t,React.createElement("span",{style:{float:"right",marginRight:5}},React.createElement(p,{icon:"lock"}),React.createElement("a",{href:"https://publishpress.com/links/blocks",class:"advgb-pro-ad-btn",target:"_blank"},x("Upgrade to Pro","advanced-gutenberg")))),React.createElement(b,{value:n,options:[{label:n,value:n}],disabled:!0}))),e))};var o,l=n(4),c=(o=l)&&o.__esModule?o:{default:o};function i(e){if(Array.isArray(e)){for(var t=0,n=Array(e.length);t<e.length;t++)n[t]=e[t];return n}return Array.from(e)}var s=wp.components,u=s.ButtonGroup,d=s.Button,g=s.DateTimePicker,m=(s.TextControl,s.CheckboxControl),h=s.Popover,v=s.Tooltip,b=s.SelectControl,p=s.Icon,f=wp.element,y=f.Component,C=f.Fragment,k=f.useState,_=wp.i18n,x=_.__,T=_._x,E=wp.hooks.applyFilters;var R=function(e){function t(e){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t);var n=function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,e));return n.state={onChangeTime:null,currentTime:n.props.currentTime||null,hours:null,minutes:null,meridian:"am",onInit:!0},n}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,e),a(t,[{key:"componentWillMount",value:function(){var e=this.state,t=e.onChangeTime,n=e.currentTime,a=e.onInit;this.props.onChangeTime!==t&&this.setState({onChangeTime:this.props.onChangeTime}),this.props.currentTime!==n&&this.setState({currentTime:this.props.currentTime}),n&&n.includes(":")&&a&&this.setState({hours:n.split(":")[0],minutes:n.split(":")[1],meridian:parseInt(n.split(":")[0])>11?"pm":"am",onInit:!1})}},{key:"componentDidUpdate",value:function(e,t){var n=this.props,a=(n.onChangeTime,n.currentTime,this.state),r=a.hours,o=a.minutes,l=a.meridian,i=t.hours,s=t.minutes,u=t.meridian;if(r!==i||o!==s||l!==u){if(!r&&!o)return;r&&!o&&this.setState({minutes:"00"}),o&&!r&&this.setState({hours:"01"});var d=this.appendZero(c.default.to24Hour({hour:parseInt(r),meridiem:l}))+":"+o+":00";this.props.onChangeTime(d)}}},{key:"appendZero",value:function(e){if(!isNaN(e)){var t=parseInt(e);return t>9?t:"0"+t}}},{key:"render",value:function(){var e=this,t=this.state,n=(t.onChangeTime,t.currentTime,t.hours),a=t.minutes,r=t.meridian;return React.createElement(C,null,React.createElement("div",{className:"advgb-advtime-control"},React.createElement("label",null,this.props.label),React.createElement("div",{className:"advgb-advtime-hours-minutes"},React.createElement("input",{type:"text",value:n?this.appendZero(c.default.to12Hour(parseInt(n)).hour):"",onChange:function(t){var n=Math.max(1,Math.min(12,Number(t.target.value)));e.setState({hours:e.appendZero(n)})},onKeyDown:function(t){var n=Number(t.target.value);"ArrowUp"===t.key&&n<12?e.setState({hours:e.appendZero(n+1)}):"ArrowDown"===t.key&&n>1&&e.setState({hours:e.appendZero(n-1)})},placeholder:"--"}),React.createElement("span",null,":"),React.createElement("input",{type:"text",value:a||"",onChange:function(t){var n=Math.max(0,Math.min(59,Number(t.target.value)));e.setState({minutes:e.appendZero(n)})},onKeyDown:function(t){var n=Number(t.target.value);"ArrowUp"===t.key&&n<59?e.setState({minutes:e.appendZero(n+1)}):"ArrowDown"===t.key&&n>0&&e.setState({minutes:e.appendZero(n-1)})},placeholder:"--"})),React.createElement(u,{className:"advgb-advtime-meridian"},React.createElement(d,{variant:null===r||"am"===r?"primary":"secondary",onClick:function(){e.setState({meridian:"am"})},disabled:!n||!a},x("AM","advanced-gutenberg")),React.createElement(d,{variant:"pm"===r?"primary":"secondary",onClick:function(){e.setState({meridian:"pm"})},disabled:!n||!a},x("PM","advanced-gutenberg"))),n&&a&&React.createElement(d,{className:"advgb-advtime-remove-icon",icon:"no-alt",onClick:function(){e.props.onTimeClear(),e.setState({hours:null,minutes:null,meridian:"am"})}})))}}]),t}(y);t.default=R},function(e,t,n){"use strict";e.exports={to12Hour:function(e){var t=e<12?"am":"pm";return{hour:(e+11)%12+1,meridiem:t,meridian:t}},to24Hour:function(e){return("am"===(e.meridiem||e.meridian)?0:12)+e.hour%12}}},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.getOptionSuggestions=function(e){return e.map((function(e){return e.title}))},t.getOptionTitles=function(e,t){var n=[];return null!==t&&(n=e.map((function(e){var n=t.find((function(t){return t.slug===e}));return void 0!==n&&n?n.title:e}))),n},t.getOptionSlugs=function(e,t){var n=[];return e.map((function(e){var a=t.find((function(t){return t.title===e}));void 0!==a&&n.push(a.slug)})),n}}]);
//# sourceMappingURL=block-controls.js.map