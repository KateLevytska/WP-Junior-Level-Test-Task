<?php
get_header(); ?>

<div class="form">
    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]') ?>
</div>
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
        <h2 class="sliderSection__title"><?php the_field('section2_title2') ?></h2>
        <?php if (have_rows('reviews_slider')) : ?>
            <div id="sliderReviews" >
                <?php while (have_rows('reviews_slider')) : the_row(); ?>
                    <div>
                        <div class="sliderReviews__raiting">
                        <?php
                        $i = 1;
                        $raiting_count = get_sub_field('raiting');
                        while ($i <= $raiting_count ) {
                            echo "<img src='" . get_template_directory_uri() . "/img/star.svg'>";
                            $i++;
                        }
                        ?>
                        </div>
                        
                        <p class="sliderReviews__text">"<?php the_sub_field('review'); ?>"</p>
                        <p class="sliderReviews__text">– <?php the_sub_field('author'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="sliderSection__bottom">
    <p><?php the_field('section2_description') ?></p>
    <a href="#" class="sliderSection__link"><?php the_field('section2_button') ?></a>
    </div>
</section>
<?php
get_footer(); ?>
