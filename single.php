<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container-m">
        <div class="post">
            <div class="post__title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="post__meta">
                <?php michallukas_posted_on(); ?>
            </div>
            <div class="post__content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
