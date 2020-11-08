<?php
/**
 * Template for generic post display.
 * @package themify
 * @since 1.0.0
 */
global $themify; ?>

<?php themify_post_before(); // hook ?>
<article id="post-<?php the_id(); ?>" <?php post_class( 'post clearfix' ); ?>>
	<?php themify_post_start(); // hook ?>

	<?php if('below' !== $themify->media_position && !is_single()) themify_post_media(); ?>

	<div class="post-content">
		<?php if($themify->hide_meta != 'yes'): ?>
			<div class="post-meta entry-meta">
                <?php if($themify->hide_meta_author != 'yes' || $themify->hide_date != 'yes'): ?>
                    <div class="post-author-wrapper">
                        <?php if($themify->hide_meta_author != 'yes'): ?>
	                        <span class="author-avatar">
	                            <?php echo get_avatar( get_the_author_meta( 'ID' ), '65',false,  get_the_author()); ?>
	                        </span>
						<?php endif; //post author ?>
						<div class="post-author-inner-wrapper">
							<?php if($themify->hide_meta_author != 'yes'): ?>
								<span class="post-author"><?php echo themify_get_author_link(); ?></span>
							<?php endif; //post author ?>
	                        <?php if($themify->hide_date != 'yes'): ?>
	                            <time datetime="<?php the_time('o-m-d') ?>" class="post-date entry-date updated"><?php the_time( apply_filters( 'themify_loop_date', get_option( 'date_format' ) ) ) ?></time>
	                        <?php endif; //post date ?>
						</div>
                    </div>
                <?php endif; ?>
				<?php if($themify->hide_meta_category != 'yes' || $themify->hide_meta_tag != 'yes'): ?>
				<div class="post-cattag-wrapper">
				    <?php themify_meta_taxonomies(); ?>
					<?php if($themify->hide_meta_tag != 'yes'): ?>
					    <?php the_terms( get_the_ID(), 'post_tag', ' <span class="post-tag">', ', ', '</span>' ); ?>
					<?php endif; ?>
					</div>
				<?php endif;?>
              <?php themify_comments_popup_link();?>
			</div>
		<?php endif; //post meta ?>

		<?php themify_post_title( array( 'tag' => 'h2' ) ); ?>

		<?php if('below' === $themify->media_position && !is_single()) themify_post_media(); ?>
		<?php themify_post_content();?>

	</div>
	<!-- /.post-content -->
	<?php themify_post_end(); // hook ?>

</article>
<!-- /.post -->
<?php themify_post_after(); // hook ?>
