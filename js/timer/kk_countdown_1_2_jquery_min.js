(function(e){e.fn.kkCountDown=function(t){function n(e){s="";if(e<10)e="0"+e;return e}function r(){for(var s=e(".kkcount-down"),o=0;o<s.length;o++){var u=new Date;u=Math.floor(u.getTime()/1e3);var a=s.eq(o).attr("time")-u;if(a<=0)if(t.callback===false)s.eq(o).html(t.afterCount);else if(typeof t.callback=="function"){t.callback.call();s.eq(o).removeClass("kkcount-down");s.eq(o).html(" ")}else s.eq(o).html(t.afterCount);else if(a<=86400){u=n(a%60);a=Math.floor(a/60);var l=n(a%60);a=Math.floor(a/60);var c=n(a%24);a=a=Math.floor(a/24);var h=a==1?t.dayText:t.daysText;t.displayDays?s.eq(o).html('<p class="show_timer_normal">'+c+":"+l+":"+u+"</p>"):s.eq(o).html('<span style="color:'+t.colorTextDay+';">'+c+":"+l+":"+u+"</span>")}else{u=n(a%60);a=Math.floor(a/60);l=n(a%60);a=Math.floor(a/60);c=n(a%24);a=a=Math.floor(a/24);h=a==1?t.dayText:t.daysText;t.displayDays?s.eq(o).html('<p class="show_timer_normal">'+a+" "+h+" "+c+":"+l+":"+u+"</p>"):s.eq(o).html('<span style="color:'+t.colorText+';">'+c+":"+l+":"+u+"</span>")}t.addClass&&s.eq(o).addClass(t.addClass)}setTimeout(function(){r()},1e3)}t=e.extend({dayText:"day",daysText:"days",colorText:"#000000",colorTextDay:"#cf0000",afterCount:"---",displayDays:true,addClass:false,callback:false},t);r()}})(jQuery)