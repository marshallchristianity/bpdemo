/* JS */
/* Recent posts carousel */


$(window).load(function(){
  $('.rps-carousel').carouFredSel({
  	responsive: true,
  	width: '100%',
	height: 'auto',
  	pauseOnHover : true,
  	auto : false,
  	circular	: true,
  	infinite	: false,
  	prev : {
  		button	: "#car_prev",
  		key		: "left",
  	},
  	next : {
  		button	: "#car_next",
  		key		: "right",
  	},
  	swipe: {
  		onMouse: true,
  		onTouch: true
  	},
  	items: {
  		visible: {
  			min: 1,
  			max: 4
  		}
  	},
	 scroll : {
            items           : 1,
            easing          : "quadratic",
            duration        : 1000,                         
            pauseOnHover    : true
        }   
	
  }); 
});

/* testi carousel */


$(window).load(function(){
  $('.testimonial').carouFredSel({
  	responsive: true,
  	width: '100%',
  	pauseOnHover : true,
  	auto : false,
  	circular	: true,
  	infinite	: false,
  	prev : {
  		button	: "#car_prev1",
  		key		: "left",
  	},
  	next : {
  		button	: "#car_next1",
  		key		: "right",
  	},
  	swipe: {
  		onMouse: true,
  		onTouch: true
  	},
  	items: {
  		visible: {
  			min: 1,
  			max: 1
  		}
  	},
	/* scroll : {
            items           : 1,
            easing          : "fade",
            duration        : 1000,                         
            pauseOnHover    : true
        } */  
	 scroll : { fx : "crossfade" },
  }); 
});


/* client carousel */


$(window).load(function(){
  $('.clientlogo').carouFredSel({
  	responsive: true,
  	width: '100%',
  	pauseOnHover : true,
  	auto : false,
  	circular	: true,
  	infinite	: false,
  	prev : {
  		button	: "#left-arrow",
  		key		: "left",
  	},
  	next : {
  		button	: "#right-arrow",
  		key		: "right",
  	},
  	swipe: {
  		onMouse: true,
  		onTouch: true
  	},
	auto: {
				/*pauseOnHover: 'resume',*/
				progress: '#timer1'
			},
  	items: {
  		visible: {
  			min: 1,
  			max: 10
  		}
  	},
	 scroll : {
            items: 1,
        duration: 2000,
        queue: true,
        timeoutDuration: 0,
        easing: "linear",
        pauseOnHover: "immediate-resume",
        fx: "scroll"
        }   
  }); 
});

/* latest blog */


$(window).load(function(){
  $('.latest-blog').carouFredSel({
  	responsive: true,
  	width: '100%',
  	pauseOnHover : true,
  	auto : false,
  	circular	: true,
  	infinite	: false,
  	prev : {
  		button	: "#car_prevb",
  		key		: "left",
  	},
  	next : {
  		button	: "#car_nextb",
  		key		: "right",
  	},
  	swipe: {
  		/*onMouse: true,
  		onTouch: true*/
		onMouse: false,
  		onTouch: false
  	},
/*auto: {
				
				progress: '#timer1'
			},*/
  	items: {
  		visible: {
  			min: 1,
  			max: 1
  		}
  	},
	/* scroll : {
            items: 1,
        duration: 1000,
        queue: true,
        timeoutDuration: 10000,
        easing: "quadratic",
        pauseOnHover: "immediate-resume",
        fx: "scroll"
        } */  
  }); 
});

	// Accordion
		jQuery("ul.tt-accordion li").each(function(){
			jQuery(this).children(".accordion-content1").css('height', function() { 
				return jQuery(this).height(); 
			});
			
			if (jQuery(this).index() > 0) {
				jQuery(this).children(".accordion-content1").css('display','none');
			} else {
				jQuery(this).addClass('active').find(".accordion-head-sign").append("<i class='icon-angle-up'></i>");
				jQuery(this).siblings("li").find(".accordion-head-sign").append("<i class='icon-angle-down'></i>");
			}
			
			jQuery(this).children(".accordion-head").bind("click", function() {
				jQuery(this).parent().addClass(function() {
					if (jQuery(this).hasClass("active")) return "";
					return "active";
				});
				jQuery(this).siblings(".accordion-content1").slideDown();
				jQuery(this).parent().find(".accordion-head-sign i").addClass("icon-angle-up").removeClass("icon-angle-down");
				jQuery(this).parent().siblings("li").children(".accordion-content1").slideUp();
				jQuery(this).parent().siblings("li").removeClass("active");
				jQuery(this).parent().siblings("li").find(".accordion-head-sign i").removeClass("icon-angle-up").addClass("icon-angle-down");
			});
		});
	// Hover img
		if(!(jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 6)){
		// IE sucks at fading PNG's with gradients so just use show hide
		// make sure it's not visible to start
			jQuery('.hover-content').each(function(){
				var overImg = jQuery(this).find('.image-overlay');
				jQuery(this).hover(function(){
					overImg.stop().fadeIn('fast');
				},function(){
					overImg.stop().fadeOut('fast');
				}); 
			});
		}
	// prettyPhoto
/*		if ($("a[data-gal^='photo']")[0]){
			$("a[data-gal^='photo']").prettyPhoto({
				theme: 'facebook',
				autoplay_slideshow: false,
				overlay_gallery: false,
				show_title: false
			});
		}

	// quicksand
		var $portfolioClone = $(".portfolio").clone();
		$(".filter a").click(function (e) {
				$(".filter li").removeClass("current");
				var $filterClass = $(this).parent().attr("class");
				if ($filterClass === "all") {
					var $filteredPortfolio = $portfolioClone.find("li");
				} else {
					var $filteredPortfolio = $portfolioClone.find("li[data-type~=" + $filterClass + "]");
				}
				// Call quicksand
				$(".portfolio").quicksand($filteredPortfolio, {
						duration: 700,
						easing: 'easeOutExpo',
						adjustHeight: 'dynamic'
					}, function () {
						$(".portfolio a[data-gal^='photo']").prettyPhoto({
								theme: 'facebook',
								autoplay_slideshow: false,
								overlay_gallery: false,
								show_title: false
							});
						if (!(jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 6)) {
							jQuery('.portfolio li').each(function () {
									var overImg = jQuery(this).find('.image-overlay');
									jQuery(this).hover(function () {
											overImg.stop().fadeIn('fast');
										}, function () {
											overImg.stop().fadeOut('fast');
										});
								});
						}
					});
				$(this).parent().addClass("current");
				e.preventDefault();
			});
*/			
			/* Portfolio filter */

/* Isotype */

// cache container
var $container = $('#photo');
// initialize isotope
$container.isotope({
  // options...
});

// filter items when filter link is clicked
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
});

/* Pretty Photo for Gallery*/

jQuery("a[class^='prettyPhoto']").prettyPhoto({
overlay_gallery: false, social_tools: false
});


/*faq */
$(document).ready(function(){
	$("div#questions ul li a").click(function(){
		var selected = $(this).attr('href');	
		selected += '"'+selected+'"'
		$('.top-button').remove();
		$('.current-faq').removeClass();
		$.scrollTo(selected, 400 ,function(){ 
			$(selected).addClass('current-faq',400,function(){
				$(this).append('<a href="#" class="top-button" style="color:#fff;">TOP</a>');
			});
		});		
		return false;
	});
	$('.top-button').live('click',function(){
		$('.top-button').remove();
		$('.current-faq').removeClass('current-faq',400,function(){
			$.scrollTo('0px', 800); 
		});				
		return false;
	})		
});		

   

$(document).ready(function () {
	"use strict"
	//indexOf is not supported by IE9>. 
	if (!Array.prototype.indexOf){
	  Array.prototype.indexOf = function(elt /*, from*/){
	    var len = this.length >>> 0;

	    var from = Number(arguments[1]) || 0;
	    from = (from < 0)
	         ? Math.ceil(from)
	         : Math.floor(from);
	    if (from < 0)
	      from += len;

	    for (; from < len; from++){
	      if (from in this &&
	          this[from] === elt)
	        return from;
	    }
	    return -1;
	  };
	}
    
    var bgImg = [], img = [], count=0, percentage = 0;

    //Creating loader overlay
    $('<div id="loaderMask"><span>0%</span></div>').css({
    	position:"fixed",
    	top:0,
    	bottom:0,
    	left:0,
    	right:0,
    	background:'#fff'
    }).appendTo('body');

    //Searching all elemnts in the page for image
    $('*').filter(function() {

	    var val = $(this).css('background-image').replace(/url\(/g,'').replace(/\)/,'').replace(/"/g,'');
	    var imgVal = $(this).not('script').attr('src');

	    if(val !== 'none' && !/linear-gradient/g.test(val) && bgImg.indexOf(val) === -1){
	    	bgImg.push(val)
	    }

	    if(imgVal !== undefined && img.indexOf(imgVal) === -1){
	    	img.push(imgVal)
	    }

 	});

    var imgArray = bgImg.concat(img); 

    $.each(imgArray, function(i,val){ //Adding load and error event
		$("<img />").attr("src", val).bind("load", function () {
            completeImageLoading();
        });

        $("<img />").attr("src", val).bind("error", function () {
            imgError(this);
        });
    })

    function completeImageLoading(){
    	count++;
    	percentage = Math.floor(count / imgArray.length * 100);
    	$('#loaderMask').html('<span>'+percentage + '%'+'</span>');
    	if(percentage === 100){
    		$('#loaderMask').html('<span>100%</span>')
    		$('#loaderMask').fadeOut(function(){
    			$('#loaderMask').remove()
    		})
    	}
    }

    //Error handling
    function imgError (arg) {
    	$('#loaderMask').html("Image failed to load.. Loader quitting..").delay(3000).fadeOut(1000, function(){
    		$('#loaderMask').remove();
    	})
    }
 

});