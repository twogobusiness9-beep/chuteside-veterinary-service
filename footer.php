<?php
/**
 * Footer template.
 *
 * @package Chuteside
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer class="site-footer" id="contact">
	<div class="container footer-grid">
		<div class="footer-col">
			<img class="footer-logo" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.svg' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<p class="footer-name"><?php bloginfo( 'name' ); ?></p>
			<p><?php esc_html_e( 'Large-animal veterinary care for cattle, horses, pigs and goats — on the farm and in the clinic.', 'chuteside' ); ?></p>
		</div>

		<div class="footer-col">
			<h4><?php esc_html_e( 'Visit Us', 'chuteside' ); ?></h4>
			<p>
				2520 Bench Road<br>
				Three Forks, MT 59752
			</p>
			<p class="footer-muted"><?php esc_html_e( 'Mon–Fri · 8:00 AM – 5:00 PM', 'chuteside' ); ?></p>
		</div>

		<div class="footer-col">
			<h4><?php esc_html_e( 'Contact', 'chuteside' ); ?></h4>
			<p><a href="tel:+14062853923">(406) 285-3923</a></p>
			<p><a href="mailto:info@chutesidevet.com">info@chutesidevet.com</a></p>
			<p class="footer-muted"><?php esc_html_e( '24-hour emergency service', 'chuteside' ); ?></p>
		</div>

		<div class="footer-col">
			<h4><?php esc_html_e( 'Services', 'chuteside' ); ?></h4>
			<ul class="footer-links">
				<li><a href="#services"><?php esc_html_e( 'Cattle', 'chuteside' ); ?></a></li>
				<li><a href="#services"><?php esc_html_e( 'Horses', 'chuteside' ); ?></a></li>
				<li><a href="#services"><?php esc_html_e( 'Pigs &amp; Goats', 'chuteside' ); ?></a></li>
				<li><a href="#appointment"><?php esc_html_e( 'Request a Visit', 'chuteside' ); ?></a></li>
			</ul>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Serving Gallatin, Broadwater, Jefferson &amp; Madison counties.', 'chuteside' ); ?></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
