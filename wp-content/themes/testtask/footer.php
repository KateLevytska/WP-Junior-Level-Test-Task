<footer class="footer">
	<div class="footer__logo" style="background-image: url(<?php the_field('footer_logo', 'option') ?>)">
	</div>
	<?php if (have_rows('social_links', 'option')) : ?>
		<div class="socialLinks">
			<?php while (have_rows('social_links', 'option')) : the_row(); ?>
				<div class="socialLinks__item">
					<a href="<?php the_sub_field("link", "option") ?>" class="socialLinks__link" target="_blank">
						<img src="<?php the_sub_field("icon", "option") ?>" alt="<?php the_sub_field("brand_name", "option") ?>" class="socialLinks__icon">
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>