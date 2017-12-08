<?php
/**
 * Template Name: Landing Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gpa
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			
			<section class="landing-hero" style="background:url('<?php the_field('landing_page_hero_image'); ?>') no-repeat center;background-size:cover;">
				<div class="container">
					<div class="row">
						<div class="landing-hero-info col-8">
							<h1><?php the_title(); ?></h1>
							<p><?php the_field('landing_page_hero_description'); ?></p>
						</div>
					</div>
				</div>
			</section>

			<section class="landing-tiles">

				<div class="container">
					<div class="row">
						<?php if(get_field('landing_page_primary_items')): ?><?php while(has_sub_field('landing_page_primary_items')): ?>

								<div class="col-md-4 landing-tile-outter">
									<div class="landing-tile">
									<a href="<?php the_sub_field('landing_page_tile_link'); ?>">
										<img src="<?php the_sub_field('landing_page_tile_photo'); ?>" />
										<div class="landing-tile-info">
											<h2><?php the_sub_field('landing_page_tile_title'); ?></h2>
											<p><?php the_sub_field('landing_page_tile_description'); ?></p>
											<a class="pagelink red" href="<?php the_sub_field('landing_page_tile_link'); ?>">Learn More</a>
										</div>
									</a>
									</div>
								</div>

							<?php endwhile; ?><?php endif; ?>
					</div>

					<div class="row">
						<?php if(get_field('landing_page_secondary_items')): ?><?php while(has_sub_field('landing_page_secondary_items')): ?>

								<div class="col-md-3 landing-tile-outter">
									<div class="landing-tile">
									<img src="<?php the_sub_field('landing_page_secondary_tile_photo'); ?>" />
									<div class="landing-tile-info">
										<h2><?php the_sub_field('landing_page_secondary_tile_title'); ?></h2>
										<p><?php the_sub_field('landing_page_secondary_tile_description'); ?></p>
										<a class="pagelink red" href="<?php the_sub_field('landing_page_secondary_tile_link'); ?>">Learn More</a>
									</div>
									</div>
								</div>

							<?php endwhile; ?><?php endif; ?>
					</div>
				</div>

			</section>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
