<?php if (have_posts()) {
    the_post(); ?>

    <?php if (is_single()): ?>
	<div class="featured-area fullcover">
	<?php themify_post_media(); ?>
	</div>
    <?php endif; ?>
<?php } ?>

<?php rewind_posts(); 
