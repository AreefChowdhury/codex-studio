<?php
/**
 * The main archive template file for inner content.
 *
 * @package Codex
 */

namespace Codex;

/**
 * Hook for Hero Section
 */
do_action( 'Codex_hero_header' );
?>
<div id="primary" class="content-area">
	<div class="content-container site-container">
		<main id="main" class="site-main" role="main">
			<?php
			/**
			 * Hook for anything before main content
			 */
			do_action( 'Codex_before_main_content' );
			if ( Codex()->show_in_content_title() ) {
				get_template_part( 'template-parts/content/archive_header' );
			}
			if ( have_posts() ) {
				?>
				<div id="archive-container" class="<?php echo esc_attr( implode( ' ', get_archive_container_classes() ) ); ?>"<?php echo ( get_archive_infinite_attributes() ? " data-infinite-scroll='" . esc_attr( get_archive_infinite_attributes() ) . "'" : '' ); ?>>
					<?php
					while ( have_posts() ) {
						the_post();
						/**
						 * Hook in loop entry template.
						 */
						do_action( 'Codex_loop_entry' );
					}
					?>
				</div>
				<?php
				get_template_part( 'template-parts/content/pagination' );
			} else {
				get_template_part( 'template-parts/content/error' );
			}
			/**
			 * Hook for anything after main content
			 */
			do_action( 'Codex_after_main_content' );
			?>
		</main><!-- #main -->
		<?php
		get_sidebar();
		?>
	</div>
</div><!-- #primary -->
