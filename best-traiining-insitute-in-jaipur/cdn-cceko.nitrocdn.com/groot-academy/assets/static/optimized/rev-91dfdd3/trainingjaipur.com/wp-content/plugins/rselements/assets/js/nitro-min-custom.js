(function(e){"use strict";e(document).ready(function(){e('[data-toggle="tooltip"]').tooltip()});var t=e(".rsaddon_pro_box");if(t.length){e(".rsaddon_pro_box").magnificPopup({delegate:".pointer-events",removalDelay:500,callbacks:{beforeOpen:function(){this.st.mainClass=this.st.el.attr("data-effect")}},midClick:true})}e.fn.skillBars=function(t){var a=e.extend({from:0,to:false,speed:1e3,interval:100,decimals:0,onUpdate:null,onComplete:null,classes:{skillBarBar:".skillbar-bar",skillBarPercent:".skill-bar-percent"}},t);return this.each(function(){var t=e(this),l=a.to!=false?a.to:parseInt(t.attr("data-percent"));if(l>100){l=100};var n=a.from,r=Math.ceil(a.speed/a.interval),i=(l-n)/r,o=0,s=setInterval(c,a.interval);t.find(a.classes.skillBarBar).animate({width:parseInt(t.attr("data-percent"))+"%"},a.speed);function c(){n+=i;o++;e(t).find(a.classes.skillBarPercent).text(n.toFixed(a.decimals)+"%");if(typeof a.onUpdate=="function"){a.onUpdate.call(t,n)}if(o>=r){clearInterval(s);n=l;if(typeof a.onComplete=="function"){a.onComplete.call(t,n)}}}})}})(jQuery);