<?php
		// You can upload a custom header and it'll output in a smaller logo size.
		$header_image = get_header_image();

		if ( ! empty( $header_image ) ) { ?>
			<div id="header-image" class="custom-header">
				<div class="header-wrapper">
					<div class="site-branding">
							<?php arepasports_the_custom_logo(); ?>
							<div class="site-branding_text">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div>
					</div><!-- .site-branding -->
				</div><!-- .header-wrapper -->

			</div><!-- #header-image .custom-header -->
		<?php } else { ?>
			<div class="site-branding">
					<?php arepasports_the_custom_logo(); ?>
					<div class="site-branding_text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div><!-- .site-branding -->
		<?php } ?>