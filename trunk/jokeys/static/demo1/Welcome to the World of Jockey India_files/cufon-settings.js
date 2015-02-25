function initCufon() {
 
	Cufon.replace('#nav-holder a', { fontFamily: 'The Sans Bold', hover: true });
	Cufon.replace('#media-centre-top h1', { fontFamily: 'Arial', hover: true });
	Cufon.replace('#content-tabbed-nav a', { fontFamily: 'Arial', hover: true });
	Cufon.replace('#about-tabbed-nav a', { fontFamily: 'Arial', hover: true });
	Cufon.replace('h1', { fontFamily: 'Arial', hover: true });
   Cufon.replace('.tabs-media a', { fontFamily: 'Arial'});
   Cufon.replace('.overlay-top h1', { fontFamily: 'Arial'});
 
 Cufon.replace('.toggler-faq', { fontFamily: 'Arial'});
	
 
}

$(document).ready(function(){
	initCufon();
});



