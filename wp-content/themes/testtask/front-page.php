<?php
get_header(); ?>

<section class="counterSection">
    <div class="counter">
        <h2 class="counter__title"><?php the_field('countersection_title') ?></h2>
        <div class="counter__items">
            <div class="counter__block">
                <p class="counter__item counter__days"></p>
                <span class="counter__text"> <?php the_field('countersection_days') ?></span>
            </div>
            <div class="counter__block">
                <p class="counter__item counter__hours"></p>
                <span class="counter__text"><?php the_field('countersection_hours') ?></span>
            </div>
            <div class="counter__block">
                <p class="counter__item counter__minutes"></p>
                <span class="counter__text"><?php the_field('countersection_minutes') ?></span>
            </div>
            <div class="counter__block">
                <p class="counter__item counter__seconds"></p>
                <span class="counter__text"><?php the_field('countersection_seconds') ?></span>
            </div>
        </div>
    </div>
</section>

<aside class="form">
    <?php
    echo do_shortcode(get_field('form'));
    ?>
</aside>

<section class="sliderSection">

    <?php
    $images = get_field('image_slider');
    if ($images) : ?>

        <div class="sliderImages">
            <h2 class="sliderSection__title"><?php the_field('sliderSection_title') ?></h2>
            <?php
            if ($images) : ?>
                <div id="sliderImages">
                    <?php foreach ($images as $image) : ?>
                        <div style="background-image: url('<?php echo esc_url($image['sizes']['medium']); ?>')" class="sliderImages__item">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php $myposts = get_posts(array(
        'post_type' => 'testimonials'
    ));
    ?>
    <?php if ($myposts) : ?>
        <div class="sliderReviews">
            <h2 class="sliderSection__title sliderSection__title-bottom"><?php the_field('sliderSection_title2') ?></h2>
            <div id="sliderReviews">
                <?php
                foreach ($myposts as $post) {
                    setup_postdata($post);
                ?>
                    <div>
                        <div class="sliderReviews__raiting">
                            <?php
                            $i = 1;
                            $raiting_count = get_field('raiting');
                            while ($i <= $raiting_count) {
                                echo "<img src='" . get_template_directory_uri() . "/img/star.svg' class='sliderReviews__star' alt='raiting'>";
                                $i++;
                            }
                            ?>
                        </div>
                        <div class="sliderReviews__content">
                            <p class="sliderReviews__text"><?php echo get_the_content(); ?></p>
                            <p class="sliderReviews__text">- <?php the_title(); ?></p>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="sliderSection__bottom">
        <p class="sliderSection__text"><?php the_field('sliderSection_description') ?></p>
        <a href="#" class="sliderSection__link"><?php the_field('sliderSection_button') ?></a>
    </div>
</section>

<?php
get_footer(); ?>