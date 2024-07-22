<?php get_header(); ?>

<main>
    <h1><?php single_cat_title(); ?></h1>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-meta">
                    <span>Published on: <?php the_date(); ?></span>
                </div>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
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
</main>

<?php get_footer(); ?>
