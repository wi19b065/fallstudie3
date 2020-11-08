<?php
/**
 * Template for single post view
 * @package themify
 * @since 1.0.0
 */
get_header();
get_template_part('includes/featured-area');
?>
<!-- layout -->
<div id="layout" class="pagewidth clearfix">
    <!-- content -->
    <?php themify_content_before(); //hook   ?>
    <?php
    if (have_posts()) {
	the_post();
	?>
        <main id="content" class="list-post">
	    <?php
	    themify_content_start(); // hook 

	    get_template_part('includes/loop', 'single');

	    wp_link_pages(array('before' => '<p class="post-pagination"><strong>' . __('Pages:', 'themify') . ' </strong>', 'after' => '</p>', 'next_or_number' => 'number',));

	    get_template_part('includes/author-box', 'single');

	    get_template_part('includes/post-nav');

	    themify_comments_template();

	    themify_content_end(); // hook 	
	    ?>
        </main>
    <?php } ?>
    <?php themify_content_after(); //hook   ?>
    <!-- /#content -->
    <?php themify_get_sidebar(); ?>
</div>
<?php get_footer();
