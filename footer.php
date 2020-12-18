<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tavomorean_iw
 */

?>

<div cvlass="detalle-item mapa">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
	
	<div id="map" style="width:100%; height:806px"></div>
	
	<script>
		var mapOptions = {
				center: [11.001203750235218, -74.82311189174654],
				zoom: 16
		}
		var map = new L.map('map', mapOptions);
		var layer = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
		map.addLayer(layer);
		var marker = L.marker([11.001203750235218, -74.82311189174654],);
		marker.addTo(map);
	</script>

	<div class="contact-form">
		<div class="rs-container">
			<h2>Contact Us</h2>
			<p>Send us a message</p>
		</div>
		<?php
			if ( isset($_GET['sent']) ){
				if ( $_GET['sent'] == '1'){
					echo "<p> ✔ Formulario enviado correctamente</p><br>";
				}
				else {
					echo "<p> Hubo un error al enviar</p><br>";
				}
			}
		?>

		<form id="contact_form" method="post" action="<?php echo admin_url( 'admin-post.php' ) ?>" >
			<input type="text" placeholder="Name" name="name" required>
			<input type="mail" placeholder="Email" name="email" required>
			<input type="phone" placeholder="Phone" name="phone" required>
			<div class="to-respond-options-wrap">
				<label for="to-respond">How would you like us to respond?</label>
				<div class="to-respond-options">
					<input type="radio" id="opt-email" name="opt-email-phone" value="email" style="height:25px; width:25px; vertical-align: middle;"> <label for="opt-email-phone">Email</label>
				</div>
				<div class="to-respond-options">
					<input type="radio" id="opt-phone" name="opt-email-phone" value="phone" style="height:25px; width:25px; vertical-align: middle;"> <label for="opt-email-phone">Phone</label>
				</div>
			</div>
			<textarea name="message" rows="2" cols="50" placeholder="Message"></textarea>
			<input id="btnsend" type="submit" value="Submit">

		</form>
	</div>
</div>

	<footer id="colophon" class="site-footer">
	
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tavomorean_iw' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'tavomorean_iw' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tavomorean_iw' ), 'tavomorean_iw', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
