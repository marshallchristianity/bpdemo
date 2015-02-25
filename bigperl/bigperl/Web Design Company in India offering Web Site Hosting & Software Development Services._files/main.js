var $ = jQuery.noConflict();

$(document).ready(function() {
	
	/* Add Slope Page Sepetator */
	
	
	$('.top-button a').html('\
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 102 53">\
			<polygon points="0,0 102,0 51,53" />\
		</svg>\
		<div class="top-button-arrow"></div>');
	
	/* menu scroll animation */
	$( window ).scroll(menuScrollAnimation);
	$( window ).smartresize(menuScrollAnimation);
	menuScrollAnimation();
	
	/* One Page Nav Plugin */
	$('.menu1').onePageNav({ filter: ':not(.external)', scrollOffset: 30 });
	
	$('.navbar .navbar-toggle').click(function(){
		if($('.navbar .menu ul').is(':visible')){
			$('.navbar, .navbar-inner, .navbar-inner .container').css('overflow', 'visible');
			$('.navbar .menu ul').css('opacity', 0).slideDown('slow').animate({ opacity: 1 }, { queue: false, duration: 'slow' });
		}else{
			$('.navbar .menu ul').css('opacity', 1).slideUp('slow').animate({ opacity: 0 }, { queue: false, duration: 'slow' });
		}
		//if the device is desktop prevent toggle of nav
        if (screen.width >= 1024) 
            return;
        mainNav.slideToggle();
	});
	

	
	/* Back to Top Links */
	$('.top-button a').click(function(){
	   $('html, body').animate({scrollTop : 0},'slow');
		return false;
	});
	
	/* Add bottom arrow to menu */
	$('.menu a').append('<span class="menu-active-arrow"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 24 12"><polygon points="0,12 24,12 12,0" /></svg></span>');
	
	/*Add animated image elements */
	setAnimatedImage1();
	setAnimatedImage3();
	
	$('.animatedImage2').hover(function(){
		$(this).find('img').animate({transform:'scale(1) rotate(0deg)', top:0, opacity:1}, {queue:false, ease:'easeOutQuint', duration:300});
	},function(){
		$(this).find('img').animate({transform:'scale(.8) rotate(-10deg)', top:40, opacity:.7}, {queue:false, ease:'easeOutQuint', duration:300});
	});
	
	/*Add animation social icons */
	$('.socialicon').hover(function(){
		$(this).animate({transform:'scale(.9)', opacity:'.5'}, {queue:false, duration:300, easing:'easeOutQuint', complete:function(){
				$(this).stop().tooltip('show');
			}
		});
	},function(){
		$(this).stop().tooltip('hide');
		$(this).animate({transform:'scale(1)', opacity:'1'}, {queue:false, duration:300, easing:'easeOutQuint'});
	});
	$('.socialicon, .socialiconBig').tooltip();
	
	$('.socialiconBig').hover(function(){
		var hoverColor = $(this).parents('*[class*="color"]').css('borderTopColor');
		$(this).animate({backgroundColor:hoverColor, transform:'rotate(-10deg)'}, {queue:false, duration:500, easing:'easeOutQuint', complete:function(){
				$(this).stop().tooltip('show');
			}
		});
	},function(){
		var houtColor = $(this).parents('*[class*="color"]').css('color');
		$(this).stop().tooltip('hide');
		$(this).animate({backgroundColor:houtColor, transform:'rotate(0deg)'}, {queue:false, duration:500, easing:'easeOutQuint'});
	});
	
	/* Add animation price table */
	$('.pricetable').hover(function(){
		var hoverColor = $(this).parents('*[class*="color"]').css('borderTopColor');
		$(this).animate({borderColor : "#fff", transform:'scale(1.05) skewY(-5deg)'}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.pt-header, .pt-price').animate({color:hoverColor}, {queue:false, ease:'easeOutQuint', duration:300});
	},function(){
		var houtColor = $(this).parents('*[class*="color"]').css('color');
		$(this).animate({borderColor : "#000", transform:'scale(1) skewY(-5deg)'}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.pt-header, .pt-price').animate({color:houtColor}, {queue:false, ease:'easeOutQuint', duration:300});
	});
	
	/* Load Next Blog Page */
	$('.blog-load-more').click(function(){
		$('#blog-posts').html('');
		$.get( "next-blog-page.html", function( data ){
			var $newItems = $(data);
			$('#blog-posts').delay(2000).append( $newItems );
			addBlogAnimations();
		});
	});
	
	/* Add Block Animation */
	addBlogAnimations();
	
	/* Flickr Widget */
	$('.flickr-widget').each(function(){
		$(this).jflickrfeed({
			limit: $(this).attr('data-limit'),
			qstrings: {
				id: $(this).attr('data-userid')
			},
			itemTemplate:'<a href="{{link}}" alt="{{title}}" target="_blank">\
					<img src="{{image_m}}" alt="{{title}}" />\
					<div class="flickr-widget-item-hover"></div>\
				</a>'
		}, function(data){
			$(this).find('a').hover(function(){
				var hoverColor = $(this).parents('*[class*="color"]').css('borderTopColor');
				$(this).find('.flickr-widget-item-hover').css({boxShadow : "inset 0 0 0 5px "+hoverColor});
				$(this).animate({transform:'scale(1.2)'}, {queue:false, ease:'easeOutQuint', duration:500});
				$(this).find('.flickr-widget-item-hover').animate({opacity : '1'}, {queue:false, ease:'easeOutQuint', duration:500});
			},
			function(){
				$(this).animate({transform:'scale(1)'}, {queue:false, ease:'easeOutQuint', duration:500});
				$(this).find('.flickr-widget-item-hover').animate({opacity : '0'}, {queue:false, ease:'easeOutQuint', duration:500});
			});
		});
	});
	

	
	/* Contact Form */
	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
	 
	$(".form-contact").submit(function(){
		var $form = $(this);
		var formdata = $form.serialize();
		$form.slideUp();
		$form.parent().append('<div class="form-message">Please wait...</div>').find(".form-message").slideDown("slow");
		$.post("form-sender.php", formdata, function(data){
			data = $.parseJSON(data);
			if(data.status=="OK")
			{
				$form.parent().find(".form-message").html(data.message);
			}else{
				alert(data.ERR);
				$form.slideDown();
				$form.parent().find(".form-message").remove();
			}
		});
		return false;
	});


});

$(window).load(function() {
	// show website
	$('body .jumbotron').animate({opacity:'1'}, {queue:false, ease:'easeOutQuint', duration:500});
	
	/* Slider */
	
	if ($.fn.cssOriginal!=undefined)
		$.fn.css = $.fn.cssOriginal;
		
	$('.fullscreenbanner').revolution({
		delay:9000,
		startwidth:1170,
		startheight:900,

		onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

		thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
		thumbHeight:50,
		thumbAmount:3,

		hideThumbs:0,
		navigationType:"bullet",				// bullet, thumb, none
		navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

		navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


		navigationHAlign:"left",				// Vertical Align top,center,bottom
		navigationVAlign:"bottom",					// Horizontal Align left,center,right
		navigationHOffset:30,
		navigationVOffset:30,

		soloArrowLeftHalign:"left",
		soloArrowLeftValign:"center",
		soloArrowLeftHOffset:20,
		soloArrowLeftVOffset:0,

		soloArrowRightHalign:"right",
		soloArrowRightValign:"center",
		soloArrowRightHOffset:20,
		soloArrowRightVOffset:0,

		touchenabled:"on",						// Enable Swipe Function : on/off


		stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
		stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

		hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
		hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
		hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


		fullWidth:"on",							// Same time only Enable FullScreen of FullWidth !!
		fullScreen:"on",						// Same time only Enable FullScreen of FullWidth !!

		shadow:0,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
		
		videoJsPath:"js/videojs/"

	});
	


	/* Skill animation */
	$('.knob').knob({
	  'draw' : function () { 
		$(this.i).val(this.cv+'%');
	  }
	});
	$('.knob').waypoint(function () {
		var $this = $(this);
		var myVal = $this.attr("data-target-value");
		$({
		   value: 0
		}).animate({
			value: myVal
			}, {
		   duration: 2000,
		   easing: 'swing',
		   step: function () {
			   $this.val(Math.ceil(this.value)).trigger('change');

		   }
		});
	}, { 
		triggerOnce:true,
		offset:function (){ return $(window).height() - $(this).outerHeight();}
	});

	/* Portfolio */
	$('#isotope-portfolio').imagesLoaded(function () {
		$('#isotope-portfolio').isotope({
			layoutMode: "perfectMasonry",
			itemSelector: '.portfolio-item',
			perfectMasonry: {
				liquid: true
			}
		});
	});
	
	setPortfolioModal();

	$('#portfolio-filter a').click(function(){
		$(this).parent().parent().find('.animatedButton1Active').removeClass('animatedButton1Active');
		$(this).addClass('animatedButton1Active');
		var selector = $(this).attr('data-filter');
		$('#isotope-portfolio').isotope({ filter: selector });
		return false;
	});

	$('#loadMorePortfolioItems').click(function(){
		$.get( "more-portfolio-items.html", function( data ) {
			var $newItems = $(data);
			$('#isotope-portfolio').append( $newItems ).isotope( 'insert', $newItems );
			setAnimatedImage3();
			setPortfolioModal();
		});
	});


	

});


/* Functions */

function setPortfolioModal(){
	$('.portfolio-item a').magnificPopup({
		type: 'ajax',
		alignTop: false,
		overflowY: 'scroll',
		callbacks: {
			ajaxContentAdded: function() {
			$('.portfolio-detail-slider').revolution({
				shadow:0,
				navigationArrows:"none",
				navigationType:"bullet",
				navigationStyle:"round",
				navigationHAlign:"center",				
				navigationVAlign:"bottom",
				navigationVOffset:-50,
				fullWidth:"off",
				startwidth:415,
				startheight:637
			});
		  }
		}
	});
}




	
function setAnimatedImage1(){
	$('.animatedImage1').find('.hoverWrapperBg, .hoverWrapper').remove();
	$('.animatedImage1').append('<div class="hoverWrapperBg"></div>\
						<div class="hoverWrapper">\
							<div class="hoverIcon"></div>\
						</div>');
						
	$('.animatedImage1').hover(function(){
		var hoverColor = $(this).parents('*[class*="color"]').css('borderTopColor');
		$(this).find('.hoverWrapper').animate({boxShadow : "inset 0 0 0 6px "+hoverColor}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.hoverWrapperBg').animate({opacity:'1'}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.hoverIcon').animate({opacity:'1', transform:'scale(1)'}, {queue:false, ease:'easeOutQuint', duration:300});
	},function(){
		var houtColor = $(this).parents('*[class*="color"]').css('color');
		$(this).find('.hoverWrapper').animate({boxShadow : "inset 0 0 0 1px "+houtColor}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.hoverWrapperBg').animate({opacity:'0'}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.hoverIcon').animate({opacity:'0', transform:'scale(.5)'}, {queue:false, ease:'easeOutQuint', duration:300});
	});
}

function setAnimatedImage3(){						
	$('.animatedImage3').hover(function(){
		$(this).find('.hoverWrapperBg').animate({opacity:'.3'}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.hoverIconChain').animate({opacity:'1', marginLeft:'-70'}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.hoverIconHeart').animate({opacity:'1', marginLeft:'10'}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.hoverBottom').animate({opacity:'1', bottom:'0'}, {queue:false, ease:'easeOutQuint', duration:300});
	},function(){
		$(this).find('.hoverWrapperBg').animate({opacity:'0'}, {queue:false, ease:'easeOutQuint', duration:300});
		$(this).find('.hoverIconChain').animate({opacity:'0', marginLeft:'-90'}, {queue:false, ease:'easeOutQuint', duration:500});
		$(this).find('.hoverIconHeart').animate({opacity:'0', marginLeft:'30'}, {queue:false, ease:'easeOutQuint', duration:500});
		$(this).find('.hoverBottom').animate({opacity:'0', bottom:'-50'}, {queue:false, ease:'easeOutQuint', duration:300});
	});
}

/*function menuScrollAnimation(){
	var minHeight = 60;
	var maxHeight = auto;
	
	if($( window ).width()>768){
		$('nav ul').css({opacity:'1', display:'block'});
		var sTop = $(document).scrollTop();
	}
	else{
		sTop = minHeight;
		$('nav ul').css({opacity:'0', display:'none'});
	}
	
	var applytype = 'css';
	var navBgAlpha = sTop;
	if(sTop>=50) applytype='animate';
	if(navBgAlpha<minHeight) navBgAlpha=1;
	else if(navBgAlpha>maxHeight) navBgAlpha=0.7;
	else navBgAlpha = 0.5+ (0.5 - ( ((navBgAlpha-minHeight)/minHeight)*0.3 ) );
	if(sTop>minHeight) sTop=minHeight;
	sTop = minHeight + (minHeight-sTop); 
	if(applytype=='animate'){
		$('.navbar, .navbar-inner, .navbar-inner .container, nav ul li a').animate({ height: sTop }, { queue: false, duration: 'slow' });
		$('nav ul li a').animate({ lineHeight: sTop }, { queue: false, duration: 'slow' });
	}else{
		$('.navbar, .navbar-inner, .navbar-inner .container, nav ul li a').stop(true,true).height(sTop);
		$('nav ul li a').stop(true,true).css('line-height', sTop+'px');
	}
	var navBgColor = $('.navbar').css('background-color');
	if(supportsRGBA()){
		navBgRGB = /rgba?\((\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*(,\s*\d+[\.\d+]*)*\)/g.exec(navBgColor);
		$('.navbar').css('background-color',"rgba("+navBgRGB[1]+','+navBgRGB[2]+','+navBgRGB[3]+','+navBgAlpha+")");
	}
}*/

function supportsRGBA()
{
	if(!('result' in arguments.callee))
	{
		var scriptElement = document.getElementsByTagName('script')[0];
		var prevColor = scriptElement.style.color;
		var testColor = 'rgba(0, 0, 0, 0.5)';
		if(prevColor == testColor)
		{
			arguments.callee.result = true;
		}
		else
		{
			try {
				scriptElement.style.color = testColor;
			} catch(e) {}
			arguments.callee.result = scriptElement.style.color != prevColor;
			scriptElement.style.color = prevColor;
		}
	}
	return arguments.callee.result;
}