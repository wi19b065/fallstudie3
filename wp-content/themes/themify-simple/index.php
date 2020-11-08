<?php
/**
 * Template for common archive pages, author and search results
 * @package themify
 * @since 1.0.0
 */

get_header();
get_template_part('includes/category-description');
?>
<!-- layout -->
<div id="layout" class="pagewidth clearfix">
    <!-- content -->
    <?php themify_content_before(); //hook  ?>
    <main id="content" class="list-post">
	<?php themify_page_output(array('hide_title' => true, 'hide_desc' => true)); ?>
    </main>
    <?php themify_content_after(); //hook  ?>
    <!-- /#content -->
    <?php themify_get_sidebar(); ?>
</div>

<?php get_footer(); ?>
