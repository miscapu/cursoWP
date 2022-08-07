<?php get_header(); ?>
<<<<<<< HEAD
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
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-info">
                                        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                        <p>Categories: <?php the_category( ' ' ); ?></p>
                                        <p>Tags: <?php the_tags( '', ', '); ?></p>
                                    </div>
						            <?php the_content(); ?>
                                </article>
				            <?php
				            endwhile;
			            else: ?>
                            <p>Nothing yet to be displayed!</p>
			            <?php endif; ?>
                    </div>
                </div>
            </main>
=======
        <!-- Content -->
        <div id="content" class="site-content">
            <div class="primary" id="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        Services
                    </section>
                    <section class="home-blog">

                        <div class="container">
                            <div class="blog-items">
                                <!-- Show posts -->
                                <?php
                                if ( have_posts() ):
                                    while ( have_posts() ):
                                        the_post();
                                        ?>

                                        <!-- Template tags to WP -->
                                        <article>
                                            <h2><?php the_title(); ?></h2>
                                            <div class="meta-info">
                                                <!-- Important: the majority templates tags wp that start with get must be echo -->
                                                <p>Posted in <?php echo get_the_date(); ?> for <?php the_author_posts_link(); ?> </p>
                                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                                <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                                            </div>
                                            <!-- The content of our post -->
                                            <?php the_content(); ?>
                                        </article>

                                    <?php
                                    endwhile;
                                else:
                                    ?>
                                    <p>Nothing yet be displayed</p>
                                <?php
                                endif;
                                ?>
                                <!-- End Show Posts -->
                            </div>
                        </div>


                    </section>
                </main>
            </div>
>>>>>>> 6ef75eecdf6c4f49f2fb6a7be990e34221f64692
        </div>
    </div>
<?php get_footer(); ?>