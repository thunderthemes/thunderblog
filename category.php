<?php
/**
 * The author template file
 *
 * lists all posts from an author
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<?= get_header(); ?>
<main>
	<h2 class="text-center">
		<?= _e('Posts in ', 'thunderblog') ?>
		<?= '&laquo;' ?><?= single_cat_title() ?><?= '&raquo;' ?>
	</h2>
	<section class="articles">
		<?= get_template_part('parts/post-list'); ?>
	</section>
</main>
<?= get_footer(); ?>