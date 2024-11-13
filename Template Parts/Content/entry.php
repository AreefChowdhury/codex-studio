<?php
/**
 * Template part for displaying a post
 *
 * @package Codex
 */

namespace Codex;

?>

<article <?php post_class( 'entry content-bg loop-entry' ); ?>>
	<?php
		/**
		 * Hook for entry thumbnail.
		 *
		 * @hooked Codex\loop_entry_thumbnail
		 */
		do_action( 'Codex_loop_entry_thumbnail' );
	?>
	<div class="entry-content-wrap">
		<?php
		/**
		 * Hook for entry content.
		 *
		 * @hooked Codex\loop_entry_header - 10
		 * @hooked Codex\loop_entry_summary - 20
		 * @hooked Codex\loop_entry_footer - 30
		 */
		do_action( 'Codex_loop_entry_content' );
		?>
	</div>
</article>
