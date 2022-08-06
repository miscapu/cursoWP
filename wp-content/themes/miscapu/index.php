<!-- Call header.php file -->
<?php get_header(); ?>
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
        </div>
        <!-- End Content -->
<!-- Call footer.php file -->
<?php get_footer(); ?>