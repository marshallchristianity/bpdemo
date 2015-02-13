<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<title>FancyBox 1.3.4 | Demonstration</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

				$("#various2").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>
</head>
<body>
<div id="content">
	<h1>Click On Image <span></span></h1>

	

	<hr />

	<p>
		Different Image animations<br />

		<a id="example1" href="./example/1_b.jpg"><img alt="example1" src="./example/1_s.jpg" /></a>

		<a id="example2" href="./example/2_b.jpg"><img alt="example2" src="./example/2_s.jpg" /></a>

		<a id="example3" href="./example/3_b.jpg"><img alt="example3" src="./example/3_s.jpg" /></a>
		
		<a id="example4" href="./example/4_b.jpg"><img class="last" alt="example4" src="./example/4_s.jpg" /></a>
	</p>

	<p>
		Different title positions<br />

		<a id="example5" href="./example/5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img alt="example4" src="./example/5_s.jpg" /></a>
		
		<a id="example6" href="./example/6_b.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Vivamus fringilla congue laoreet."><img alt="example5" src="./example/6_s.jpg" /></a>

		<a id="example7" href="./example/7_b.jpg" title="Cras neque mi, semper at interdum id, dapibus in leo. Suspendisse nunc leo, eleifend sit amet iaculis et, cursus sed turpis."><img alt="example6" src="./example/7_s.jpg" /></a>

		<a id="example8" href="./example/8_b.jpg" title="Sed vel sapien vel sem tempus placerat eu ut tortor. Nulla facilisi. Sed adipiscing, turpis ut cursus molestie, sem eros viverra mauris, quis sollicitudin sapien enim nec est. ras pulvinar placerat diam eu consectetur."><img class="last" alt="example7" src="./example/8_s.jpg" /></a>
	</p>

	<p>
		Image gallery (ps, try using mouse scroll wheel)<br />

		<a rel="example_group" href="./example/9_b.jpg" title="Lorem ipsum dolor sit amet"><img alt="" src="./example/9_s.jpg" /></a>

		<a rel="example_group" href="./example/10_b.jpg" title=""><img alt="" src="./example/10_s.jpg" /></a>

		<a rel="example_group" href="./example/11_b.jpg" title=""><img alt="" src="./example/11_s.jpg" /></a>
		
		<a rel="example_group" href="./example/12_b.jpg" title=""><img class="last" alt="" src="./example/12_s.jpg" /></a>
	</p>

	<p>
		<b>Click on Text</b>
	</p>

	<ul>
		1. <a id="various1" href="#inline1" title="Description">Description</a>
        2. <a id="various2" href="#inline2" title="Address">Address</a>
	</ul>

	<div style="display: none;">
		<div id="inline1" style="width:400px;height:100px;overflow:auto;">
		Etiam quis mi eu elit tempor facilisis id et neque Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		</div>
	</div>
    
		<div style="display: none;">
		<div id="inline2" style="width:400px;height:100px;overflow:auto;">
			
			Bigperl solution pvt.Ltd
			satellite town kengeri
			Bangalore
           <input type="text" name="name" />
		   <input type="submit"/>
			
		</div>
	</div>
	
</div>
</body>
</html>