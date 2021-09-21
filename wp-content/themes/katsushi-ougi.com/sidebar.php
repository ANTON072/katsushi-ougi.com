<aside class="p-sidebar u-text-link">
	<div class="p-sidebar__block">
		<p>日々の業務を通して学んだ記録を書いています。おもにJavaScriptやTypeScriptなどフロントエンド系が中心の内容です。</p>
		<p><a href="https://twitter.com/anton072?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-lang="ja" data-show-count="false">Follow @anton072</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
	</div>

	<!-- <div class="p-sidebar__block">
		<h2 class="u-font-title-en">POPULAR ARTICLES</h2>
		<ul>
			<li><a href="#">2020年に最適なfont-familyの書き方</a></li>
			<li><a href="#">若い世代が知らない2000年代のHTMLコーディングの地獄</a></li>
			<li><a href="#">エンジニアのための、いますぐ使える文章校正テクニック</a></li>
			<li><a href="#">変幻自在なグラフィック表現！CSS, SVG, Canvasでマスクを使いこなせ</a></li>
			<li><a href="#">ユーザー設定にレスポンシブ対応できる新しいCSS</a></li>
		</ul>
	</div> -->

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