<?php get_header() ?>

<main class="p-single">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
		<div class="l-sidebar">
			<div class="c-widget">
				<h3 class="c-widget__title">Search</h3>
				<div class="c-search">
					<form action="searchpage.html" method="get">
						<input type="text" name="keyworks" id="search" value="" />
						<input type="submit" name="search" value="Search" />
					</form>
				</div>
			</div>
			<div class="c-widget">
				<h3 class="c-widget__title">Category</h3>
				<ul class="c-list">
					<li><a href="cat.html">お知らせ</a></li>
					<li><a href="cat.html">デイリーニュース</a></li>
					<li><a href="cat.html">事務所ニュース</a></li>
					<li><a href="cat.html">特集記事</a></li>
				</ul>
			</div>
			<div class="c-widget">
				<h3 class="c-widget__title">Archive</h3>
				<ul class="c-list">
					<li><a href="#">2018年</a></li>
					<li><a href="#">2017年</a></li>
					<li><a href="#">2016年</a></li>
					<li><a href="#">2015年</a></li>
				</ul>
			</div>
		</div>

		<div class="l-main">
			<h2 class="p-single__title"><?php the_title() ?></h2>
			<div class="p-single__info">
				<span>2018/08/24</span>
				<p>
					<?php echo get_the_category_list( ',' ) ?>
					<!-- <a href="cat.html">デイリーニュース</a>
					<a href="cat.html">デイリーニュース</a> -->
				</p>
			</div>

			<div class="p-single__content">
				<img src="img/dummyimg.png" alt="">
			
				<h3>新しい法定された権利の創設</h3>
				<p>民法が改正され、配偶者終身居住権が創設されました。被相続人の配偶者が自宅に住み続けることができる権利で、高齢化が進む中、残された配偶者の住居や生活費を確保し易くする、というのが狙いです。</p>
				<p>子が自宅の所有権を相続し、被相続人の配偶者が終身居住権を相続する、というのが最も典型的な予想ケースとされています。</p>
				<p>所有権が第三者に渡っても、そのまま自宅に住み続けることができる、という排他的権利です。</p>

				<h3>評価額と権利の性質</h3>
				<p>民法が改正され、配偶者終身居住権が創設されました。被相続人の配偶者が自宅に住み続けることができる権利で、高齢化が進む中、残された配偶者の住居や生活費を確保し易くする、というのが狙いです。</p>
				<p>子が自宅の所有権を相続し、被相続人の配偶者が終身居住権を相続する、というのが最も典型的な予想ケースとされています。</p>
				<p>所有権が第三者に渡っても、そのまま自宅に住み続けることができる、という排他的権利です。</p>
				<p>民法が改正され、配偶者終身居住権が創設されました。被相続人の配偶者が自宅に住み続けることができる権利で、高齢化が進む中、残された配偶者の住居や生活費を確保し易くする、というのが狙いです。</p>
				<p>子が自宅の所有権を相続し、被相続人の配偶者が終身居住権を相続する、というのが最も典型的な予想ケースとされています。</p>
				<p>所有権が第三者に渡っても、そのまま自宅に住み続けることができる、という排他的権利です。</p>

				<h3>所得税への影響</h3>
				<p>民法が改正され、配偶者終身居住権が創設されました。被相続人の配偶者が自宅に住み続けることができる権利で、高齢化が進む中、残された配偶者の住居や生活費を確保し易くする、というのが狙いです。</p>
				<p>子が自宅の所有権を相続し、被相続人の配偶者が終身居住権を相続する、というのが最も典型的な予想ケースとされています。</p>
				<p>所有権が第三者に渡っても、そのまま自宅に住み続けることができる、という排他的権利です。</p>
			</div>
<?php get_template_part('template-parts/single/navigation') ?>
			<!-- <ul class="groupbtn">
				<li class="prev_link"><a href="">Prev</a></li>
				<li class="next_link"><a href="">Next</a></li>
			</ul> -->

		</div>
	</div>
</main>

<?php get_footer() ?>