<?php
get_header(); ?>

<main>
    <h2>Latest News</h2>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read more...</a>
            </article>

        <?php endwhile;
    else :
        echo '<p>No news found.</p>';
    endif;
    ?>

</main>

<?php get_footer(); ?>
