<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package artcraft
 */

?>
<div class="blog__content--img">
	<?= get_the_post_thumbnail( $id, 'medium' )?>
</div>
<h2 class="blog__single-title"><?php the_title(); ?></h2>
<?php the_content(); ?>