<?php
/**
 * Main template (blog/archive fallback).
 *
 * @package Chuteside
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="content-area">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="entry-content"><?php the_excerpt(); ?></div>
				</article>
				<?php
			endwhile;

			the_posts_pagination();

		else :
			?>
			<article class="entry">
				<h2 class="entry-title"><?php esc_html_e( 'Nothing here yet', 'chuteside' ); ?></h2>
				<p><?php esc_html_e( 'No content has been published yet.', 'chuteside' ); ?></p>
			</article>
			<?php
		endif;
		?>
	</div>
</div>

<?php
get_footer();
