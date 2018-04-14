<?php
/**
 * The main template file.
 *
 * @package ning_master_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<?php			
$args = array(
   'order' => 'ASC',
   'posts_per_page' => 30,
   'post_type' => 'post',
);
$projects = new WP_Query( $args ); ?>

<?php $projects = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $projects->have_posts() ) : ?>

			
			<?php /* Start the Loop */ ?>
			<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-containor" data-aos="fade-up">
		<?php if ( has_post_thumbnail() ) : ?>
		<div class="thumbnail-wrapper">
			<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php endif; 
		
		$link = CFS()->get( 'site_link' );
		?>


		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( $link['url']  ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php ning_master_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>


	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</div>
	
</article><!-- #post-## -->

<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
