<?php
get_header(); ?>

<section class="sectionCounter">
    <h2 class="sectionCounter__title">Next drawing:</h2>
</section>

<aside class="form">
    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]') ?>
</aside>

<section class="sliderSection">
    <div class="sliderImages">
        <h2 class="sliderSection__title"><?php the_field('section2_title') ?></h2>
        <?php if (have_rows('image_slider')) : ?>
            <div id="sliderImages">
                <?php while (have_rows('image_slider')) : the_row(); ?>
                    <div style="background-image: url('<?php the_sub_field("image") ?>')" class="sliderImages__item">
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="sliderReviews">
        <h2 class="sliderSection__title sliderSection__title-bottom"><?php the_field('section2_title2') ?></h2>

        <div id="sliderReviews">
            <?php
            global $post;
            $myposts = get_posts(array(
                'post_type' => 'testimonials'
            ));
            foreach ($myposts as $post) {
                setup_postdata($post);
            ?>
                <div>
                    <div class="sliderReviews__raiting">
                        <?php
                        $i = 1;
                        $raiting_count = get_field('raiting');
                        while ($i <= $raiting_count) {
                            echo "<img src='" . get_template_directory_uri() . "/img/star.svg' class='sliderReviews__star'>";
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
    <div class="sliderSection__bottom">
        <p class="sliderSection__text"><?php the_field('section2_description') ?></p>
        <a href="#" class="sliderSection__link"><?php the_field('section2_button') ?></a>
    </div>
</section>

<?php
get_footer(); ?>