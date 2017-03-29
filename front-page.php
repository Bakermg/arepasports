<?php
/**
 * The static front page template
 *
 * @package Arepa_Sports
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



		</main>
	</div>
<?php get_footer(); ?>

<?php endif; ?>
