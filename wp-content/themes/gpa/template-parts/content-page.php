<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gpa
 */

?>
<div class="basic-page-wrap">

<header class="entry-header">
	<div class="col-sm-8 offset-sm-1">
		<p class="sectiontitle"><em><?php if($post->post_parent) { $parent_title = get_the_title($post->post_parent); echo $parent_title.''; } ?></em></p>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<section class="row">
	<div class="col-3 nopad bluebg">
		<?php get_sidebar();?>
	</div>

	<div class="col-9 nopad basic-page-content-right">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="content">
				<div class="basic-page-content whitebg">
					<img src="<?php the_field('page_header_image');?>" />
					<div class="basic-page-content-inner">
						<?php the_content();?>
					</div>
				</div>
			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->
	</div>

</section>

</div>
