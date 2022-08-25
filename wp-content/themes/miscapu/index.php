<?php get_header(); ?>
    <!-- Add custom header WP -->
    <img src="<?php header_image(); ?>" height="<?= get_custom_header()->height; ?>" width="<?= get_custom_header()->width; ?>" alt="">
    <!-- Custom Header WP End -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <h1>Blog</h1>
                <div class="container">
                    <div class="blog-items">
			            <?php
			            if( have_posts() ):
				            while( have_posts() ) : the_post();
					            ?>
                                <article>
                                    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

                                    <!-- Add Post Featured Image ( from metabox sidebar admin WP )
                                    ==========
                                    params options thumb/medium/large or array(225,225)
                                    class: wp-post-image
                                    =========
                                    -->
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail( array( 275, 275 ) );?></a>
                                    <!-- Featured Image End -->

                                    <div class="meta-info">
                                        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                        <p>Categories: <?php the_category( ' ' ); ?></p>
                                        <p>Tags: <?php the_tags( '', ', '); ?></p>
                                    </div>
						            <?php the_excerpt(); ?>
                                </article>
				            <?php
				            endwhile;
			            else: ?>
                            <p>Nothing yet to be displayed!</p>
			            <?php endif; ?>
                    </div>
                    <!--
                     ======================
                            SIDEBAR
                     ======================
                     -->
                        <?php get_sidebar(); ?>
                    <!--
                     =======================
                            SIDEBAR
                     =======================
                     -->
                </div>
            </main>
        <!-- Content -->
    </div>
</div>
<?php get_footer(); ?>