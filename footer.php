</main>

<footer class="site__footer">

	<?php get_template_part('template-parts/modale', ''); ?>




	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'footer-menu',
			'container_class' => 'footer-menu-class'
		)
	);
	?>

	<p>TOUS DROITS RESERVES</p>



</footer>



<?php wp_footer(); ?>

</body>

</html>