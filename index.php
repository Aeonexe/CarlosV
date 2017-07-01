<?php
/**
*
* @see header.php $headers
* @see functions.php $headers_static
*
*/

	$headers = array(
		'html_class' 	=> 'page',
		'body_class' 	=> 'home',
		'title'		=> 'Home Pages',
		'description'	=> 'Descripción de la página para meta etiqueta de descripción',
		'author'		=> 'Autor del sitio',
		'itemprop_name'	=> 'Título para schema.org',
		'itemprop_desc' 	=> 'Descripción para schema.org',
		'itemprop_image'	=> 'img/og-facebook.png',
		'creation_date' 	=> 'Miércoles, junio 28th, 2017, 4:09 pm',
		'revised_date'	=> 'Miércoles, junio 28th, 2017, 4:09 pm'
	);

include( 'header.php' ); ?>

	<section id="home-intro" class="wk-section">

		<div class="wk-section-wrap">

			<div class="ui-box-shadow ui-bg-red wk-cols">

				<div id="home-intro-text-container" class="ui-box wk-col-4">

					<div id="cs-home-intro-text">

						<h1 class="ui-title cs-title"><span class="ui-text-gold">Lorem ipsum dolor sit amet,</span> consectetur adispiscing elit.</h1>

						<p>Nam vei erat er torto facilisis convalis en eget nulia.</p>

					</div>


				</div>

				<div id="home-intro-video-container" class="ui-box wk-col-8">

					<div class="ui-box-shadow">

						<?php // reemplaza la imagen por un iframe ?>

						<img src="img/placeholder/01.png" alt="" class="wk-img-responsive">

					</div>


				</div>

			</div>

		</div>

	</section>

	<section id="home-steps" class="wk-section">

		<div class="wk-section-wrap">

			<div id="home-steps-container" class="wk-cols">

				<div id="home-step-1" class="cs-home-step wk-col-4">

					<span> <img src="<?php site_url(); ?>/img/home-step-1.png" alt="Compra Carlos V"> </span>

				</div>

				<div id="home-step-2" class="cs-home-step wk-col-4">

					<span> <img src="<?php site_url(); ?>/img/home-step-2.png" alt="Junta las mitades de los stickers"> </span>


				</div>

				<div id="home-step-3" class="cs-home-step wk-col-4">

					<span> <img src="<?php site_url(); ?>/img/home-step-3.png" alt="Podrás ganar hasta un viaje para echar la reta con Chicharito"> </span>

				</div>

			</div>

		</div>

	</section>

	<section id="home-promo" class="wk-section wk-d">

		<div class="wk-section-wrap">

			<img id="home-promo-img" class="wk-img-responsive" src="<?php site_url(); ?>/img/home-promo.png" alt="Premios">

		</div>

	</section>

	<section id="home-promo-mobil" class="wk-section wk-m">

		<div class="wk-section-wrap">

			<img id="home-promo-img" class="wk-img-responsive" src="<?php site_url(); ?>/img/home-promo.png" alt="Premios">

		</div>

	</section>

	<section id="home-login" class="wk-section">

		<div class="wk-section-wrap">

			<div id="home-forms-container" class="ui-box ui-box-shadow ui-bg-red wk-cols">

				<div id="home-register-form-container" class="ui-box ui-box-shadow ui-bg-red wk-col-4">

					<h1 class="ui-title cs-title ui-text-gold">Registrate</h1>

					<form id="home-register-form" class="cs-form js-form js-home-form">

						<a id="home-register-form-button-facebook" href="#" class="js-button js-button-facebook ui-box-shadow wk-button">Conectar con Facebook</a>

						<a id="home-register-form-button-mail" href="#" class="js-button js-button-email ui-box-shadow wk-button">Conectar con Correo electrónico</a>

					</form>

				</div>

				<div id="home-login-form-container" class="ui-box ui-box-shadow ui-bg-red wk-col-4">

					<h1 class="ui-title cs-title ui-text-gold">Inicia Sesión</h1>

					<form id="home-login-form" class="cs-form js-form js-home-form">

						<label for="home-login-form-email" class="ui-text-gold">Correo electrónico</label>

						<input id="home-login-form-email" type="text" name="" value="" class="js-input js-input-email" placeholder="ejemplo@gmail.com">

						<label for="home-login-form-password" class="ui-text-gold">Contraseña</label>

						<input id="home-login-form-password" type="password" name="" value="" class="js-input js-input-password">

						<a id="home-login-form-button-entrar"  class="ui-title ui-bg-green ui-box-shadow cs-button wk-button" href="#" >Entrar</a>

					</form>

				</div>

				<div id="home-login-promo" class="wk-col-4">

					<img id="home-login-promo-img" src="img/chicharito-carlos-v.png" alt="">

				</div>

			</div>

		</div>

	</section>

<?php include( 'footer.php' ); ?>
