<div class="col-md-4 col-sm-6">
    <div class="single-food">
        <div class="food-img">
            <a href="<?php echo get_the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </div>
        <div class="food-content">
            <div class="d-flex justify-content-between">
                <h5><?php the_title(); ?></h5>
            </div>
            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
        </div>
    </div>
</div>