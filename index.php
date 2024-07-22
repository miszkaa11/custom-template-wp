<?php get_header(); ?>


<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="container-m">
        <div class="archive">
            <div class="archive__inner">
                <div class="archive__title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="archive__meta">
                    <?php michallukas_posted_on(); ?>
                </div>
                <div class="archive__content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="archive__inner">
                <div class="archive__thumbnail">
                    <?php michallukas_post_thumbnail(); ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $wp_query->max_num_pages
            ));
            ?>
        </div>
        <?php else : ?>
            <p>No posts found</p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
