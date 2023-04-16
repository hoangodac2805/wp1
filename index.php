<?php get_header() ?>
<div class="c-mainvisual">
	<div class="l-container">
		<div class="c-mainvisual__inner js-slider">
			<?php if (have_rows('main_visual')) : ?>
				<?php while (have_rows('main_visual')) : the_row();  ?>
					<?php $image = get_sub_field('image') ?>
					<?php $url = get_sub_field('url') ?>
					<?php if ($image) { ?>
						<a href="<?php echo $url ? esc_url($url) :  "#" ?>"><img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>"></a>
					<?php } else { ?>

					<?php 	} ?>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</div>

<main>
	<div class="l-container">
		<div class="c-grouplink">
			<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/img_01_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/img_02_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/img_03_no.png" alt="" class="js-imglink"></a>
		</div>

		<div class="p-topics">
			<h2 class="c-title">Topics</h2>
			<ul class="c-listpost">
				<?php
				$args =  array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 5 
				)
				?>
				<?php
				$allposts = new WP_Query($args);
				?>
				<?php while ($allposts->have_posts()) : $allposts->the_post() ?>
					<li>
						<span class="datepost"><?php esc_html_e(the_date('Y/m/d')) ?></span>
						<?php $cates = get_the_category();
						foreach ($cates as $cate) {
							$cate_link = get_term_link($cate->slug, 'category');
							echo '<a href="'.$cate_link.'" class="c-label">'.$cate->name.'</a>';
						}
						?>
						<a href="<?php echo esc_url(the_permalink()) ?>"><?php esc_html_e(the_title()) ?></a>
					</li>
				<?php endwhile ?>
				<?php wp_reset_postdata() ?>
				
			</ul>

			<div class="l-btn">
				<a href="<?php echo get_page_link(66) ?>" class="c-btn c-btn--small">一覧を見る</a>
			</div>
		</div>

		<div class="c-grouplink">
			<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/btn_03_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/btn_04_no.png" alt="" class="js-imglink"></a>
		</div>


		<div class="c-access">
			<div class="c-access__info">
				<h3 class="c-title c-title--sub">本店</h3>
				<p class="address">〒210-0005　川崎市川崎区東田町8 パレール三井ビル8階</p>
				<p class="time">JR川崎駅東口より徒歩7分　京急川崎駅より徒歩5分</p>
				<br />
				<p>
					<span class="tel">tel : 044-233-2811</span>
					<span class="fax">fax : 044-233-0818</span>
					<br />
					<span class="email">mail : info@wms.or.jp</span>
				</p>
			</div>
			<div class="c-access__img">
				<img src="<?php echo get_template_directory_uri() ?>/img/map_01.png" alt="">
			</div>
		</div>

		<div class="c-access">
			<div class="c-access__info">
				<h3 class="c-title c-title--sub">相模原支店</h3>
				<p class="address">〒252-0231　相模原市中央区相模原3-8-25 第3JSビル7階</p>
				<p class="time">JR横浜線相模原駅より徒歩2分</p>
				<br />
				<p>
					<span class="tel">tel : 042-704-9581</span>
					<span class="fax">fax : 042-704-9582</span>
					<br />
					<span class="email"></span>
				</p>
			</div>
			<div class="c-access__img">
				<img src="<?php echo get_template_directory_uri() ?>/img/map_02.png" alt="">
			</div>
		</div>

	</div>
</main>

<?php get_footer() ?>