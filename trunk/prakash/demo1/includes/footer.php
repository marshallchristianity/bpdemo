	<section class="services">
						<div class="widget">
						<?php $aboutus = mysqli_query($con, "select * from about"); 
								$about = mysqli_fetch_array($aboutus); ?>
							<h3><?php echo $about['title']; ?></h3>
							<?php $des =  explode('.', htmlspecialchars_decode($about['description'])); 
							echo $des[0]; echo $des[1]; ?>
						</div>
						<div class="widget contact-widget">
							<h3>Contact Us</h3>
							<ul>
							<?php $contact = mysqli_query($con, "select * from contact"); 
								$cont = mysqli_fetch_array($contact); ?>
								<li><?php echo $cont['address']; ?></li>
								<li><strong>Phone: </strong><?php echo $cont['phone']; ?></li>
								<li><strong>Email:</strong><?php echo $cont['email']; ?></li>
							</ul>
						</div>
						<div class="widget socials-widget">
							<h3>Get Social</h3>
							
							<a href="#" class="facebook-ico">facebook</a>
							<a href="#" class="twitter-ico">twitter</a>
							<a href="#" class="rss-ico">rss</a>
							<a href="#" class="in-ico">in</a>
							<a href="#" class="skype-ico">skype</a>
							<a href="#" class="google-ico">google</a>
						</div>
						<div class="cl">&nbsp;</div>
					</section>
					<!-- end of services -->

				</div>
				<!-- end of main -->
			</div>
			<!-- end of container -->	
			<div class="footer">
				<nav class="footer-nav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">gallery</a></li>
						<li><a href="#">Contact</a></li>
						
					</ul>
				</nav>
				<p class="copy">Copyright &copy; 2012 All Rights Reserved. Design by <a href="http://bigperl.com" target="_blank" >Bigperl Solutions Pvt Ltd</a> </p>
			</div>
		</div>
		<!-- end of shell -->
	</div>
	<!-- end of wrappert -->

</body>
</html>