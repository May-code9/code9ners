$(document).ready(function(){"use strict";var o=$("#copyright-year"),initialDate=new Date();if(o.length){o.text(initialDate.getFullYear());}
$('#stuck_container').TMStickUp({});$("a[href*=#]:not([href=#])").on("click",function(){if(location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")||location.hostname===this.hostname){{var e=$(this.hash);this.hash}
if(e=e.length?e:$("[href="+this.hash.slice(1)+"]"),e.length)return $("html, body").animate({scrollTop:e.offset().top},1e3),!1}});});
