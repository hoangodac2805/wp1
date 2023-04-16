<?php get_header() ?>
<main class="p-topics">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
		<ul class="c-listpost">
			<?php
			$current_page = max(1, get_query_var('paged'));
			$args =  array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 10,
				'paged' => $current_page,
			)
			?>
			<?php
			$allposts = new WP_Query($args);
			?>
			<?php global $wp_query;
			$wp_query->in_the_loop = true; ?>
			<?php while ($allposts->have_posts()) : $allposts->the_post() ?>
				<li>
					<span class="datepost"><?php esc_html_e(the_date('Y/m/d')) ?></span>
					<?php $cates = get_the_category();
					foreach ($cates as $cate) {
						$cate_link = get_term_link($cate->slug, 'category');
						echo '<a href="' . $cate_link . '" class="c-label">' . $cate->name . '</a>';
					}
					?>

					<a href="<?php echo esc_url(the_permalink()) ?>"><?php esc_html_e(the_title()) ?></a>
				</li>
			<?php endwhile ?>
		</ul>
		<?php
		$big = 999999999;
		$paginate_links = paginate_links(array(
			'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format'    => '?paged=%#%',
			'current'   => max(1, get_query_var('paged')),
			'total'     => $allposts->max_num_pages,
			'prev_next' => True, 
			'prev_text' => '',
			'next_text' => '',
		));
		if ($paginate_links) {
			echo '<div class="c-pnav">' . $paginate_links . '</div>';
		}
		wp_reset_postdata();
		?>


	</div>
</main>

<?php get_footer() ?>