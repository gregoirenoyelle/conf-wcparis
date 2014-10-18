<?php
/**
 * IdeaStream's Archive template
 *
 * @package WP Idea Stream
 * @subpackage templates
 *
 * @since 2.0.0
 */
?>

<div id="wp-idea-stream">

	<?php wp_idea_stream_user_feedback(); ?>

	<?php do_action( 'wp_idea_stream_before_archive_main_nav' ); ?>

	<?php
	// filtre sur role pour archives
	if ( wp_idea_stream_user_can( 'read_private_posts' ) ) :
	?>

		<ul id="ideas-main-nav">
			<li><?php wp_idea_stream_ideas_search_form(); ?></li>
			<li class="last"><?php wp_idea_stream_ideas_order_form(); ?></li>
		</ul>

	<?php endif; ?>

	<?php do_action( 'wp_idea_stream_after_archive_main_nav' ); ?>

	<?php wp_idea_stream_template_part( 'idea', 'loop' ); ?>

</div>
