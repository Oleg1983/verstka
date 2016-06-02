<?php 
require('layout/header.php');
 ?>

<section class="promo">

	<div class="promo__inner">
		<a class="promo__logo" href="/"><img src="images/logo.png"></a>
		
		<p class="promo__text">A great new free psd theme to showcase your new application. </p>

		<div class="promo__links">
			<a class="promo__link" href="#"><i class="fa fa-apple" aria-hidden="true"></i></a>
			<a class="promo__link" href="#"><i class="fa fa-android" aria-hidden="true"></i></a>
			<a class="promo__link" href="#"><i class="fa fa-windows" aria-hidden="true"></i></a>
		</div>

	</div>
	

</section>

<section class="features">
	<div class="container">

		<div class="row">	

				<div class="feature col-4 text-center">

				<i class="feature__icon fa fa-cog"></i>

				<h4 class="feature__title">Editable Theme</h4>
				<p class="feature__content">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>

			</div>

			<div class="feature col-4 text-center">
				<i class="feature__icon fa fa-star"></i>
				<h4 class="feature__title">Flat Design</h4>
				<p class="feature__content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</div>

			<div class="feature col-4 text-center">
				<i class="feature__icon fa fa-globe"></i>
				<h4 class="feature__title">Reach Your Audience</h4>
				<p class="feature__content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</div>
		</div>
		
		


	</div>
	


</section>


<section class="subscribe">

	<div class="container">

		<div class="row">

			<div class="col-6">

				<h3 class="subscribe__title">Get notified any updates!</h3>
				<p class="subscribe_text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi fugit tempora natus officiis doloremque voluptates architecto minus ut enim, ipsum dolor, error, asperiores ratione quos corporis tempore saepe commodi!
				</p>
				<form action="">
					<fieldset class="subscribe__fieldset">
						<input type="email" placeholder="Enter your email ...">
						<button onclick="return false;">Notify</button>

					</fieldset>

				</form>
			</div>	

			<div class="col-6">

				<div class="video__wrapper">
					<iframe class="video__iframe" src="https://player.vimeo.com/video/168351281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
					
			</div>


		</div>		


	</div>	

</section>

 <?php 
require('layout/footer.php');
  ?>