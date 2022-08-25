<?php get_header(); ?>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
                <section class="hero">
                    Hero
                </section>
                <section class="services">
                    <h2>Services</h2>
                    <div class="container">
                        <div class="services-item">
                            <?php
                                if ( is_active_sidebar( 'services-1' ) ){
	                                dynamic_sidebar( 'services-1' );
                                }
                            ?>
                        </div>
                        <div class="services-item">
                            <?php
                                if ( is_active_sidebar( 'services-2' ) ){
	                                dynamic_sidebar( 'services-2' );
                                }
                            ?>
                        </div>
                        <div class="services-item">
                            <?php
                                if ( is_active_sidebar( 'services-3' ) ){
	                                dynamic_sidebar( 'services-3' );
                                }
                            ?>
                        </div>
                    </div>
                </section>
				<section class="home-blog">
                    <h2>Latest News</h2>


                    <div class="container">
	                    <?php
	                    /**
	                     * ========================
                         * Create loop
                         * 1. First create array arguments
                         * 2. Create variable for storing the arguments and continue our query
                         * 3. Now, let's add the object into loop(adding before of this default functions
                         * have_posts and the posts)
                         * 4. And finally, we must add wp_reset_postdata() function into final loop, for
                         * to guarantee than this query dont will affect the general query of wp
                         * ========================
	                     */
	                    $args   =   array(
	                        'post_type'         =>  'post',
                            'post_per_page'     =>  5,
                            'category__in'      =>  array( 5 ),#id's to categories than let's use
                            'category__not_in'  =>  array( 1 ),
                        );

	                    // 2. Create variable instance for store arguments
                        $postlist   =   new WP_Query( $args );

                        // 3. Adding object $postlist into loop before of the default functions have_posts and the post
	                    if( have_posts() ):
		                    while( $postlist->have_posts() ) : $postlist->the_post();
			                    ?>
                                <article class="latest-news">
                                    <!-- Add Post Featured Image ( from metabox sidebar admin WP )
                                    ==========
                                    params options thumb/medium/large or array(225,225)
                                    class: wp-post-image
                                    =========
                                    -->
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'large' );?></a>
                                    <!-- Featured Image End -->
                                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                                    <div class="meta-info">
                                        <p>
                                            by <span><?php the_author_posts_link();?></span>
                                            Categories: <span><?php the_category(); ?></span>
                                            Tags: <?php the_tags( '', ', ' );?>
                                        </p>
                                        <p><span><?php get_the_date();?></span></p>
                                    </div>
				                    <?php the_excerpt(); ?>
                                </article>
		                    <?php
		                    endwhile;
		                    // add wp_reset_data to guarantee than query dont will affect query general of wp
                            wp_reset_postdata();
	                    else: ?>
                            <p>Nothing yet to be displayed!</p>
	                    <?php endif; ?>
                    </div>
                </section>
			</main>
		</div>
	</div>
<?php get_footer(); ?>