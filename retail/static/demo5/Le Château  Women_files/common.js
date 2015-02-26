   /* Declare for scene7 Image Rotation*/
   var refreshIntervalId=[],timeToRotate=2000,timeToFade=500, initialTimeToRotate=500;
  /*
   * Returns an object containing keys and values for querystring
   */
   var intervalIds = {};
  function getQueryStringParameters() {
	  var urlParams = {};
	  (function () {
	      var e,
	          d = function (s) { return decodeURIComponent(s.replace(/\+/g, " ")); },
	          q = window.location.search.substring(1),
	          r = /([^&=]+)=?([^&]*)/g;

	      while (e = r.exec(q))
	         urlParams[d(e[1])] = d(e[2]);
	  })();
	   return urlParams;
  }

  //Functions for language selector
  function toggleLanguageOptions(){
		var opts = jQuery('#languageOptions');
		if (opts.is(":visible")){
			closeLanguageSelectionBox();
		} else {
			openLanguageSelectionBox();
		}
	}
	var autoCloseLanguageBoxId = null;
	function closeLanguageSelectionBox(){
		jQuery('#languageOptions').hide();
		jQuery("#languageSelectionWidget").attr("style","background-color: #CCCCCC;");
		jQuery("#languageSelected").attr("style","background-color: #CCCCCC;");
		jQuery("#languageSelectionWidget").unbind('mouseenter mouseleave');
		autoCloseLanguageBoxId = null;
	}
	function openLanguageSelectionBox(){
		jQuery('#languageOptions').show();
		jQuery("#languageSelectionWidget").attr("style","background-color: #E6E6E6;border-left:1px solid #E6E6E6;");
		jQuery("#languageSelected").attr("style","background-color: #E6E6E6;");
		jQuery("#languageSelectionWidget").hover(function(){abortAutoCloseLanguageBox()}, function(){initiateAutoCloseLanguageBox();})
	}
	function initiateAutoCloseLanguageBox(){
		autoCloseLanguageBoxId = setTimeout('closeLanguageSelectionBox()', 2000);
	}
	function abortAutoCloseLanguageBox(){
		if (autoCloseLanguageBoxId){
			clearTimeout(autoCloseLanguageBoxId);
		};
	}
//Done language selector functions

//this first function($) allows us to continue to use the standard
//jquery notation while also using other libraries, just dont reference
//them inside of this block, in this block, $ means JQuery
  jQuery.noConflict();
  jQuery(document).ready(function($){
	  initPage($);
  });

  var timeoutTracker={};
  
  function addToTimeoutTracker(id, timeoutId){
	timeoutTracker[id] = timeoutId;
  }
  function removeFromTimeoutTracker(id){
	timeoutTracker[id]=null;
  }
  function initiateCloseFooterMenu(id){
      var timeoutId = setTimeout("closeFooterMenu('"+id+"')", 200);
	  addToTimeoutTracker(id, timeoutId);
  }
  function closeFooterMenu(id){
		var obj = jQuery("#"+id);
		jQuery(obj).animate({height:'toggle',opacity:'toggle'});
		removeFromTimeoutTracker(id);
  }
  function openFooterMenu(id){
	  if (timeoutTracker[id]){
		clearTimeout(timeoutTracker[id]);
		removeFromTimeoutTracker(id);
	  } else {
	    var obj = jQuery("#"+id);
	    jQuery(obj).animate({height:'toggle',opacity:'toggle'});
	  }
  }
  
  function initPage($,skipLang){
	  /*
	   * Displays the Welcome to Le Chateau Modal
	   */

	  /* commenting because we are now redirecting to the geo page

	  try {
		  if($.cookie("returningCustomer") === null) {
				$.cookie("returningCustomer", "TRUE");

				window.location = '/style/geo/';

				$.colorbox({
					href:"/style/global/gadgets/modal_welcome.jsp",
					width:"450px",
					height:"480px",
					opacity:0.40,
					scrolling:false
				}, function(){
					$("input.welcome-modal-select-country-radio").live("click", function (evt){

						var countryValue = $(evt.target).val();
						switch(countryValue) {
							case "CA":
								$("table.welcome-modal-select-language-us").hide();
								$("table.welcome-modal-select-language-ca").show();
								break;
							case "US":
								var languageSelection = $("input.welcome-modal-select-language-radio");
								$.each(languageSelection, function (index,value) {
									if(languageSelection[index].value === "en_US") {
										languageSelection[index].checked = true;
									}
								});
								$("table.welcome-modal-select-language-ca").hide();
								$("table.welcome-modal-select-language-us").show();
								break;
						}
					});

					$("input#welcome-modal-continue-button").bind("click", function(evt){
						evt.preventDefault();
						var url = "/"
						var language = "en_US"
						var languageSelection = $("input.welcome-modal-select-language-radio");
						$.each(languageSelection, function (index,value) {
							if(languageSelection[index].checked) {
								language = languageSelection[index].value;
							}
						});

						var storeId = (language === "en_US") ? 333 : 334;
						top.location.href = "/style/?storeId=" + storeId + "&repriceOrder=true" + "&locale="  + language;
					});
				});
			}


	  } catch(ex){
		  //log
	  }
	  */

  		/**************************************************
			find all div tags with debug class and show
			them if the url param debug=true is turned on
  		 **************************************************/
	  	if($(document).getUrlParam("debug") == "true") {
	  		$(".debugBox, .showDebug").each(function() {
	  			$(this).show("slow");

	  		});
	  		$(".showDebug").each(function() {
	  			$(this).draggable();
	  		});
	  	}



		/**************************************************
			loop through all href tags and for any that are
			marked rel=external, make those open in a new
			windows.  this allows us to be w3c compliant
			xhtml since you can no longer use the target attr
		**************************************************/
		$("a[rel$='external']").click(function(){
			this.target = "_blank";
		});


		/***********************************
		 * universal error and success messaging scripts
		 *
		 *
		 */
		if($(document).getUrlParam("errorMsg") > "") {
			var msg = $(document).getUrlParam("errorMsg");
			switch(msg) {
	            case "1": output = "There was an error processing your request.";
	            break;
	            case "2": output= "Please select an option from the dropdown list.";
	            break;
	            default: output ="";
	        }

			$("#errorMessageBox").text(output).show();
		}
		if($(document).getUrlParam("successMsg") > "") {
			var msg = $(document).getUrlParam("successMsg");
			switch(msg) {
	            case "1": output = "Your request was processed successfully.";
	            break;
	            case "2": output= "Thank you for your submission.";
	            break;
	            case "3": output= "Thank you for submitting your review. Your review will be processed shortly.";
	            break;
	            default: output ="";
	        }
			$("#successMessageBox").text(output).show();
		}
		
		$(".footerMenuControl").hover(function(){
			var menuDisplays = $(this).children("ul");
			if (menuDisplays.length>0){
				footerMenuDisplaying = menuDisplays[0];
				openFooterMenu(menuDisplays[0].id);
				//$(menuDisplays[0]).animate({height:'toggle',opacity:'toggle'});
			}
		},function(){
			var menuDisplays = $(this).children("ul");
			if (menuDisplays.length>0){
				initiateCloseFooterMenu(menuDisplays[0].id);
				//closeMenuFunctionID = setTimeout('closeFooterMenu("' + menuDisplays[0].id + '")', 3000);
			}
		});
		
		$(".showFooterLink").click(function(){
			var newId = "#" +this.id + "Display";
			if (openMenu!=null){
				$(openMenu).animate({top:'toggle', height: 'toggle', opacity: 'toggle'});
				if (newId == openMenu){
					openMenu = null;
					return;
				} else {
					openMenu = null;
				}
				
			}
			var display = $(newId);
			display.animate({top:'toggle', height: 'toggle', opacity: 'toggle'});
			openMenu = newId;
			//$(newId).toggle();
		});
		$(".showFooterLink").attr("href", "javascript:void(0);");
		
		var yaLinkDisplay = $("#yourAccountLinkDisplay");
		yaLinkDisplay.css('left', '180px');
		var storesLinkDisplay=$("#storesLinkDisplay");
		storesLinkDisplay.css('left', '305px');
		var aboutUsLinkDisplay=$("#aboutUsLinkDisplay");
		aboutUsLinkDisplay.css('left', '530px');

		/** footer expand code **/
		//$("#footerClose").click( function() {
		//	$("#footer").removeClass("open");
		//	$("#footerClose").hide();
		//	$("#footerOpen").show();
		//	$("#verify").hide();

			//$("img#store-locator-field-button, img#footer-enter-email-field-button").hide();
		//});
		//$("#footerOpen, .showFooterLink").click( function() {
		//	$("#footer").addClass("open");
		//	$("#footerClose").show();
		//	$("#footerOpen").hide();
		//	$("#verify").show();
			//Show arrows
			//$("img#store-locator-field-button, img#footer-enter-email-field-button").show();

		//});

		$("#footer").hover(
			function() {
				//$("#footer").addClass("open", 500, function(){
					//$("html, body").animate({scrollTop: $("body").attr("scrollHeight")}, 'slow');
					//$("img#store-locator-field-button, img#footer-enter-email-field-button").show();
				//});

				//$("#footerClose").show();
				//$("#footerOpen").hide();
			},
			function() {
				//$("#footer").removeClass("open", 500);
				//$("#footerClose").hide();
				//$("#footerOpen").show();
				//$("img#store-locator-field-button, img#footer-enter-email-field-button").hide();
			}
		);
		/*
		 * change dropdown functions
		 * 
		 */
		$(".shippingMethodCart").change(function(){
			document.forms['shippingMethodCartForm'].submit();
		})
		/****************
		 * category scripts
		 *
		 */


		$(".imageContainer").each(function() {
			var catProdImage = $(this).children().children().children("img");
			var src = catProdImage.attr("src");
			if (src != null) {
				var offState = src;
				var srcLength = src.length;
				var prefix = src.substring(0, srcLength - 13);
				var suffix = src.substring(srcLength - 12, srcLength);
				var onState = prefix + "2" + suffix;
				$(this).hover(
					function() {
						/******
						 * not currenlty doing the fade effect, just render the details
						$(this).fadeOut( function(){
							catProdImage.attr("src", onState);
							$(this).children(".catImageDetails").show();
							$(this).children(".quickViewText").show();
							$(this).fadeIn();
						});
						*/
						/**
						$(this).children(".catImageDetails").show();
						$(this).children(".quickViewText").show();*/
	
						/**var imageColorBoxCount = $(this).children(".catImageDetails").children().children(".imageColorBoxes img").length;
	
						// var rowCntHeightArr = [5, 10, 15]; // Variablized in case we need different widths for fr_CA (old was 6,12,18 for en_US and en_CA)
						var rowCntHeightArr = [8, 16, 24];
	
						if (imageColorBoxCount > rowCntHeightArr[2]) {
							$(this).children(".catImageDetails").css({top: '218px', height: '107px'});
						} else if (imageColorBoxCount > rowCntHeightArr[1]) {
							$(this).children(".catImageDetails").css({top: '239px', height: '86px'});
						} else if (imageColorBoxCount > rowCntHeightArr[0]) {
							$(this).children(".catImageDetails").css({top: '260px', height: '65px'});
						} else {
							$(this).children(".catImageDetails").css({top: '260px', height: '65px'});
						}*/
					},
					function() {
						/******
						 * not currenlty doing the fade effect, just render the details
						$(this).fadeOut( function(){
							catProdImage.attr("src", offState);
							$(this).children(".catImageDetails").hide();
							$(this).children(".quickViewText").hide();
							$(this).fadeIn();
						});
						 */
						/**$(this).children(".catImageDetails").hide();
						$(this).children(".quickViewText").hide();*/
					}
				);
			}
		});
		
		$(".quickViewText").not(".stl").click(function(e) {
			//var catProdImage = $(this).parent().children().children().children("img.catProdImage");
			var catProdImage = $(this).parent().find("img.catProdImage");
			var colorboxTop = $.browser.msie ? ($(window).height() < 645 ? "-20px" : (($(window).height() - 645) / 2) + "px") : ($(window).height() < 610 ? "0px" : (($(window).height() - 610) / 2) + "px");
			quickViewModal = $.colorbox({
				fixed:false,
				top:colorboxTop,
				href:"/style/browse/popup/productDetailWithPicker.jsp?"+catProdImage.attr("rel"),
				width:"780px",
				height:$.browser.msie ? "645px": "610px",
				iframe:false,
				opacity:0.40,
				onLoad:function(){
				},
				onComplete:function(){
					$(".rollover").each(function() {
						src = $(this).children("img").attr("src");
						var offState = src;
						var temp = new Array();
						temp = src.split('.png');
						var onState = temp[0] + "_over.png";
						$(this).hover(
							function() {
								$(this).children("img").attr("src", onState);
							},
							function() {
								$(this).children("img").attr("src", offState);
							}
						);
					});

					dijit.byId('atg_store_richCart').hijackAllAddToCartNodes();
					//stop the scrolling
					//$('body').addClass('stop-scrolling');
					//$('body').bind('touchmove', function(e){e.preventDefault()})
				},
				onClosed:function(){
					//$('body').removeClass('stop-scrolling');
					//$('body').unbind('touchmove')
				}
			});

			e.preventDefault();
		});


		//setting catImageDetails click
		$(".imageContainer").each(function(index){
			var image = $(this).children(".atg_store_productImage")[0];
			var aTag = $(image).children("a")[0];
			var href = $(aTag).attr("href");
			var details = $(this).children(".catImageDetails")[0];
			$(details).attr("dest", href);
			$(details).removeAttr("onclick");
			$(details).click(function(){
				window.location = $(this).attr("dest");
			})
			
		})
		if (!skipLang){
			$("#languageSelected").click(function(e){
				toggleLanguageOptions();
			});
		}
		

		$(".cartItemEdit").click(function(e) {
			var catProdImage = $(this).parent().parent().parent().parent().parent().children(".itemImageDisplay").children("a").children("img");
			if (catProdImage.length == 0) {
				catProdImage = $(this).parent().parent().parent().parent().parent().children(".itemImageDisplay").children("img");
			}

			var rel = catProdImage.attr("rel");
			var colorboxTop = $.browser.msie ? ($(window).height() < 645 ? "-20px" : (($(window).height() - 645) / 2) + "px") : ($(window).height() < 610 ? "0px" : (($(window).height() - 610) / 2) + "px");
			quickViewModal = $.colorbox({
				fixed:false,
				top:colorboxTop,
				href:"/style/browse/popup/cartItemDetailWithPicker.jsp?"+encodeURI(rel)+"&editPopup=true",
				width:"780px",
				height:$.browser.msie ? "645px": "610px",
				iframe:false,
				opacity:0.40,
				onLoad:function(){
				},
				onComplete:function(){
					$(".rollover").each(function() {
						src = $(this).children("img").attr("src");
						var offState = src;
						var temp = new Array();
						temp = src.split('.png');
						var onState = temp[0] + "_over.png";
						$(this).hover(
							function() {
								$(this).children("img").attr("src", onState);
							},
							function() {
								$(this).children("img").attr("src", offState);
							}
						);
					});

					dijit.byId('atg_store_richCart').hijackAllAddToCartNodes();
					//$('body').addClass('stop-scrolling');
					//$('body').bind('touchmove', function(e){e.preventDefault()})
				},
				onClosed:function(){
					//$('body').removeClass('stop-scrolling');
					//$('body').unbind('touchmove')
				}
			});

			e.preventDefault();
		});

		//alert($(".atg_store_index").html());
		//$("#paginationHolder").html( $(".atg_store_index").html() );
		$("#paginationHolderBottom").html($("#paginationHolder").html() );
		//$(".atg_store_index").html("");
		//$(".atg_store_index").remove();


		$("#showFilters").click( function() {
			$("#filterBox").show();
		});

		$("#filterClose").click( function(e) {
			$("#filterBox").hide();
			e.preventDefault();
		});


		$(".dialog-form").dialog({
			autoOpen: false,
			closeOnEscape: true,
			closeText: 'CLOSE X',
			dialogClass: 'quickView',
			modal: true
		});


		//login modal box
		$(".loginLink").click(function(e) {
			var colorboxTop = $.browser.msie ? ($(window).height() < 690 ? "0px" : (($(window).height() - 690) / 2) + "px") : ($(window).height() < 640 ? "0px" : (($(window).height() - 640) / 2) + "px");
			$.colorbox({
				fixed:true,
				top:colorboxTop,
				href:"/style/myaccount/gadgets/loginPopup.jsp",
				width:"380px",
				height:$.browser.msie ? "490px": "440px",
				opacity:0.40,
				onLoad:function(){
				},
				onComplete:function(){
					if ($('#registrationDOB').is(':not(.hasDatepicker)')) {
		        		$('#registrationDOB').datepicker({
				            minDate: "-100Y",
				            maxDate: new Date(new Date().getFullYear(), 11, 31),
				            changeMonth: true,
				            changeYear: true,
				            yearRange: "-100:-0"
				        });
					}
				}
			});
			e.preventDefault();
		});

		$(".modalClose").live("click", function(e) {
			$.colorbox.close();
			quickViewModal = null;
			e.preventDefault();
		});

		//login modal form swapper
		$("input[name='lci_store_returning_user']").live("click", function() {
			switch ($(this).val()) {
				case 'yes':
					$("#loginFields").hide();
					$("#registerFields").show();
					$.colorbox.resize();
					break;
				default:
					$("#loginFields").show();
					$("#registerFields").hide();
					$.colorbox.resize();
			}
		});
		//Change Region Selector
		jQuery('#selectRegionUS').click(function(e){
			switch (getCurrentStoreLocale()){
			case 'en_US':
				break;
			default :
				handleCountryModalHref($, e, "/style/?storeId=334&locale=en_US&repriceOrder=true", "USA", this);
				break;
			}
		});
		jQuery('#selectRegionENCA').click(function(e){
			switch (getCurrentStoreLocale()){
			case 'en_CA':
				break;
			case 'en_US':
				handleCountryModalHref($, e, "/style/?storeId=333&repriceOrder=true&locale=en_CA", "Canada", this);
				break;
			default :
				switchLocaleRegion('en_CA');
				break;
			}
		});
		jQuery('#selectRegionFRCA').click(function(e){
			switch (getCurrentStoreLocale()){
			case 'fr_CA':
				break;
			case 'en_US':
				handleCountryModalHref($, e, "/style/?storeId=333&repriceOrder=true&locale=fr_CA", "Canada", this);
				break;
			default :
				switchLocaleRegion('fr_CA');
				break;
			}
		});
		
		/*
		 * Promotion code box click functionality
		 */

		jQuery(".couponCodeControl").focus( function() {
			var pcDefault = jQuery("#defaultPromotionCode");
			if (pcDefault){
				if (jQuery(this).val()==pcDefault.val()) {
					jQuery(this).val("");
				}
			}		
		});
		jQuery(".couponCodeControl").blur( function() {
			var pcDefault = jQuery("#defaultPromotionCode");
			if (pcDefault){
				if (jQuery(this).val()=="") {
					jQuery(this).val(pcDefault.val());
				}
			}		
		});
		
		//Change Region Modal
		$("a.country").click(function(e) {
			handleCountryModal(e, this);
	/*		var el = $(this),
				href = el.attr("href"),
				locale = (href.indexOf("locale=") > -1) ? href.substr(href.indexOf("locale=") + 7, 5) : "en_US";
			var modalHeight = ($(this).attr("title") == "Canada") ? "627" : "578";
//alert("country = " + $(this).attr("title"));
//if (document.all) { alert('I\'m still ie at heart!'); } else { alert('Forget about it!'); }
			var modalHeight = (document.all) ? modalHeight -= 0 : modalHeight -= 36 ;
			$(this).colorbox({
				href:"/style/global/gadgets/changeStore.jsp?region=" + locale,
				width:"365px",
				height: modalHeight + "px",
				opacity:0.40
			}, function(){
				//$.colorbox.resize();
				//bind button event
				$("input#modal-change-region-button").live("click", function (evt) {
					evt.preventDefault();
					evt.stopPropagation();
					top.location.href = href;
				}) // alert("modalHeight = " + modalHeight);
			});

			e.preventDefault();*/
		});

		//Forgot Password Modal
		$(".forgot_password_popup").live("click", function(e) {
			var colorboxTop = $.browser.msie ? ($(window).height() < 490 ? "0px" : (($(window).height() - 490) / 2) + "px") : ($(window).height() < 440 ? "0px" : (($(window).height() - 440) / 2) + "px");
			$.colorbox({
				fixed:true,
				top:colorboxTop,
				href:"/style/myaccount/passwordResetPopup.jsp",
				width:"380px",
				height:$.browser.msie ? "490px": "440px",
				opacity:0.40,
				onLoad:function(){
				},
				onComplete:function(){
				}
			});
			e.preventDefault();
		});

		//Generic rollover scripts

		$(".rollover").each(function() {
			src = $(this).children("img").attr("src");
			var offState = src;
			var temp = new Array();
			temp = src.split('.png');
			var onState = temp[0] + "_over.png";
			$(this).hover(
				function() {
					$(this).children("img").attr("src", onState);
				},
				function() {
					$(this).children("img").attr("src", offState);
				}
			);
		});

		$(".display-box").each(function() {
			var catProdImage = $(this).attr('id');
			$("#"+catProdImage).live('mouseover mouseout', function(event) {
				if (event.type == 'mouseover') {
					$("."+catProdImage).attr('style','display:block;');
					//var fixedLeftLength=55;
					//var leftPX=fixedLeftLength+$("#"+catProdImage).position().left;
					//$("."+catProdImage).css({  top : '0px', left : leftPX+"px" });
					//console.log("Testing");
				}
				else{
					$("."+catProdImage).attr('style','display:none;');
				}
			});
		});

		$('.rolloverThis').live('mouseover mouseout', function(event) {
			if (event.type == 'mouseover') {
				src = $(this).attr("src");
				if($(this).attr("disabled") != true) {
					if(src.indexOf("_over") == -1) {
						if (src.indexOf('.png') > -1) {
							var temp = new Array();
							temp = src.split('.png');
							var onState = temp[0] + "_over.png";
							$(this).attr("src", onState);
						}
						else {
							var temp = new Array();
							temp = src.split('.jpg');
							var onState = temp[0] + "_over.jpg";
							$(this).attr("src", onState);
						}
					}
				}
			} else {
				if($(this).attr("disabled") != true) {
					src = $(this).attr("src");
					var offState = src.replace("_over", "");
					$(this).attr("src", offState);
				}
			}
		});

		/*
		$('.addToBag').live('mouseover mouseout', function(event) {
			if (event.type == 'mouseover') {
				$(this).attr("src", "/style/images/add-to-bag_over.png");
			} else {
				$(this).attr("src", "/style/images/add-to-bag.png");
			}
		});
		*/

		$('.rolloverSwatch').live('mouseover mouseout', function(event) {
			if (event.type == 'mouseover') {
				var productId = $(this).children("a").children("img").attr('productId');
				var productThumbImg = $(this).children("a").children("img").attr('productThumbImg');
				if ($('#'+productId).data('original') == null) {
					$('#'+productId).data({ original:$('#'+productId).attr('src') });
				}
				$('#'+productId).attr({ src:productThumbImg });
			} else {
				var productId = $(this).children("a").children("img").attr('productId');
				$('#'+productId).attr({ src:$('#'+productId).data('original') });
			}
		});
		
		$('.atg_store_productImage a').live('mouseenter',function(){
			var stlParent = $(this).parents('.imageContainer.stl');
			if ($(stlParent).length == 0) {
				var aId = $(this).attr('id');
				//check to see if the images have been loaded
				if ($(this).attr('rel')!='imgsLoaded') {
					//check for images
					var colorCode=$(this).children("img.catProdImage").attr('class');
					if (colorCode.indexOf(' ')>0) {
						colorCode = colorCode.split(' ')[0];
					}
					var URLString = "/style/browse/popup/scene7ImageSet.jsp?size=small&productAndColorCode="+colorCode;
					var xmlHttp = null;
					xmlHttp = new XMLHttpRequest();
					xmlHttp.open( "GET", URLString, false );
					xmlHttp.send( null );
					var imageString=xmlHttp.responseText.trim();
					//pre-load the images
					var imagePath=$(this).children("img.catProdImage").attr('src').split('LeChateau')[0];
					imageStringDisp = imageString.split(',');
					if (imageStringDisp.length > 1) {
						//get the current image
						var defaultImage = $(this).children('img.catProdImage')[0];
						var defaultImageSrc = $(defaultImage).attr('src');
						var container = $(this);
						for (var i = 0; i < imageStringDisp.length; i++) {
							var newImageSrc = imagePath + imageStringDisp[i];
							if (newImageSrc != defaultImageSrc) {
								//clone and add the image
								var newImage = $('<img>').attr('class', $(defaultImage).attr('class'));
								newImage.removeClass('main');
								newImage.attr('src', newImageSrc);
								newImage.appendTo(container);
							}
							$(this).attr('rel', 'imgsLoaded');
						}						
					}
				}
				//images are loaded now...start rotating
				var active = $(this).children('img.main');
				var imageRotationFunction = function(){
					if (intervalIds[aId] != undefined) {
						intervalIds[aId] = undefined;
						var next = (active.next().length > 0) ? active.next() : $(active).parent().children('img.catProdImage:first');
						if ($(active).attr('src') != $(next).attr('src')) {  //don't rotate if there is only one image
						    next.css('z-index',51);//move the next image up the pile
						    active.fadeOut(timeToFade,function(){//fade out the top image
								  active.css('z-index',50).show().removeClass('main');//reset the z-index and unhide the image
							      next.css('z-index',52).addClass('main');//make the next image the top one
							      active = next;
						    });
						    intervalIds[aId] = window.setTimeout(imageRotationFunction, timeToRotate);
						}
					}
				};
				if (intervalIds[aId] == undefined) {
					intervalIds[aId] = window.setTimeout(imageRotationFunction, initialTimeToRotate);
				}
			}
		}).live('mouseleave',function(){
			var stlParent = $(this).parents('.imageContainer.stl');
			if ($(stlParent).length == 0) {
				var aId = $(this).attr('id');
				var rId = intervalIds[aId];
				if(rId!=undefined) {
					window.clearTimeout(refreshIntervalId);
					$(this).children('img.catProdImage.main').stop(true,true);
					$(this).children('img.catProdImage').removeClass('main').css('z-index','');
					$(this).children('img.catProdImage:first').addClass('main');
					intervalIds[aId] = undefined;
				}
			}
		});
				
		/**************************
		 * product page scripts
		 */
		$("#tabs").tabs();
		$("#scrollTabs").tabs();

		/*
		 * script to start scroller on product page for recently viewed etc
		*/

		jQuery('#scrollTabs').bind('tabsshow', function(event, ui) {
		    if (ui.panel.id == "map-tab") {
		        resizeMap();
		    }
		    var tabScrollId = $('#'+ui.panel.id+'  ul').attr("id");
		    $('#'+tabScrollId).carouFredSel({
				auto : false,
				prev :$('#'+tabScrollId+'_prev'),
				next : $('#'+tabScrollId+'_next'),
				scroll : {
			        items       : 1,
			        speed       : 1000
			    },
			    items : {
					visible		: 3
				}

			});
		});

		jQuery("#tabScroll1").carouFredSel({
			auto : false,
			prev : "#tabScroll1_prev",
			next : "#tabScroll1_next",
			scroll : {
		        items       : 1,
		        speed       : 1000
		    },
		    items : {
				visible		: 3
			}
		});



		$(".showTruncated").live("click",  function(e) {
			$(this).parents(".truncated").hide();
			$(this).parents(".truncated").siblings(".notTruncated").show();
			e.preventDefault();
		});
		$(".hideTruncated").live("click",  function(e) {
			$(this).parents(".notTruncated").hide();
			$(this).parents(".notTruncated").siblings(".truncated").show();
			e.preventDefault();
		});

		$('.addToWishListButton').live('mouseover mouseout', function(event) {
			if (event.type == 'mouseover') {
				$("#wishLists").show();
				$("#wishListsLook").show();
			} else {
				$("#wishLists").hide();
				$("#wishListsLook").hide();
			}
		});


		$("#quickViewDetails .swatchImage").live("click", function(event) {
			if ($(this).parent().attr("class") == null || $(this).parent().attr("class") != 'disabled') {
					//document.getElementById("quickViewImageFrame").contentWindow.changeColor($(this).attr("alt"));
				changeColor($(this).attr("alt"));
			}
		});

		$(".productColors .swatchImage").live("click", function(event) {
			if ($(this).parent().attr("class") == null || $(this).parent().attr("class") != 'disabled') {
				//document.getElementById("productImageFrame").contentWindow.changeColor($(this).attr("alt"));
				changeColor($(this).attr("alt"));
				event.preventDefault();
			}
		});


		$(".addToCartButtonDisabled").live("click", function() {
			$("#addError, #addErrorColor, #addErrorSize, #addErrorNoQuantity, #addErrorQuantityOver10").hide();

			if ($("#atg_store_quantityField").val() > 9) {
				$("#addErrorQuantityOver10").show();
			} else if ($("#atg_store_quantityField").val() == 0 || $("#atg_store_quantityField").size() == 0) {
				$("#addErrorNoQuantity").show();
			} else if ((document.getElementById('atg_store_colorPicker') != null && $(".atg_store_colorPicker .selector .selected").size() == 0) &&
					   (document.getElementById('atg_store_sizePicker') != null && $(".atg_store_sizePicker .selector .selected").size() == 0)) {
				$("#addError").show();
			} else {
				if (document.getElementById('atg_store_colorPicker') != null && $(".atg_store_colorPicker .selector .selected").size() == 0) {
					$("#addErrorColor").show();
				}
				else if (document.getElementById('atg_store_sizePicker') != null && $(".atg_store_sizePicker .selector .selected").size() == 0) {
					$("#addErrorSize").show();
				}
			}
			return false;
		});

		$(".cartEditUpdateButton").live("click", function(){
			atg.store.picker.updateItem();
		});
		
		$(".cvvCell").hover(
			function() {
				$(".cvvPopup").show();
			}, function() {
				$(".cvvPopup").hide();
			}
		);

		$(".emailCell").hover(
				function() {
					$(".emailPopup").show();
				}, function() {
					$(".emailPopup").hide();
				}
			);

		// SCRIPT FOR YMAL AND COMPLETE THE LOOK TABS
		$(".toptabs").live("click", function() {
			$(this).children("a").trigger("click");
		});

		// SCRIPT FOR YMAL AND COMPLETE THE LOOK TABS
		$("div.catSize  ul  li").each( function() {
			$(this).click( function(e) {
				psize = $(this).children("a").html();
				setSizeCode(psize);
			});
		});

		$("#ordersummaryform,#atg_store_checkoutShippingAddress,#atg_store_checkoutBilling,#ordersummaryform").submit(function() {
			//$(".order_summary_textbox").val($(".order_summary_textbox").val().toUpperCase());
			//alert($(".order_summary_textbox").val());
		});
		
		$(".enter_code_title").click(function(e){
			$('.enter_code_display').toggle();
			$('.enter_code_title img.down').toggle();
			$('.enter_code_title img.up').toggle();
		})
		
		$(".shopTheLookModal").live("click", function(e){
			var shopTheLookProdLink = $(this).children("a");
			var colorboxTop = $.browser.msie ? ($(window).height() < 645 ? "-20px" : (($(window).height() - 645) / 2) + "px") : ($(window).height() < 610 ? "0px" : (($(window).height() - 610) / 2) + "px");
			quickViewModal = $.colorbox({
				fixed:false,
				top:colorboxTop,
				href:"/style/browse/popup/productDetailWithPicker.jsp?"+shopTheLookProdLink.attr("rel"),
				width:"780px",
				height:$.browser.msie ? "645px": "610px",
				iframe:false,
				opacity:0.40,
				onLoad:function(){
				},
				onComplete:function(){
					dijit.byId('atg_store_richCart').hijackAllAddToCartNodes();
					//$('body').addClass('stop-scrolling');
					//$('body').bind('touchmove', function(e){e.preventDefault()})
				},
				onClosed:function(){
					//$('body').removeClass('stop-scrolling');
					//$('body').unbind('touchmove')
				}
			});

			e.preventDefault();
		})
		
		//var welcomeAreaULs = $("#welcomeArea ul");
		//var customerPhoneNode = $(welcomeAreaULs[0]).children("li")[0];
		//var phoneText = customerPhoneNode.innerHTML;
		//if (phoneText && phoneText.indexOf(":")>0){
			//phoneText = phoneText.substring(phoneText.indexOf(":")+1);
			//phoneText = phoneText.substring(phoneText.indexOf("1"));
			//customerPhoneNode.innerHTML = phoneText;
		//}
		
		//get the full text
		//
		
		var searchDivs = $("#atg_store_search").css("z-index", "2000");
		
		//add the store locator popup for product details page
		jQuery('.storeLocatorModal').colorbox({iframe: true, width: 850, height: 675});
		//loadjscssfile("http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js", "js") //dynamically load and add this .js file
		
		$('.pcaflaglabel').live('click', function(){
			var country = $(this).html();
			var countryVal = 'CA';
			if (country != 'Canada') {
				countryVal = 'US';
			}
			var selectBox = $('#atg_store_countryNameSelect');
			$(selectBox).val(countryVal);
			$(selectBox).trigger('change');
			populateStateDyn(document.getElementById('atg_store_countryNameSelect'));
		});
		
        $('#atg_store_registerDateOfBirth').datepicker({
            minDate: "-100Y",
            maxDate: new Date(new Date().getFullYear(), 11, 31),
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:-0"
        });
        jQuery.getScript('//lechateau.scene7.com/s7sdk/2.7/js/s7sdk/utils/Utils.js');
        $('.galleryVideo').click(function(e){
        	var imageContainer = $(this).closest('.imageContainer');
        	//var videoContainer = $(imageContainer).next('.videoContainer');
        	$(imageContainer).fadeOut('fast');
        	var asset = $(this).attr('rel');
        	var containerId = $(this).attr('containerId');
        	s7GalleryShowVideo(containerId, asset);
        });
        
        $('.galleryVideoCloseButton').live('click', function(e){
        	var videoContainerWrapper = $(this).closest('.galleryVideoWrapper');
        	var imageContainer = $(videoContainerWrapper).prev('.imageContainer');
        	$(imageContainer).fadeIn('fast');
        	$(videoContainerWrapper).fadeOut('fast', function(){
        		$(this).find('.videoContainer').html('')
        	});
        });
    }

    function switchLocaleRegion(newLocale){
    	//get the current href
    	var href = window.location.href;

    	//if "#" is in href, strip out since setting a new href with window.location will not load with # in new URL
    	if (href.indexOf("#") > 0) {
    		href = href.substring(0, href.indexOf("#"));
    	}

    	//check to see if "selectedSize" is in href
    	if (href.indexOf("selectedSize=") > 0) {
    		//if it is, remove the value
    		var hrefSplit = href.split("?");
    		var qString = hrefSplit[1];
    		var qStringSplit = qString.split("&");
    		for (var x=0; x<qStringSplit.length; x++){
    			var sString = qStringSplit[x].substr(0,12);
    			if (sString == "selectedSize"){
    				qStringSplit[x]="selectedSize=";
    				break;
    			}
    		}
    		qString = qStringSplit.join("&");
    		hrefSplit[1] = qString;
    		href = hrefSplit.join("?");
    	}
    	//check to see if "selectedColor" is in href
    	if (href.indexOf("selectedColor=") > 0) {
    		//if it is, remove the value
    		var hrefSplit = href.split("?");
    		var qString = hrefSplit[1];
    		var qStringSplit = qString.split("&");
    		for (var x=0; x<qStringSplit.length; x++){
    			var sString = qStringSplit[x].substr(0,13);
    			if (sString == "selectedColor"){
    				qStringSplit[x]="selectedColor=";
    				break;
    			}
    		}
    		qString = qStringSplit.join("&");
    		hrefSplit[1] = qString;
    		href = hrefSplit.join("?");
    	}

    	//check to see if "locale" is in href
    	if (href.indexOf("locale=")>0){
    		//if it is, replace the value
    		var hrefSplit = href.split("?");
    		var qString = hrefSplit[1];
    		var qStringSplit = qString.split("&");
    		for (var x=0; x<qStringSplit.length; x++){
    			var sString = qStringSplit[x].substr(0,6);
    			if (sString == "locale"){
    				qStringSplit[x]="locale=" + newLocale;
    				break;
    			}
    		}
    		qString = qStringSplit.join("&");
    		hrefSplit[1]=qString;
    		href = hrefSplit.join("?");
    	} else {
    		if (href.indexOf("style")>0){
    			//if not, add it to the href
        		if (href.indexOf("?")>0){
        			href = href + "&locale=" + newLocale;
        		} else {
        			href = href + "?locale=" + newLocale;
        		}
    		} else {
    			href = href + "style?locale=" + newLocale;
    		}
    		
    	}

    	//set the location
    	window.location = href;
    }  
  
  	function checkInventory(obj) {
  		objId = "#"+obj.id;
  		var totalOutOfStock = jQuery(".atg_store_availability:visible").length;
		if(totalOutOfStock > 0) {
			jQuery(objId).attr("href", "/style/cart/cart.jsp");
		}
	}

  	function handleCountryModal(e, obj){
  		var el = jQuery(obj),
		href = el.attr("href"),
		locale = (href.indexOf("locale=") > -1) ? href.substr(href.indexOf("locale=") + 7, 5) : "en_US";
	var modalHeight = (jQuery(obj).attr("title") == "Canada") ? "600" : "600";
//alert("country = " + $(this).attr("title"));
//if (document.all) { alert('I\'m still ie at heart!'); } else { alert('Forget about it!'); }
	var modalHeight = (document.all) ? modalHeight -= 0 : modalHeight -= 36 ;
	var colorboxTop = jQuery(window).height() < modalHeight ? "0px" : ((jQuery(window).height() - modalHeight) / 2) + "px";
	jQuery(obj).colorbox({
		fixed:true,
		top:colorboxTop,
		href:"/style/global/gadgets/changeStore.jsp?region=" + locale,
		width:"365px",
		height: modalHeight + "px",
		opacity:0.40
	}, function(){
		//$.colorbox.resize();
		//bind button event
		jQuery("input#modal-change-region-button").live("click", function (evt) {
			evt.preventDefault();
			evt.stopPropagation();
			top.location.href = href;
		}) // alert("modalHeight = " + modalHeight);
	});

	e.preventDefault();
  	}
  	
  	function handleCountryModalHref($, e, href, country, obj){
		var locale = (href.indexOf("locale=") > -1) ? href.substr(href.indexOf("locale=") + 7, 5) : "en_US";
	var modalHeight = (country == "Canada") ? "600" : "600";

	var modalHeight = (document.all) ? modalHeight -= 0 : modalHeight -= 36 ;
	var colorboxTop = $(window).height() < modalHeight ? "0px" : (($(window).height() - modalHeight) / 2) + "px";
	$.colorbox({
		fixed:true,
		top:colorboxTop,
		href:"/style/global/gadgets/changeStore.jsp?region=" + locale,
		width:"365px",
		height: modalHeight + "px",
		opacity:0.40
	}, function(){
		//bind button event
		$("input#modal-change-region-button").live("click", function (evt) {
			evt.preventDefault();
			evt.stopPropagation();
			top.location.href = href;
		}) // alert("modalHeight = " + modalHeight);
	});

  	}

/***************
 * support for filters on cat pages
 * jag
 *
 * **************/

  function restProdFilter(){
  	var formAction = document.categoryDisplayFilter.action;
  	var actionStringArray = formAction.split("&");
  	var newActionString = "";
  	for ( var i=actionStringArray.length-1; i>=0; --i ){
  		if(actionStringArray[i].indexOf("style/") > 0){
  			newActionString = actionStringArray[i];
  		}
  	}
  	for ( var k=actionStringArray.length-1; k>=0; --k ){
  		if((actionStringArray[k].indexOf("_DARGS") == -1) &&
  				(actionStringArray[k].indexOf("filterValue2") == -1) &&
  				(actionStringArray[k].indexOf("filterValue1") == -1) &&
  				(actionStringArray[k].indexOf("sort") == -1) &&
  				(actionStringArray[k].indexOf("style/") == -1)){
  			newActionString = newActionString + "&"+actionStringArray[k];
  		}
  	}
  	document.categoryDisplayFilter.action = newActionString;
  	document.forms["categoryDisplayFilter"].submit();
  }

  function setSizeCode(psize){
  	var size = document.getElementById("filterS");
  	size.value = psize;
  	var newActionForm = prepareFormAction(document.categoryDisplayFilter.action, "filterValue2", psize);
  	document.categoryDisplayFilter.action = newActionForm;
  	document.forms["categoryDisplayFilter"].submit();
  }
  function prepareFormAction(action, key, value){
  	var actionStringArray = action.split("&");
  	var newActionString = "";
  	for ( var i=actionStringArray.length-1; i>=0; --i ){
  		if(actionStringArray[i].indexOf("style/") > 0){
  			newActionString = actionStringArray[i];
  		}
  	}

  	for ( var k=actionStringArray.length-1; k>=0; --k ){
  		if((actionStringArray[k].indexOf("_DARGS") == -1) && (actionStringArray[k].indexOf(key) == -1) && (actionStringArray[k].indexOf("style/") == -1)){
  			newActionString = newActionString + "&"+actionStringArray[k];
  		}
  	}
  	newActionString += "&"+key+"="+value;
  	return newActionString;
  }


  function setColorCode(pcolor){
  	var color = document.getElementById("filterC");
  	color.value = pcolor;
  	var newActionForm = prepareFormAction(document.categoryDisplayFilter.action, "filterValue1", pcolor);
  	document.categoryDisplayFilter.action = newActionForm;
  	document.forms["categoryDisplayFilter"].submit();
  }

  function setSortFilter(sortValue){
  	var sortFilter = document.getElementById("sortPrice");
  	sortFilter.value = sortValue;
  	var formAction = document.categoryDisplayFilter.action;
  	var newActionForm = prepareFormAction(document.categoryDisplayFilter.action, "sort", sortValue);
  	document.categoryDisplayFilter.action = newActionForm;
  	document.forms["categoryDisplayFilter"].submit();
  }

  function doReplace(fieldId) {
	oldCode = jQuery("#"+fieldId).val();
	newCode = removeNonAlpha(oldCode);
	jQuery("#"+fieldId).val(newCode);
	return true;
  }

  function removeNonAlpha(oldStr) {
	  var temp = oldStr;
	  newStr =  temp.replace(/[^a-zA-Z0-9]/g,"");
     return newStr;
  }

  function sizeChart(defaultInstruction) {

	  var winWidth;	//+50
	  var winHeight;	//+60

	  switch(defaultInstruction) {
	  	case "WOMENTOPS":
	  		winWidth = "800";
	  		winHeight = "580";
	  		break;
	  	case "MENBELTS":
	  		winWidth = "800";
	  		winHeight = "610";
	  		break;
	  	case "MENBLAZER":
	  		winWidth = "800";
	  		winHeight = "610";
	  		break;
	  	case "MENCASUALSHIRT":
	  		winWidth = "800";
	  		winHeight = "810";
	  		break;
	  	case "MENDRESSSHIRT":
	  		winWidth = "800";
	  		winHeight = "1426";
	  		break;
	  	case "MENHATS":
	  		winWidth = "800";
	  		winHeight = "623";
	  		break;
	  	case "MENPANTS":
	  		winWidth = "800";
	  		winHeight = "632";
	  		break;
	  	case "MENRINGS":
	  		winWidth = "800";
	  		winHeight = "380";
	  		break;
	  	case "MENTOPS":
	  		winWidth = "800";
	  		winHeight = "591";
	  		break;
	  	case "SHOES":
	  		winWidth = "800";
	  		winHeight = "473";
	  		break;
	  	case "WOMENBELTS":
	  		winWidth = "800";
	  		winHeight = "506";
	  		break;
	  	case "WOMENBOTTOMS1":
	  		winWidth = "800";
	  		winHeight = "546";
	  		break;
	  	case "WOMENBOTTOMS2":
	  		winWidth = "800";
	  		winHeight = "550";
	  		break;
	  	case "WOMENCOATSJACKETS":
	  		winWidth = "800";
	  		winHeight = "602";
	  		break;
	  	case "WOMENDRESSES":
	  		winWidth = "800";
	  		winHeight = "612";
	  		break;
	  	case "WOMENHATSGLOVES":
	  		winWidth = "800";
	  		winHeight = "556";
	  		break;
	  	case "WOMENRINGS":
	  		winWidth = "800";
	  		winHeight = "388";
	  		break;
	  	default:
	  		winWidth = "750";
  			winHeight = "500";
	  }

	  atg.store.util.openwindow('/style/browse/gadgets/sizeChart.jsp?instruction='+defaultInstruction,'sizeChart',winWidth,winHeight);

  }

  function lookQuickView(rel) {
	var colorboxTop = $.browser.msie ? ($(window).height() < 645 ? "-20px" : (($(window).height() - 645) / 2) + "px") : ($(window).height() < 610 ? "0px" : (($(window).height() - 610) / 2) + "px");
	quickViewModal = $.colorbox({
		fixed:false,
		top:colorboxTop,
		href:"/style/browse/popup/productDetailWithPicker.jsp?"+rel,
		width:"780px",
		height:$.browser.msie ? "645px": "610px",
		iframe:false,
		opacity:0.40,
		onLoad:function(){
		},
		onComplete:function(){
			dijit.byId('atg_store_richCart').hijackAllAddToCartNodes();
			//$('body').addClass('stop-scrolling');
			//$('body').bind('touchmove', function(e){e.preventDefault()})
		},
		onClosed:function(){
			//$('body').removeClass('stop-scrolling');
			//$('body').unbind('touchmove')
		}
	});
  }
  
  function storeLocatorPopup() {
	  atg.store.util.openwindow('/style/company/storeLocatorPopup.jsp','storeLocator','790','560');
  }
  
  String.prototype.endsWith = function(suffix) {
	  return this.indexOf(suffix, this.length - suffix.length) !== -1;
  }
  
  function doCartCheckout(){
	  jQuery("#cartform").submit();
  }
  
  function doCartContinueShopping(){
	  window.location="/style/index.jsp";
  }
  
  function showShippingLinkInformation(){
		var vhtml = "<html><head><title>Hello</title><body></body></html>";
		jQuery(this).colorbox({
			html:vhtml,//"/style/myaccount/gadgets/loginPopup.jsp",
			width:"380px",
			height:"440px",
			opacity:0.40
		}, function(){
			alert('hello shipping information');
			//$.colorbox.resize();
		});
	}
  
  function getHTTPRequest() {
	  var xmlhttp;
	  /*@cc_on
	  @if (@_jscript_version >= 5)
	    try {
	      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	    } catch (e) {
	      try {
	        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	      } catch (E) {
	        xmlhttp = false;
	      }
	    }
	  @else

	  xmlhttp = false;
	  @end @*/
	  if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
	    try {
	      xmlhttp = new XMLHttpRequest();
	    } catch (e) {
	      xmlhttp = false;
	    }
	  }
	  return xmlhttp;
	}

  var retryColorLoadElement = null;
  function retryColorLoad(){
//    document.getElementById("quickViewImageFrame").contentWindow.changeColor($(this).attr("alt"));
	  changeColor($(this).attr("alt"));
  }

  var quickViewModal = null;
  function closeQuickViewModal(){     
    if (quickViewModal != null) {
      quickViewModal.colorbox.close();
      quickViewModal = null;
    }
    window.scrollTo(0, 0);
  }

  function closeStoreLocatorModal(){
	  jQueryColorBox.colorbox.close();
  }
  
  function selectGiftCardSku(locale) {
    for (var i=0; i<document.giftCardPurchase.selectedSku.options.length; i++) {
      if (document.giftCardPurchase.selectedSku.options[i].selected) {
        document.giftCardPurchase.catalogRefId.value = document.giftCardPurchase.selectedSku.options[i].value;

        var giftcardamount = document.giftCardPurchase.selectedSku.options[i].id;
        var giftcardlocale = locale == 'fr_CA' ? 'fr' : 'en';
        jQuery('#giftCardImg').attr('src', '/style/images/giftcards/giftcard_'+giftcardamount+'_168x154_'+giftcardlocale+'.jpg');
      }
    }
  }
  
  function loadjscssfile(filename, filetype){
	  if (filetype=="js"){ //if filename is a external JavaScript file
	   var fileref=document.createElement('script');
	   fileref.setAttribute("type","text/javascript");
	   fileref.setAttribute("src", filename);
	  } else if (filetype=="css"){ //if filename is an external CSS file
	   var fileref=document.createElement("link");
	   fileref.setAttribute("rel", "stylesheet");
	   fileref.setAttribute("type", "text/css");
	   fileref.setAttribute("href", filename);
	  }
	  if (typeof fileref!="undefined"){
	   document.getElementsByTagName("head")[0].appendChild(fileref);
	  }
   }

   function s7ProductColorChangeClick(frame,flyOut,skuColorCode) {
   }
   
   /*function s7GalleryShowVideo(container, asset) {
	   var newHTML = '<iframe class="videoContainerIframe" src="http://lechateau.scene7.com/s7viewers/html5/VideoViewer.html?videoserverurl=http://lechateau.scene7.com/is/content/&emailurl=http://lechateau.scene7.com/s7/emailFriend&serverUrl=http://lechateau.scene7.com/is/image/&config=Scene7SharedAssets/Universal_HTML5_Video_social&contenturl=http://lechateau.scene7.com/skins/&asset=LeChateau/' + asset + '&stagesize=260,325&autoplay=1"></iframe>';
	   newHTML = newHTML + '<div class="galleryVideoClose"><div class="galleryVideoCloseInner"><div class="galleryVideoCloseText">' + closeText + '</div><img src="/style/images/close_overlay.png" alt="' + closeText + '"></div></div>';
	   jQuery(container).html(newHTML);
	   jQuery(container).fadeIn('fast');
   }*/
   function s7GalleryShowVideo(container, asset) {
	   var containerObj = jQuery('#' + container);
	   var containerWrapper = jQuery(containerObj).closest('.galleryVideoWrapper');
	   jQuery(containerWrapper).fadeIn('fast', function(){
		   var videoViewer = new s7viewers.VideoViewer({
				"containerId":container,
				"params":{
					"asset":asset,
					"serverurl":"http://lechateau.scene7.com/is/image/",
					"videoserverurl":"http://lechateau.scene7.com/is/content/",
					"stagesize":"262,326",
					"VideoPlayer.initialbitrate": "700",
					"autoplay":"1"
				}
			});
			videoViewer.init();
	   });
   }
   
   function s7ShowVideo(container, asset) {
	   var videoViewer = new s7viewers.VideoViewer({
			"containerId":container,
			"params":{
				"asset":asset,
				"serverurl":"http://lechateau.scene7.com/is/image/",
				"config":"Scene7SharedAssets/Universal_HTML5_Video_social",
				"contenturl":"http://lechateau.scene7.com/skins/",
				"emailurl":"http://lechateau.scene7.com/s7/emailFriend",
				"videoserverurl":"http://lechateau.scene7.com/is/content/",
				"stagesize":"470,588",
				"VideoPlayer.initialbitrate": "2000",
				"autoplay":"1"
			}
		});
		videoViewer.init();
   }
   
   /*function s7GalleryCloseVideo(container) {
	   jQuery(container).fadeOut('fast');
	   jQuery(container).html('');
	   
   }*/
   
   function manualQuickView(productId, selectedColor) {
	   var query_string = 'productId=' + productId;
	   if (selectedColor) {
		   query_string = query_string + '&selectedColor=' + selectedColor;
	   }
	   var colorboxTop = jQuery.browser.msie ? (jQuery(window).height() < 645 ? "-20px" : ((jQuery(window).height() - 645) / 2) + "px") : (jQuery(window).height() < 610 ? "0px" : ((jQuery(window).height() - 610) / 2) + "px");
	   quickViewModal = jQuery.colorbox({
			fixed:false,
			top:colorboxTop,
			href:"/style/browse/popup/productDetailWithPicker.jsp?"+query_string,
			width:"780px",
			height:jQuery.browser.msie ? "645px": "610px",
			iframe:false,
			opacity:0.40,
			onLoad:function(){
			},
			onComplete:function(){
				jQuery(".rollover").each(function() {
					src = jQuery(this).children("img").attr("src");
					var offState = src;
					var temp = new Array();
					temp = src.split('.png');
					var onState = temp[0] + "_over.png";
					jQuery(this).hover(
						function() {
							jQuery(this).children("img").attr("src", onState);
						},
						function() {
							jQuery(this).children("img").attr("src", offState);
						}
					);
				});

				dijit.byId('atg_store_richCart').hijackAllAddToCartNodes();
				//stop the scrolling
				//$('body').addClass('stop-scrolling');
				//$('body').bind('touchmove', function(e){e.preventDefault()})
			},
			onClosed:function(){
				//$('body').removeClass('stop-scrolling');
				//$('body').unbind('touchmove')
			}
		});
	   
   }
   
