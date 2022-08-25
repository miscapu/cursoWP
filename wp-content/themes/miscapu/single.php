<?php
/***
 * ===================
 *  Call header
 * ==================
 */
get_header();

/**
 * ===================
 *  Loop of posts
 * ==================
 */
?>

<div id="primary">
	<div id="main">
		<div class="container">
			<!--
			==========================================================
			Note important: Here don't we need check if exists posts
			==========================================================
			-->
			<?php
				while ( have_posts() ):
					the_post();
					?>

					<!--
					=========================
					Article HTML
					=========================
					-->
					<article id="post-<?php the_ID();?>" <?php post_class();?>>
						<header>
							<h1><?php the_title();?></h1>
							<div class="meta-info">
								<p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
								<p>Categories: <?php the_category( ' ' );?></p>
								<p>Tags: <?php the_tags( '', ', ' );?></p>
							</div>
						</header>
						<div class="content">
							<?php the_excerpt(); ?>
						</div>
					</article>
				<?php

                    /**
                     * ========================
                     * Add comments into Post
                     * =======================
                     */
                    if ( comments_open() || get_comments_number() ):
                        comments_template();
                        endif;


				endwhile;
			?>
		</div>
	</div>
</div>

<?php
/**
 * ==================
 *  Get footer
 * ==================
 */
get_footer();