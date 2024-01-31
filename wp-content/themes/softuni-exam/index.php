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

        <?php get_template_part( 'partials/content', 'post' ); ?>

        <?php endwhile; ?>

        <div style="text-align:center;">
            <?php
            the_posts_pagination( array(
                'mid_size'  => 1,
                'prev_text' => __( 'Previous', 'softuni' ),
                'next_text' => __( 'Next', 'softuni' ),
            ) );
            ?>
        </div>
        
    <?php else : ?>

        Sorry, there is nothing I can show you.

    <?php endif; ?>
</section>
<!-- End Sample Area -->

<?php get_footer(); ?>