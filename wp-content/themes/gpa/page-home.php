<?php
/**
 * Template Name: Home Page
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

			<?php $hero = get_field('hero'); if( $hero ): ?>
			<section id="home-hero" class="nopad">
				<div class="row">
					<div class="col-sm-4 nopad">
						<div class="hero-top-left gpa-grid-item" style="background:url('<?php echo $hero['hero_grid_block_top_left_image']; ?>') no-repeat center;background-size:cover;">
							<div class="gpa-grid-item-overlay red"><div><?php echo $hero['hero_grid_block_top_left_caption']; ?></div></div>
						</div>
						<div class="hero-bottom-left gpa-grid-item" style="background:url('<?php echo $hero['hero_grid_block_bottom_left_image']; ?>')no-repeat center;background-size:cover;">
							<div class="gpa-grid-item-overlay bluebg"><div><?php echo $hero['hero_grid_block_bottom_left_caption']; ?></div></div>
						</div>
					</div>
					<div class="col-sm-4 nopad">
						<div class="hero-top-middle" style="background:url('<?php echo $hero['hero_grid_block_top_middle_image']; ?>')no-repeat center;background-size:cover;"></div>
						<div class="hero-middle-bottom">
							<div class="row">
							<div class="hero-bottom-middle col-sm-6 nopad" style="background:url('<?php echo $hero['hero_grid_block_bottom_middle_image']; ?>')no-repeat center;background-size:cover;"></div>
							<div class="hero-bottom-gpa-logo col-sm-6"><div style="width:100%;"><img src="/wp-content/themes/gpa/dist/images/gpa-crest.svg" /></div></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 nopad">
						<div class="hero-top-right-announcement">
							<div>
								<h3><?php echo $hero['hero_grid_announcement_block_text']; ?></h3>
								<a class="pagelink blue" href="<?php echo $hero['hero_grid_announcement_block_link']; ?>"><?php echo $hero['hero_grid_announcement_block_link_text']; ?></a>
							</div>
						</div>
						<div class="hero-bottom-right-1" style="background:url('<?php echo $hero['hero_grid_block_bottom_right_-_1_image']; ?>')no-repeat center;background-size:cover;"></div>
						<div class="hero-bottom-right-2" style="background:url('<?php echo $hero['hero_grid_block_bottom_right_-_2_image']; ?>')no-repeat center;background-size:cover;"></div>
					</div>
				</div>
			</section>
			<?php endif; ?>


			
			<section id="home-about-slider">
				<div class="container">
					<div class="col-sm-8 offset-sm-1">

						<div class="flexslider">
								<ul class="slides">

									<?php if(get_field('about_gpa_slides')): ?><?php while(has_sub_field('about_gpa_slides')): ?>

									<li>
											<h2><?php the_sub_field('about_gpa_slide_header'); ?></h2>
											<?php the_sub_field('about_gpa_slide_text'); ?>
											<a class="pagelink red" href="<?php the_sub_field('about_gpa_slide_link'); ?>"><?php the_sub_field('about_gpa_slide_link_text'); ?></a>
									</li>

									<?php endwhile; ?><?php endif; ?>

								</ul>

								<?php if(get_field('about_gpa_slides')): ?>

								<div class="flexslider-controls">
								  <ol class="flex-control-nav flex-control-paging">

									<?php while(has_sub_field('about_gpa_slides')): ?>

									<li><a href="#" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="<?php the_sub_field('about_gpa_slide_header'); ?>"></a></li>

									<?php endwhile; ?>

								 </ol>
								</div>

								<?php endif; ?>

						</div>

						

					</div>
				</div>
			</section>
		


			<section id="home-news">
				<div class="container clearfix">
					<div class="col-sm-8 offset-sm-1 clearfix section-head">
						<h2 class="white">Academy News <a class="pagelink red" href="/news">View All News</a></h2>
						<h4>The latest school news, events, achievements, lectures, and more.</h4>
					</div>
				</div>
				<div class="fullwidth">
					<div class="row">
						<div class="owl-carousel news-carousel">
						<?php	$postslist = get_posts( array(
						    'numberposts' => 9,
						    'order'          => 'DSC'
						) );
						 
						if ( $postslist ) {
						    foreach ( $postslist as $post ) :
						        setup_postdata( $post );
						        ?>
						        <div class="news-item item">
						        	<a href="<?php the_permalink(); ?>">
											  <?php the_post_thumbnail('home-news'); ?>
												<h3><?php the_title(); ?> </h3>
												<p><?php the_excerpt(); ?></p>
												<a class="pagelink red" href="<?php the_permalink(); ?>">Read More</a>
											</a>
						        </div>
						    <?php
						    endforeach; 
						    wp_reset_postdata();
						} ?>
						</div>
					</div>

				</div>
			</section>

			<section id="home-advantage">
				<div class="container clearfix">
					<div class="col-sm-10 offset-sm-1 clearfix section-head">
						<h2 class="blue"><?php the_field('the_academy_advantage_header'); ?></h2>
						<h4><?php the_field('the_academy_advantage_subheader'); ?></h4>
					</div>
					<div class="col-sm-10 offset-sm-1">

						<?php if(get_field('the_academy_advantage_cornerstones')): ?><?php while(has_sub_field('the_academy_advantage_cornerstones')): ?>

								<div class="cornerstone">
									<div class="row">
										<div class="col-4 nopad"><img src="<?php the_sub_field('cornerstone_photo'); ?>" /></div>
										<div class="col-8 text flex-center">
											<div>
												<h3><?php the_sub_field('cornerstone_header'); ?></h3>
												<p><?php the_sub_field('cornerstone_text'); ?></p>
											</div>
										</div>
									</div>
								</div>

						<?php endwhile; ?><?php endif; ?>

								
					</div>
				</div>
			</section>

			<section id="home-academy-life">

				<div class="container clearfix">
					<div class="col-sm-10 offset-sm-1 clearfix section-head">
						<h2 class="blue"><?php the_field('academy_life_header'); ?></h2>
						<h4><?php the_field('academy_life_subhead'); ?></h4>
					</div>
				</div>

				<div class="row">
				<div class="col-sm-4 nopad">
					<div class="aclife-top-left gpa-grid-item" style="background:url('<?php the_field('academy_life_grid__top_left_image'); ?>') no-repeat center;background-size:cover;">
						<div class="gpa-grid-item-overlay red"><h3><?php the_field('academy_life_grid_top_left_caption'); ?></h3></div>
					</div>
					<div class="row">
						<div class="col-sm-6 nopad">
							<div class="aclife-bottom-left-1 gpa-grid-item" style="background:url('<?php the_field('academy_life_grid_bottom_left_1_image'); ?>')no-repeat center;background-size:cover;">
								<div class="gpa-grid-item-overlay red"><h3><?php the_field('academy_life_grid_bottom_left_1_caption'); ?></h3></div>
							</div>
						</div>
						<div class="col-sm-6 nopad">
							<div class="aclife-bottom-left-2 gpa-grid-item" style="background:url('<?php the_field('academy_life_grid_bottom_left_1_image'); ?>')no-repeat center;background-size:cover;">
								<div class="gpa-grid-item-overlay red"><h3><?php the_field('academy_life_grid_bottom_left_1_caption'); ?></h3></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 nopad">
					<div class="aclife-top-middle gpa-grid-item" style="background:url('<?php the_field('academy_life_grid_bottom_left_1_image'); ?>')no-repeat center;background-size:cover;">
						<div class="gpa-grid-item-overlay red"><h3><?php the_field('#'); ?></h3></div>
					</div>
					<div class="aclife-bottom-middle gpa-grid-item" style="background:url('<?php the_field('academy_life_grid_bottom_left_1_image'); ?>')no-repeat center;background-size:cover;">
						<div class="gpa-grid-item-overlay red"><h3><?php the_field('#'); ?></h3></div>
					</div>
				</div>
				<div class="col-sm-2 nopad">
					<div class="aclife-tall-middle gpa-grid-item" style="background:url('<?php the_field('academy_life_grid_bottom_left_1_image'); ?>')no-repeat center;background-size:cover;">
						<div class="gpa-grid-item-overlay red"><h3><?php the_field('#'); ?></h3></div>
					</div>
				</div>
				<div class="col-sm-3 nopad">
					<div class="aclife-top-right gpa-grid-item" style="background:url('<?php the_field('academy_life_grid_bottom_left_1_image'); ?>')no-repeat center;background-size:cover;">
						<div class="gpa-grid-item-overlay red"><h3><?php the_field('#'); ?></h3></div>
					</div>
					<div class="aclife-bottom-right gpa-grid-item" style="background:url('<?php the_field('academy_life_grid_bottom_left_1_image'); ?>')no-repeat center;background-size:cover;">
						<div class="gpa-grid-item-overlay red"><h3><?php the_field('#'); ?></h3></div>
					</div>
				</div>
			</div>
				
			</section>







		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
