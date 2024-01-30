<?php get_header(); ?>

<section class="sample-text-area">
    <div class="col-sm-12">
        <ol>
            <li><a href="<?php echo get_home_url( '/' ); ?>">Home</a></li>
            <li class="active"><?php the_archive_title(); ?></li>
        </ol>
    </div>
</section>

<!-- Start Sample Area -->
<section class="sample-text-area">

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="container">
                <h2 class="text-heading title_color">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="sample-text">
                    <?php the_excerpt(); ?>
                </p>
            </div>

        <?php endwhile; ?>

    <?php else : ?>

        Sorry, there is nothing I can show you.

    <?php endif; ?>
</section>
<!-- End Sample Area -->

<?php get_footer(); ?>