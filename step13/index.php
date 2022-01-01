
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php require "include/site-name.php"; ?>｜トップページ</title>
<meta name="keywords" content="サンプル,練習用,トップページ" />
<meta name="description" content="こちらは練習用に作成されたサンプルサイトです。" />
<link rel="canonical" href="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css" type="text/css" media="screen,tv" />
<?php wp_head(); ?>
</head>

<?php get_header(); ?>

<body>
	<div id="main">
		<div class="slider-frame">
			<h2>Wath`s New</h2>
			<ul class="slider">
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/sample01.jpg" alt="イメージ1" /></li>
			</ul>
		</div>

		<div class="main-item01">
			<div class="left-calam content">
				<h2>twitter</h2>
				<div class="twBox">
					<a class="twitter-timeline" data-width="320" data-height="320" data-theme="light" href="https://twitter.com/takapon_jp?ref_src=twsrc%5Etfw">Tweets by takapon_jp</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>


			<div id="news-content" class="content clearfix">
				<h2>SampleSite News</h2>
				<?php /* 投稿呼び出しインスタンス生成 */ ?>
				<?php $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 5 ) ); ?>
				<?php /* インスタンスの中身(投稿)があるか確認 */ ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<ul class="box-news">
						<?php /* 投稿呼び出し */ ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li class="news">
								<a href="<?php the_permalink() ?>">
									<h4><?php the_title(); ?></h4>
									<p><?php the_excerpt(); ?></p>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<div id="news-btn">
					<a href="/archive">More SampleSite News</a>
				</div>
			</div>
		</div>
		
		<?php /*
		
		110文字　※hunctuins.phpで設定変更できる※
		<?php the_excerpt(); ?>
		
		全文字
		<?php the_content(); ?>

		*/ ?>


		<div id="rec-content" class="">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/job2.jpg"></a>
		</div>

		<div class="content" id="concept">
			<h2>CONCEPT</h2>
			<p>HTMLを主に使用したサンプルサイトとなっております。<br>
				インクルードファイルの読み込みの為、PHPも一部使用しております。今後はPHPを使用して動的表示をする予定です。</p>
		</div>

	</div>
</body>
<?php get_footer(); ?>
<?php wp_footer(); ?>