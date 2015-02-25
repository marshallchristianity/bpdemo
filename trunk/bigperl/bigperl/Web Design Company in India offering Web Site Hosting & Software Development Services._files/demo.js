// DEMO FUNCTIONS
var themeURL = 'http://renklibeyaz.com/slopehtml';
$(document).ready(function(){
	$('body').append('<div id="palette">\
		<div id="paletteHeader">\
			<div id="colorResult">#ffd800</div>\
			<a href="javascript:void(0);" class="closeButton"></a>\
			<a href="javascript:void(0);" class="openButton"></a>\
		</div>\
		<div id="paletteBody">\
			<div id="colorPicker"></div>\
			<canvas id="colorPalette" width="150" height="150"></canvas>\
		</div>\
	</div>');
	DrawPicker('colorPalette');
});

var themeVars = {'@ColorOne' : '#ffd800'}
				
function DrawPicker(pickerID){
	mobileDevice = false;
	if( navigator.userAgent.match(/Android/i) || 
		navigator.userAgent.match(/webOS/i) ||
		navigator.userAgent.match(/iPhone/i) ||
		navigator.userAgent.match(/iPad/i) ||
		navigator.userAgent.match(/iPod/i)
		) mobileDevice = true;

	if(!isCanvasSupported() || mobileDevice){
		$('#palette').hide();
		return false;
	}
	
    var ctx = document.getElementById(pickerID).getContext('2d');
    var img = new Image();
    img.src="data:image/png;base64,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";
	//img.src = themeURL+'/images/280.png';
    img.onload = function(){
		ctx.drawImage(img,0,0,150,150);
	}
	
	var defColor = $.cookie("defColor");
	var defColorA = $.cookie("defColorA");
	var defPalette = $.cookie("defPalette");
	var defPaletteX = $.cookie("defPaletteX");
	var defPaletteY = $.cookie("defPaletteY");
	if(defColor!=null){
		setDemoColor(defColor, defColorA);
		setDemoColorPreview(defColor, defColorA);
	}
	if(defPalette=='hide')
		hidePalette();
	else if(defPalette==null){
		if((($(window).width()-940)/2)-40-$('#palette').width()<0){
			hidePalette();
		}
	}
	/*if(defPaletteX!=null && defPaletteY!=null){
		if(defPaletteX<20) defPaletteX = 20;
		if(defPaletteY<20) defPaletteY = 20;
		if(defPaletteX>$(window).width()) defPaletteX = $(window).width()-20;
		if(defPaletteY>$(window).height()) defPaletteY = $(window).height()-20;
		$('#palette').css({left:defPaletteX+'px', top:defPaletteY+'px'});
	}*/
	
	
	$('#paletteHeader .closeButton').click(hidePalette);
	$('#paletteHeader .openButton').click(showPalette);
	  
	$('#'+pickerID+', #colorPicker').bind('selectstart dragstart', rFalse);
	$('#'+pickerID+', #colorPicker').bind('mousedown', function(){
		$('#'+pickerID).bind('mousemove', {pickerID:pickerID},GetColor);
	});

	$('#'+pickerID+', #colorPicker').bind('mouseup', function(){
		$('#'+pickerID).unbind('mousemove', GetColor);
		$.cookie("defColor", $('#colorResult').html(), {path:'/'});
		$.cookie("defColorA", $('#colorResult').attr('rel'), {path:'/'});
		setDemoColor($('#colorResult').html(), $('#colorResult').attr('rel'));
	});
	
	/*$('#paletteHeader').bind('mousedown', function(e){
		$(document).bind('selectstart dragstart', rFalse);
		if(typeof document.body.style.MozUserSelect!="undefined") //Firefox route
		document.body.style.MozUserSelect="none";
		
		$(document).bind('mouseup', function(){
			$.cookie('defPaletteX', $('#palette').offset().left, {path:'/'});
			$.cookie('defPaletteY', $('#palette').offset().top, {path:'/'});
			$(document).unbind('selectstart dragstart', rFalse);
			$(document).unbind('mousemove', movePalette);
		});
		
		$(document).bind('mousemove', {fX:e.pageX, fY:e.pageY, pX:$('#palette').offset().left, pY:$('#palette').offset().top}, movePalette);
	});	 */
}

function hidePalette(){
	$.cookie("defPalette", 'hide', {path:'/'});
	$('#paletteHeader .openButton').show();
	$('#paletteHeader .closeButton').hide();
	$('#paletteBody, #ThemeSwitch, #colorResult').hide();
}
function showPalette(){
	$.cookie("defPalette", 'show', {path:'/'});
	$('#paletteHeader .openButton').hide();
	$('#paletteHeader .closeButton').show();
	$('#paletteBody, #ThemeSwitch, #colorResult').show();
}

function setDemoColor(color, colora){
	themeVars['@ColorOne'] =  color;
	less.modifyVars(themeVars);
}
function setDemoColorPreview(color, colora){
	$('#colorResult').html(color);
    $('#colorResult').css('background-color', color);
    $('#colorResult').attr('rel', colora);
}

function movePalette(event){
	var x = (event.pageX-event.data.fX) + event.data.pX;
	var y = (event.pageY-event.data.fY) + event.data.pY;
	$('#palette').css({left:x+'px', top:y+'px'});
}
function GetColor(event){
        var x = event.pageX - $(event.currentTarget).parent().offset().left;
        var y = event.pageY - $(event.currentTarget).parent().offset().top;
        var ctx = document.getElementById(event.data.pickerID).getContext('2d');
        var imgd = ctx.getImageData(x, y, 1, 1);
        var data = imgd.data;
		$('#colorPicker').css({left:(x-5)+'px', top:(y-5)+'px'});
        var hexString = RGBtoHex(data[0],data[1],data[2]);
        setDemoColorPreview('#'+hexString, 'rgba('+data[0]+','+data[1]+','+data[2]+',.7)');
}
function RGBtoHex(R,G,B) {return toHex(R)+toHex(G)+toHex(B)}
function toHex(N) {
      if (N==null) return "00";
      N=parseInt(N); if (N==0 || isNaN(N)) return "00";
      N=Math.max(0,N); N=Math.min(N,255); N=Math.round(N);
      return "0123456789ABCDEF".charAt((N-N%16)/16)
           + "0123456789ABCDEF".charAt(N%16);
}
function rFalse(event){ return false; }
function isCanvasSupported(){
  var elem = document.createElement('canvas');
  return !!(elem.getContext && elem.getContext('2d'));
}