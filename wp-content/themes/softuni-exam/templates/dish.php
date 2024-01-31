<?php
/**
 * Template Name: Dishes Template
 */
?>

<?php
$dish_query_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 6,
    'paged'          => get_query_var( 'paged' )
);

$dish_query = new WP_Query( $dish_query_args );
?>

<?php get_header(); ?>

<?php if ( $dish_query->have_posts() ) : ?>
<!-- Welcome Area Starts -->
<section class="welcome-area section-padding2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="welcome-img">
                    <img src="https://localhost/suexam/wp-content/themes/softuni-exam/assets/images/welcome-bg.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="welcome-text mt-5 mt-md-0">
                    <h3><span class="style-change">welcome</span> <br>to Dish page</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- Food Area starts -->
<section class="food-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-top">
                    <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                    <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php while( $dish_query->have_posts() ) : $dish_query->the_post(); ?>

            <?php get_template_part( 'partials/content', 'dish' ); ?>

            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- Food Area End -->

<div style="text-align:center;">
<?php
$GLOBALS['wp_query'] = $dish_query;
the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Previous', 'softuni' ),
    'next_text' => __( 'Next', 'softuni' ),
) );
?>
</div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>