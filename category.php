<?php get_header(); ?>

<main class="p-topics">
	<div class="c-title c-title--page">
		<h1><?php single_cat_title() ?></h1>
	</div>
	<div class="l-container">
		<ul class="c-listpost">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<span class="datepost"><?php the_date('Y/m/d') ?></span>
						<?php
						$id = get_the_id();
						$categories = get_the_category($id);

						foreach ($categories as $category) {
							$category_link = get_term_link($category->slug, 'category');
							echo '<a class="c-label" href="' . $category_link . '">' . $category->name . '</a>';
						}

						?>
						<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
					</li>

				<?php endwhile; ?>

			<?php endif; ?>

		</ul>
		<?php
		echo '<div class="c-pnav">';
		the_posts_pagination(array(
			'prev_text' => '',
			'next_text' => '',
		));
echo '</div>';
		wp_reset_postdata();
		?>
	</div>
</main>
<?php get_footer(); ?>