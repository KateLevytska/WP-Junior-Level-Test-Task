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
    <div class="sliderImages">
        <h2 class="sliderSection__title"><?php the_field('sliderSection_title') ?></h2>
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
        <h2 class="sliderSection__title sliderSection__title-bottom"><?php the_field('sliderSection_title2') ?></h2>

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
    <div class="sliderSection__bottom">
        <p class="sliderSection__text"><?php the_field('sliderSection_description') ?></p>
        <a href="#" class="sliderSection__link"><?php the_field('sliderSection_button') ?></a>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const todayPHP = "<?php the_field('countersection_date') ?>";
        let deadline = new Date(todayPHP);

        let counterId = null;

        function declensionNum(num, words) {
            return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
        }

        function countdowncounter() {
            const diff = deadline - new Date();
            if (diff <= 0) {
                clearInterval(counterId);
            }
            const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
            const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
            const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
            const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
            $days.textContent = days < 10 ? '0' + days : days;
            $hours.textContent = hours < 10 ? '0' + hours : hours;
            $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
            $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;

            if (parseInt((days + hours + minutes + seconds)) === 0) {
                console.log(1)
                document.querySelector('.counter').innerHTML = "Expired"
            }
        }
        const $days = document.querySelector('.counter__days');
        const $hours = document.querySelector('.counter__hours');
        const $minutes = document.querySelector('.counter__minutes');
        const $seconds = document.querySelector('.counter__seconds');
        countdowncounter();
        counterId = setInterval(countdowncounter, 1000);
    });
</script>
<?php
get_footer(); ?>