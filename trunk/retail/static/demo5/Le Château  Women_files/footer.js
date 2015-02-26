function storeLocatorSearch() {
	var addressInput = jQuery("input#store-locator-field").val();
	top.location.href = "/style/company/storeLocator.jsp?pg=1&addressInput=" + addressInput;
}

var jQueryColorBox = null;
var emailPopupFrequency = 1;
function displayEmailRegistrationModal() {
	var cheetahMailURL = "http://www.lechateau.com/style/html/popup/new/popup-en.html";
	var cheetahMailURLca = "http://www.lechateau.com/style/html/popup/new/popup-ca.html";
	var cheetahMailURLfr = "http://www.lechateau.com/style/html/popup/new/popup-fr.html";
	var aid = "2085390152";
	var aidFR = "2085926615";
	var a = "0";
	var n = "1";
	var nCA= "100";
	var email = jQuery("input#footer-enter-email-field").val();
	var requestLocale = jQuery("input#footer-request-locale").val();
	var pageURL = jQuery("input#footer-page-url").val();
		var colorboxTop = jQuery.browser.msie ? (jQuery(window).height() < 565 ? "0px" : ((jQuery(window).height() - 565) / 2) + "px") : (jQuery(window).height() < 520 ? "0px" : ((jQuery(window).height() - 520) / 2) + "px");
	jQueryColorBox.colorbox({
		fixed:true,
		top:colorboxTop,
		iframe:true,
		scrolling:false,
		href:"/style/modal/mailingList.jsp?height=540&cheetahMailURL=" + (requestLocale == "fr_CA" ? encodeURI(cheetahMailURLfr): encodeURI(requestLocale == "en_CA" ? encodeURI(cheetahMailURLca): encodeURI(cheetahMailURL))) + "&aid=" + (requestLocale == "fr_CA" ? aidFR : aid) + "&a=" + a + "&n=" + (requestLocale == "en_CA" ? nCA : n) + "&email=" + email + "&requestLocale=" + requestLocale + "&pageURL=" + pageURL,
		width:"517",
		height:jQuery.browser.msie ? "650": "630",
		opacity:0.40
	}, function(){
		jQuery("#cboxLoadedContent").css("padding", "0px");
		jQuery("#cboxLoadedContent").css("height", "600px");
	});
}

	jQuery(document).ready(function() {
	   if( jQuery('#cs-content h2:contains("Franchises Internationales")').length || jQuery('#cs-content h2:contains("International Franchise")').length ){
		var strNewStringUP = jQuery('#cs-content').html().replace(/\Le ChÃ¢teau/g,'LE CHÃ‚TEAU');
   jQuery('#cs-content').html(strNewStringUP);}

		//jQuery("a[href='/style/company/links/investor.jsp']").attr('href', 'http://www.lechateau.com/');
		jQuery('<a style="float:left; margin-top:2px; margin-right:4px;" rel="external" href="http://instagram.com/lechateau" target="_blank"  id="InstagramLogo"><img src="/style/images/icons/instagram.jpg" title="Instagram" style="vertical-align:middle;" alt="Instagram"></a>').insertAfter("#googlePlusLogo");
		jQuery("input:text[id=store-locator-field]").css("color","#333");
		jQuery("input:text[id=footer-enter-email-field]").css("color","#333");
		//jQuery('ol#atg_store_catNav li:nth-child(12) div.menuSectionDisplay li.menuSectionColumn:nth-child(1)').replaceWith('');
		//jQuery('#easter1').bind('contextmenu', function(e){    return false;}); 
		var requestLocale = jQuery("input#footer-request-locale").val();
		if(requestLocale == "fr_CA"){
		jQuery('#welcomeArea li:contains(1.877.514.1959)').replaceWith('<li style="float:left;" class="last uppercase">	<a href="/style/company/links/contacUs.jsp"> Contactez-nous </a> </li>');	
		jQuery("input:text[id=store-locator-field]").val("CODE POSTAL");
		jQuery("input:text[id=store-locator-field]").css("width", "95px");
		jQuery("input:text[id=footer-enter-email-field]").val("VOTRE COURRIEL");
		jQuery('<li><a href="http://blog.lechateau.com/fr/" target="_blank" >BLOGUE</a></li>').insertAfter("#welcomeArea li:nth-child(3)");
		jQuery('<li><a href="http://www.lechateau.com/style/company/links/corporate.jsp">Responsabilit&eacute; Sociale</a></li>').insertAfter("#aboutUsSubMenu li:nth-child(4)");
		jQuery('#cs-rightnav p:contains(1959)').replaceWith('<p>Service Ã  la ClientÃ¨le â€“ Boutique en Ligne<br>1-877-514-1959<br /> Du Lundi au Dimanche 8:00AM &Agrave; 12:00AM HE<br><br>Service Ã  la ClientÃ¨le â€“ Boutique Le Ch&acirc;teau<br>1-888-532-4283 <br/>Du Lundi au Vendredi 9:00AM &Agrave; 5:00PM HE	</p>');
		
		//jQuery('<li><a class="topCatLinks" href="/style/jump/Femmes/category/cat38070717"><span style="color:#C33;text-align:left">FÃªte des mÃ¨res </span></a></li>').insertBefore("ol#atg_store_catNav >li:nth-child(10)");
		//jQuery('<li><a class="topCatLinks" href="/style/jump/Gifts/category/cat38010710"><span style="color:#F0F;text-align:left">â™¥ CADEAUX â™¥ </span></a></li>').insertBefore("ol#atg_store_catNav >li:nth-child(11)");
		//jQuery('<a href="http://www.lechateau.com/style/html/terms/easterfs2014_fr.html" target="_blank"><img src="/style/images/easterfreeship_fr.jpg" style="padding-left:0px;" ></a>').insertAfter("#logo a:nth-child(1)");
		}else
		{ jQuery("input:text[id=store-locator-field]").val("TYPE YOUR LOCATION");
		
		jQuery('#welcomeArea li:contains(1959)').replaceWith('<li style="float:left;" class="last uppercase">	<a href="/style/company/links/contacUs.jsp"> Contact us </a> </li>');
		jQuery('<li><a href="http://www.lechateau.com/style/company/links/corporate.jsp">Corporate Social Responsibility</a></li>').insertAfter("#aboutUsSubMenu li:nth-child(4)");
		
		jQuery('<li><a href="http://www.lechateau.com/style/editorial.jsp?content=affiliate">Affiliate Program</a></li>').insertAfter("#aboutUsSubMenu li:nth-child(6)");
		jQuery('<li><a href="http://blog.lechateau.com" target="_blank" >BLOG</a></li>').insertAfter("#welcomeArea li:nth-child(3)");
		//jQuery('<li><a class="topCatLinks" href="/style/jump/Femmes/category/cat38070717"><span style="color:#C33;text-align:left">Mother\'s Day </span></a></li>').insertBefore("ol#atg_store_catNav >li:nth-child(10)");
		//jQuery('<li><a class="topCatLinks" href="/style/jump/Gifts/category/cat38010710"><span style="color:#F0F;text-align:left">â™¥ GIFTS â™¥ </span></a></li>').insertBefore("ol#atg_store_catNav >li:nth-child(11)");
		//jQuery('<a href="http://www.lechateau.com/style/html/terms/easterfs2014_en.html" target="_blank"><img src="/style/images/easterfreeship_en.jpg" style="padding-left:0px;" ></a>').insertAfter("#logo a:nth-child(1)");
		jQuery('a#yourAccountLink.menuHeader').text('My Account');
		jQuery("input:text[id=store-locator-field]").css("width", "115px");
			jQuery("input:text[id=footer-enter-email-field]").val("ENTER YOUR EMAIL");
			if(requestLocale == "en_US"){ jQuery('#cs-rightnav p:contains(1959)').replaceWith('<p>Customer Service â€“ Online Inquiry<br>1-877-917-1959 <br/> Monday to Sunday - 8:00AM to 12:00AM ET<br/><br><br>Customer Service â€“ Store Inquiry<br>1-888-532-4283<br/> Monday to Friday - 9:00AM to 5:00PM ET</p>');}
		else
		{jQuery('#cs-rightnav p:contains(1959)').replaceWith('<p>Customer Service â€“ Online Inquiry<br>1-877-514-1959  <br/> Monday to Sunday - 8:00AM to 12:00AM ET<br><br>Customer Service â€“ Store Inquiry<br>1-888-532-4283<br/> Monday to Friday- 9:00AM to 5:00PM ET</p>');}}
		checkScriptVersion();
		
});
	
	function setCookie(name,value,days) {
		var expires = '';
	    if (days) {
	        var date = new Date();
	        date.setTime(date.getTime()+(days*24*60*60*1000));
	        expires = "; expires="+date.toGMTString();
	    };
	    document.cookie = name+"="+value+expires+"; path=/";
	}

	function getCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}

	function deleteCookie(name) {
	    setCookie(name,"",-1);
	}
	/*
	 * Checking the script version and forcing a reload if the user has an older version of the code.
	 */
	function checkScriptVersion(){
		var href = window.location.href;
		var pSplit = href.split('://');
		var protocol = pSplit[0];
		var server = pSplit[1].split('/')[0];
		var timestamp = +new Date();
		var checkURL = protocol + '://' + server + '/style/javascript/scriptVersion.js?' + timestamp;
		jQuery.get(checkURL,function(data){
			eval(data);
			var currentVersion = getCookie('lciScriptVersion');
			if (currentVersion == null || currentVersion != jsData.scriptVersion) {
				setCookie('lciScriptVersion', jsData.scriptVersion, 90);
				window.location.reload(true);
			} else {
				continueLoad();
			}
		},'html');
	}
	function continueLoad(){
		jQueryColorBox = jQuery;

		//Bind Footer Store locator Events
		jQuery("#store-locator-field-button").bind("click", function (evt) {
			evt.preventDefault();
			evt.stopPropagation();
			storeLocatorSearch();
		});

		jQuery("input#store-locator-field").bind("keypress", function (evt) {
			var keyCode = evt.keyCode;
			//Check for enter Key
			if (keyCode === 13) {
				storeLocatorSearch();
			}
		});

		jQuery("input#store-locator-field").bind("focus", function (evt) {
			//if(jQuery("input#store-locator-field").val().toUpperCase() === "ENTER ZIP" || "CODE POSTAL") {
				jQuery("input#store-locator-field").val("");
			//}
		});

		jQuery("input#store-locator-field").bind("blur", function (evt) {
			if(jQuery("input#store-locator-field").val().toUpperCase() === "") {
				//jQuery("input#store-locator-field").val("Enter Zip");
			}
		});
//Bind Footer Enter email events
		jQuery("#joinMailingListLink").bind("click", function (evt) {
			displayEmailRegistrationModal();
		});
		
		
		  
		jQuery("#footer-enter-email-field-button").bind("click", function (evt) {
			displayEmailRegistrationModal();
		});

		jQuery("input#footer-enter-email-field").bind("keypress", function (evt) {
			var keyCode = evt.keyCode;
			//Check for enter Key
			if (keyCode === 13) {
				displayEmailRegistrationModal();
			}
		});

		jQuery("input#footer-enter-email-field").bind("focus", function (evt) {
			//if(jQuery("input#footer-enter-email-field").val().toUpperCase() === "ENTER EMAIL") {
				jQuery("input#footer-enter-email-field").val("");
			//}
		});

		jQuery("input#footer-enter-email-field").bind("blur", function (evt) {
			if(jQuery("input#footer-enter-email-field").val().toUpperCase() === "") {
				//jQuery("input#footer-enter-email-field").val("Enter Email");
			}
		});

		var signup = jQuery(document).getUrlParam("showSignup");
		var url = window.location.href;
		if (signup == 'true') {
			displayEmailRegistrationModal();
		} else if (url.indexOf('editorial.jsp?content=signup')==-1) {
			/* This code is for the Email Signup block*/
			var random = Math.floor(Math.random() * (emailPopupFrequency - 1 + 1)) + 1;
			if (random==emailPopupFrequency){
				//check to see if they already have the cookie
				var hasCookie = getCookie("lciEmailModalReceivedSess");
				if (!hasCookie){
					setCookie("lciEmailModalReceivedSess", "true", 0);
					displayEmailRegistrationModal();
				}
			}
		}
	}