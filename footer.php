
<?php wp_footer();?>
</div>



<footer>
	<div class="container">
		<div class="row footer-top_row">
			<div class="col-md-4">
				<img height="25px"  src="<?php echo get_template_directory_uri(); ?>/includes/images/icons/footercontactus.png">
				<span>
					<h4>
						Cotact Us
					</h4>
					<p>
						<a href="mailto:info@villaextechnologies.com">info@villaextechnologies.com</a>
					</p>
				</span>
			</div>
			<div class="col-md-4">
				<img height="25px"  src="<?php echo get_template_directory_uri(); ?>/includes/images/icons/call us.png">
				<span>
					<h4>
						Call Us
					</h4>
					<p>
						<a href="tel:(551) 333 8519">(551) 333 8519</a>
					</p>
				</span>
			</div>
			<div class="col-md-4">
				<img height="25px"  src="<?php echo get_template_directory_uri(); ?>/includes/images/icons/business inquiries.png">
				<span>
					<h4>
						Business Inquiries
					</h4>
					<p>
						<a href="mail:info@villaextechnologies.com">10 AM - 08 PM</a>
					</p>
				</span>
			</div>
		</div>
		<div class="row follow_us_row">
			<span>
				follow us
			</span>
		</div>
		<div class="row icons_container_social">
			<ul>
				<li>
					<a href="#">
						<i class="fab fa-facebook-f"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fab fa-instagram"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fab fa-quora"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row all_right_reserved">
		2018 villaex Technologies | all right reserved
	</div>
</footer>


<script type="text/javascript">
	jQuery(".list_contaienr_maiN_top li").click( function() {
		$('.list_contaienr_maiN_top li').removeAttr('id');
		$('.span_container img').hide();
		$('.span_container .'+ this.className).show();
		$(this).attr("id","SomeID");
	})
</script>


</body>
</html>