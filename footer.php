<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Automatic_Spork
 */

?>

	<footer id="colophon" class="site-footer section is-dark-background has-brand-border--top">
		<div class="content has-text-centered">
			<div class="contact">
				<p>
					<a href="https://twitter.com/ItsJackStiles" target="_blank"><i class="fab fa-2x fa-twitter-square mx-1"></i></a>	
					<a href="https://www.instagram.com/itsjackstiles/" target="_blank"><i class="fab fa-2x fa-instagram-square mx-1"></i></a>
					<a href="https://www.linkedin.com/in/itsjackstiles/" target="_blank"><i class="fab fa-2x fa-linkedin mx-1"></i></a>
					<a href="mailto:jackrstiles@outlook.com"><i class="fas fa-2x fa-envelope-square mx-1"></i></a>
				</p>
			</div>
			<div class="site-info">
				<p>Built with <a href="https://bulma.io/" target="_blank">Bulma</a> and powered by <a href="https://wordpress.org/" target="_blank">WordPress</a> </p>
			</div>
			<div class="copy">
				<p>&copy; <?php echo date("Y"); ?></p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

	<script src="https://kit.fontawesome.com/f448df1bee.js" crossorigin="anonymous"></script>
	<script src="wp-content/themes/automatic-spork/js/bulma.js"></script>
</body>
</html>
