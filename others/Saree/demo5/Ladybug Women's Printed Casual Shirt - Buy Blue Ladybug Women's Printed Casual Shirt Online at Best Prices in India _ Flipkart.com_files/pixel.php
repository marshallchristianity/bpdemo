var pixel={params:"?account_id=VIZVRM857",pageStatusFlag:false,checkMyReadyState:null,pixelFireStatus:false,parse:function(a){var g=document,e="undefined",b=encodeURIComponent;var f=("https:"==document.location.protocol?"https:":"http:")+"//sg-pl.vizury.com/analyze/analyze.php";var d=false;if(typeof a===e||a==="0"||!a){a=false;}else{a=true;}try{pixel.checkMyReadyState=setInterval(function(){try{pixel.pageloadStatus();if(pixel.pageStatusFlag&&!pixel.pixelFireStatus){var n=g.URL;var m=1,v=1,l="";var I="",E="",B="",j="",S="",G="",R="",Q="",L="";var k="",P="";var q="",K,w,F,H,z,p,x=0;var r=[],o=["","",""],J;var y=false,u=false,D=false,t;var C=false,M=false;var h="",N=0;if(typeof FKART!==e&&FKART&&FKART.LOGGEDIN){M=true;}else{H=pixel.getElementsByClass("account-dropdown","fk-mainhead-id","ul");if(H[0]){M=true;}}if(M){pixel.setCookie("__isReg","true",180);}else{M=pixel.getCookie("__isReg");}if(typeof s!==e&&s){q=s;if(q.eVar14&&/Out of Stock/i.test(q.eVar14)){C=true;}}H=pixel.getElementsByClass("cart-dialog","","");if(/flipkart\.com\/orderresponse/i.test(n)||(q&&q.pageName&&/Order Confirmation|orderresponse/i.test(q.pageName))){y=true;}else{if((H[0]&&H[0].style.display==="block")||/flipkart\.com\/phyco\/init|flipkart\.com\/viewcart/i.test(n)){u=true;}else{if(/\/p\//i.test(n)&&!C){D=true;}}}K=g.getElementById("item_count_in_cart_top_displayed");if(K&&pixel.cleanUpString(K.innerHTML)>0){t=true;}if(y){J=pixel.getPidsFromBasket();if(q&&q.purchaseID){k=s.purchaseID;}if(typeof basket!==e&&basket&&basket.amount){P=basket.amount;}if(!P){K=g.getElementById("fk-mainbody-id");if(K){F=K.getElementsByTagName("span");for(x=0;x<F.length;x++){if(F[x].className=="order_total"){P=F[x].innerHTML.replace(/[^0-9]/g,"");break;}}}}if(a){m=2;}l="e500";pixel.params+="&param="+l+"&section="+v+"&level="+m+"&orderid="+k+"&orderprice="+P+"&lc="+a+"&currency=INR";pixel.params+="&pid1="+J.pidArr[0]+"&pid2="+J.pidArr[1]+"&pid3="+J.pidArr[2]+"&price1="+J.priceArr[0]+"&price2="+J.priceArr[1]+"&price3="+J.priceArr[2]+"&quantity1="+J.quantityArr[0]+"&quantity2="+J.quantityArr[1]+"&quantity3="+J.quantityArr[2];d=true;}else{if(u){J=pixel.getPidsFromBasket();if(!J.pidArr[0]&&q&&q.products){o=q.products.match(/;(.{16});/g);for(x=0;x<o.length;x++){if(o[x]){J.pidArr[x]=o[x].replace(/;/g,"");}}}pixel.setCookie("__cartItms",J.pidArr[0]+"::"+J.pidArr[1]+"::"+J.pidArr[2],7);l="e400";pixel.params+="&param="+l+"&section="+v+"&level="+m+"&pid1="+J.pidArr[0]+"&pid2="+J.pidArr[1]+"&pid3="+J.pidArr[2]+"&price1="+J.priceArr[0]+"&price2="+J.priceArr[1]+"&price3="+J.priceArr[2]+"&quantity1="+J.quantityArr[0]+"&quantity2="+J.quantityArr[1]+"&quantity3="+J.quantityArr[2];d=true;}else{if(t){o=pixel.getCookie("__cartItms");o=o.split("::");if(!o[0]){o=["","",""];l="e100";}else{m=2;l="e400";}pixel.params+="&param="+l+"&section="+v+"&level="+m+"&pid1="+o[0]+"&pid2="+o[1]+"&pid3="+o[2];d=true;}else{if(D){if(/\?pid=[^\?&#\/]+/i.test(n)){I=n.match(/\?pid=([^\?&#\/]+)/i)[1];}else{if(q.products&&/;\w+;/.test(q.products)){I=q.products.match(/;(\w+);/)[1];}}H=pixel.getElementsByClass("clp-breadcrumb","fk-mainbody-id","div");if(H[0]){w=H[0].getElementsByTagName("li");for(x=0;x<w.length;x++){r[x]=pixel.cleanUpString(w[x].innerHTML);}E=r[r.length-1]?r[r.length-1]:"";}if(typeof FKART!=="undefined"&&FKART!==null){if(typeof FKART.analytics!=="undefined"&&FKART.analytics!==null){if(typeof FKART.analytics.category!=="undefined"&&FKART.analytics.category!==null){S=FKART.analytics.category;}if(typeof FKART.analytics.subcategory!=="undefined"&&FKART.analytics.subcategory!==null){Q=FKART.analytics.subcategory;}if(typeof FKART.analytics.vertical!=="undefined"&&FKART.analytics.vertical!==null){L=FKART.analytics.vertical;}}}if(!E){H=pixel.getElementsByClass("title","fk-mainbody-id","h1");if(H[0]&&H[0].innerHTML){E=pixel.cleanUpString(H[0].innerHTML);}}H=pixel.getElementsByClass("productImage","fk-mainbody-id","img");if(H[0]&&H[0].src){j=H[0].src;}else{z=g.getElementsByTagName("meta");for(x=0;x<z.length;x++){if(z[x].name==="og_image"&&z[x].content){j=z[x].content;j=j.replace(/200x200/,"400x400");}}}B=n.match(/([^&]+)/)[1];if(q.eVar48){G=q.eVar48;}else{H=pixel.getElementsByClass("selling-price","fk-mainbody-id","span");if(H[0]){p=pixel.cleanUpString(H[0].innerHTML);if(/\d+[\d.,]+/.test(p)){G=p.match(/(\d+[\d.,]+)/)[1];G=Number(G)?G:G.replace(/,/g,"");}}}K=g.getElementById("fk-mainbody-id");if(K){H=K.getElementsByTagName("div");for(N=0;N<H.length;N++){if(H[N].className==="fk-stars"){h=H[N].getAttribute("title");if(/(\d+)/.test(h)){h=h.match(/(\d+)/)[1];break;}}}H=K.getElementsByTagName("span");for(N=0;N<H.length;N++){if(H[N].className==="price"){p=pixel.cleanUpString(H[N].innerHTML);if(/\d+[\d.,]+/.test(p)){R=p.match(/(\d+[\d.,]+)/)[1];R=Number(R)?R:R.replace(/,/g,"");}break;}}}if(!/Mobiles|Cameras|Computers|Watches/i.test(S)){v=2;}if(M){m=2;}l="e300";pixel.params+="&param="+l+"&section="+v+"&level="+m+"&pid="+I+"&catid="+b(b(S))+"&subcat1id="+b(b(Q))+"&subcat2id="+b(b(L))+"&pname="+b(b(E));pixel.params+="&image="+b(b(j))+"&lp="+b(b(B))+"&old="+b(b(R))+"&new="+b(b(G))+"&misc="+h;pixel.params=pixel.smartTagValidation(l,pixel.params,I,S,Q,L);d=true;}else{l="e100";pixel.params+="&param="+l+"&section="+v+"&level="+m;d=true;}}}}pixel.params=pixel.params+"&referrer="+b(document.referrer)+pixel.viz_call_fp();if(d&&!pixel.pixelFireStatus){if(l=="e500"){var O=new Image();O.onload=function(){};O.src=f+pixel.params;}else{pixel.fireAnalyze(f+pixel.params);}pixel.pixelFireStatus=true;clearInterval(pixel.checkMyReadyState);}}}catch(A){pixel.fireAnalyze(f+pixel.params+"&param=999&error="+b(A));}},3000,"Javascript");}catch(c){pixel.fireAnalyze(f+pixel.params+"&param=999&error="+encodeURIComponent(c));}},pageloadStatus:function(){if(document.readyState==="interactive"||document.readyState==="complete"){pixel.pageStatusFlag=true;clearInterval(pixel.checkMyReadyState);}else{pixel.pageStatusFlag=false;}},getPidsFromBasket:function(){var b,i,a,j,d,e,h,g=["","",""],c=["","",""],f=["","",""];if(typeof basket!=="undefined"&&basket){h=basket;}if(h&&h.products){for(d=e=0;d<h.products.length&&e<3;d++){if(h.products[d]){if(h.products[d].identifier){g[e]=h.products[d].identifier;}if(h.products[d].amount){c[e]=h.products[d].amount;}if(h.products[d].quantity){f[e]=h.products[d].quantity;}e++;}}}if(!g[0]){b=document.getElementById("cart-tab-content");if(b){i=pixel.getElementsByClass("item-row","cart-tab-content","tr");if(i[0]){a=pixel.getElementsByClass("cell subtotal-cell","cart-tab-content","td");}for(d=e=0;d<i.length&&e<3;d++){j=i[d].getElementsByTagName("a");if(j[0]&&/\?pid=[^\?&#\/]+/i.test(j[0].href)){g[e]=j[0].href.match(/\?pid=([^\?&#\/]+)/i)[1];}if(a[d+1]&&/\d+[.,\d+]/.test(a[d+1].innerHTML)){c[e]=a[d+1].innerHTML.match(/(\d+[.,\d+])/)[1];}e++;}}}return{pidArr:g,quantityArr:f,priceArr:c};},getCookie:function(b){var a=document.cookie;var d=a.indexOf(b+"=");if(d!==-1){d=d+b.length+1;var c=a.indexOf(";",d);if(c===-1){c=a.length;}a=a.substring(d,c);if(a){return decodeURIComponent(a);}}return"";},setCookie:function(g,h,i,c){if(i>0){var d,e=new Date();e.setDate(e.getDate()+i);d=e.getTime();if(c){var b=pixel.getCookie(g);var a=b.split("|");var f=(a&&(/\|/g.test(b))&&Number(a[a.length-1]));if(f){d=Number(a[a.length-1]);e=new Date(d);}h=h+"|"+d;}h=encodeURIComponent(h)+(!e?"":"; expires="+e.toUTCString())+"; path=/;domain=.flipkart.com";}document.cookie=g+"="+h;},smartTagValidation:function(h,g,f,e,d,c){var a=g.substring(g.indexOf("account_id=")+11,g.indexOf("&"));var i=h.substring(0,1);f=f?f:"";e=e?e:"";d=d?d:"";c=c?c:"";var b=g;switch(i){case"t":if(!f||!e){b="?account_id="+a+"&section=1&level=2&param=t100";}break;default:if(!f&&!e&&!d&&!c){b="?account_id="+a+"&section=1&level=2&param="+i+"100";}break;}return b;},fireAnalyze:function(c){var a=document.createElement("iframe");a.src=c;a.scrolling="no";a.width=1;a.height=1;a.marginheight=0;a.marginwidth=0;a.frameborder=0;a.style.display="none";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);},getElementsByClass:function(h,g,a){try{g=document.getElementById(g);g=g||document;a=a||"*";h=h||"";var f=[],b=0,d=0;var c=(a==="*"&&g.all)?g.all:g.getElementsByTagName(a);for(d=b=0;d<c.length;d++){if(c[d].className.indexOf(h)!==-1){f[b++]=c[d];}}if(f.length>0){return f;}return[];}catch(j){}},cleanUpString:function(a){if(a){a=a.toString();a=a.replace(/\&lt\;/g,"<").replace(/\&gt\;/g,">").replace(/\&quot\;/g,'"').replace(/\&amp\;/g,"&").replace(/\&nbsp\;/g," ");a=a.replace(/(<([^>]+)>)/ig,"").replace(/[ \t\r\n]+/g," ").replace(/^\s+|\s+$/g,"");}else{a="";}return a;}};pixel.viz_call_fp=function(){if(pixel.viz_isSafari()){var a="_vz";var b=pixel.viz_getFPCookieValue(a);if(b===""||!b.match("^vizSF_")){b=pixel.viz_randomString();pixel.viz_setFPCookieValue(a,b,365);}return"&cb="+b+"&csm=2";}else{return"";}};pixel.viz_setFPCookieValue=function(b,d,c){var a=new Date();a.setDate(a.getDate()+c);document.cookie=b+"="+d+";path=/;domain=.flipkart.com;expires="+a.toGMTString();};pixel.viz_getFPCookieValue=function(b){var a=document.cookie;var d=a.indexOf(b+"=");if(d!==-1){d=d+b.length+1;var c=a.indexOf(";",d);if(c===-1){c=a.length;}a=a.substring(d,c);if(a){return decodeURIComponent(a);}}return"";};pixel.viz_randomString=function(){var e=new Date();var d="0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";var f=5;var c="";for(var b=0;b<f;b++){var a=Math.floor(Math.random()*d.length);c+=d.substring(a,a+1);}return("vizSF_"+e.getTime()+c);};pixel.viz_isSafari=function(){var b=navigator.userAgent;var a=pixel.viz_getUserBrowserName(b);if(/safari/i.test(a)){return true;}else{return false;}};pixel.viz_getUserBrowserName=function(a){if(a===null){return"UNKNOWN";}if(/mqqbrowser/i.test(a)){if(/adr/i.test(a)||/android/i.test(a)){return"MOBILE_ANDRIOD_MQQ";}else{if(/iphone/i.test(a)){return"MOBILE_IOS_MQQ";}else{if(/nokia/i.test(a)){return"MOBILE_WINDOWS_MQQ";}}}}if(/opera/i.test(a)||/opr/i.test(a)){if(/mobi/i.test(a)||/mini/i.test(a)){return"MOBILE_ANDROID_OPERA";}else{if(/tablet/i.test(a)){return"MOBILE_ANDROID_OPERA_TAB";}else{return"DESKTOP_OPERA";}}}if(/tencenttraveler/i.test(a)){return"MOBILE_WINDOWS_TENCENT";}if(/baidubrowser/i.test(a)){return"MOBILE_WINDOWS_BAIDU";}if(/iemobile/i.test(a)){return"MOBILE_WINDOWS_IE";}if(/criOS/i.test(a)){return"MOBILE_IOS_CHROME";}if(/ucbrowser/i.test(a)){if(/linux/i.test(a)){return"MOBILE_ANDROID_UCBROWSER";}if(/ios/i.test(a)||/ipad/i.test(a)){return"MOBILE_IOS_UCBROWSER";}}if(/android/i.test(a)&&/mobile safari/i.test(a)&&!/chrome/i.test(a)){return"MOBILE_ANDROID_DEFAULT";}if(/chrome/i.test(a)){if(/android/i.test(a)){return"MOBILE_ANDROID_CHROME";}return"DESKTOP_CHROME";}else{if(/msie/i.test(a)){return"DESKTOP_IE";}else{if(/firefox/i.test(a)){if(/android/i.test(a)){return"MOBILE_ANDROID_FIREFOX";}return"DESKTOP_FIREFOX";}else{if(/ipad/i.test(a)||/iphone/i.test(a)){return"MOBILE_IOS_SAFARI";}else{if(/safari/i.test(a)){return"DESKTOP_SAFARI";}}}}}return"OTHER";};
