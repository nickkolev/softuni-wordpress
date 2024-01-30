<?php get_header(); ?>

<!-- Start Sample Area -->
<section class="sample-text-area">

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="container">
                <h1 class="text-heading title_color"><?php the_title(); ?></h1>
                <p class="sample-text">
                    <?php the_content(); ?>
                </p>
            </div>

        <?php endwhile; ?>

    <?php else : ?>

        Sorry, there is nothing I can show you.

    <?php endif; ?>
</section>
<!-- End Sample Area -->

<?php get_footer(); ?>