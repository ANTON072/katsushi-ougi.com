<aside class="p-sidebar u-text-link">
	<div class="p-sidebar__block">
		<p>OPPOの普通に十分なスペックのReno3Aが実質1980円で手に入るという恐ろしい安さ
しかも3ヶ月はいくら使っても無料でそれ以降も1GB以下の月は無料である
ほぼ家でしか使わないから3ヶ月過ぎても毎月無料なの確実という
それなのに専用アプリを使って通話すれば固定電話にも携帯電話にも通話料無料
なんかもうごめんなさい、本当にいいんすか？って感じだった</p>
	</div>

	<div class="p-sidebar__block">
		<h2 class="u-font-title-en">POPULAR ARTICLES</h2>
		<ul>
			<li><a href="#">2020年に最適なfont-familyの書き方</a></li>
			<li><a href="#">若い世代が知らない2000年代のHTMLコーディングの地獄</a></li>
			<li><a href="#">エンジニアのための、いますぐ使える文章校正テクニック</a></li>
			<li><a href="#">変幻自在なグラフィック表現！CSS, SVG, Canvasでマスクを使いこなせ</a></li>
			<li><a href="#">ユーザー設定にレスポンシブ対応できる新しいCSS</a></li>
		</ul>
	</div>

	<div class="p-sidebar__block">
		<h2 class="u-font-title-en">TOPICS</h2>
		<ul>
		<?php
		$tags = get_tags(
			array(
				'orderby' => 'count',
				'order'   => 'DESC',
			)
		);
		if ( $tags ) :
			foreach ( $tags as $my_tag ) :
				?>
				<li><a class="tag" href="<?php echo esc_url( get_tag_link( $my_tag->term_id ) ); ?>" title="<?php echo esc_attr( $my_tag->name ); ?>"><?php echo esc_html( $my_tag->name ); ?></a> (<?php echo esc_html( $my_tag->count ); ?>)</li>
			<?php endforeach; ?>
		<?php endif; ?>
		</ul>
	</div>
</aside>