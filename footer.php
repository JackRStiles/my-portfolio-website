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
		<div class="container">
			<div class="columns content">
				<div class="column">
					<p>
						<b>Want To Chat?</b><br>
						Try using one of these methods to reach me. I am not availble for freelance work at this time, but I am open to full-time job offers.
					</p>
				</div>
				<div class="column contact">
					<p>
						<a href="https://twitter.com/ItsJackStiles" target="_blank"><i class="fab fa-twitter-square mx-1"></i>@ItsJackStiles</a><br>
						<a href="https://www.instagram.com/itsjackstiles/" target="_blank"><i class="fab fa-instagram-square mx-1"></i>@ItsJackStiles</a><br>
						<a href="https://www.linkedin.com/in/itsjackstiles/" target="_blank"><i class="fab fa-linkedin mx-1"></i>@ItsJackStiles</a><br>
						<a href="mailto:jackrstiles@outlook.com"><i class="fas fa-envelope-square mx-1"></i>jackrstiles@outlook.com</a>
					</p>
				</div>
				<div class="column issue">
					<p>
						<b>Found A Bug?</b><br>
						Head over to the repo for this project on GitHub and <a href="https://github.com/JackRStiles/portfolio-website/issues/new" target="_blank">log an issue</a>.
					</p>
				</div>
				<div class="column site-info">
					<p>&copy; <?php echo date("Y"); ?> Jack Stiles</p>
					<p>This site was made with <a href="https://bulma.io/" target="_blank">Bulma</a> and is powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>.</p>
				</div>
			</div>
		</div>
	</footer>
</div>

<button id="backToTop" class="button is-brand-background" onclick="topFunction()">
	<i class="fa-solid fa-arrow-up"></i>
</button>

<?php wp_footer(); ?>

	<script src="https://kit.fontawesome.com/f448df1bee.js" crossorigin="anonymous"></script>
	<script src="wp-content/themes/automatic-spork/js/bulma.js"></script>
</body>
</html>
