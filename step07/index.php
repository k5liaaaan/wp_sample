
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SampleSite｜トップページ</title>
<meta name="keywords" content="サンプル,練習用,トップページ" />
<meta name="description" content="こちらは練習用に作成されたサンプルサイトです。" />
<link rel="canonical" href="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css" type="text/css" media="screen,tv" />
<?php wp_head(); ?>
</head>

<header>
	<div id="head-main">
        <h1>学習の為のサンプルサイト</h1>
        <div class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/head-title.png">
        </div>

        <a href="tel:000-0000-0000"><span>Tel.</span>000-0000-0000</a>
        <p>営業時間 0:00 ~ 24:00</p>
    </div>
</header>

<body>

	<!-- ↓共通↓ -->
	<!-- モーダル -->
	<div class="signup-modal-wrapper" id="signup-modal">
    <div class="modal">
      <div class="close-modal">
        <span></span>
	    <span></span>
      </div>
      <div id="signup-form">
        <h2>新規登録</h2>
        <form action="#">
          <input class="form-control" type="text" placeholder="メールアドレス">
          <input class="form-control" type="password" placeholder="パスワード">
          <div id="submit-btn">新規登録</div>
        </form>
      </div>
    </div>
</div>

<div class="signup-modal-wrapper" id="login-modal">
    <div class="modal">
      <div class="close-modal">
        <span></span>
        <span></span>
      </div>
      <div id="signup-form">
        <h2>ログイン</h2>
        <form action="#">
          <input class="form-control" type="text" placeholder="メールアドレス">
          <input class="form-control" type="password" placeholder="パスワード">
          <div id="submit-btn">ログイン</div>
        </form>
      </div>
    </div>
</div>
	<!-- メニューバー -->
	<div class="menu">
	<ul class="nav">
		<li><a href="">Home</a></li>
		<li><a href="">MENU</a></li>
		<li><a href="">ACCESS</a></li>
		<li><a href="">RECRUIT</a></li>
		<li><span>Word Press</span>
			<ul>
				<li><a href="https://k5liaaaaan.work/">男飯とグルメ</a></li>
			</ul>
		</li>
		<li><span>JS LIST</span>
			<ul>
				<li><a class="login-show" href="#">MODAL-login</a></li>
				<li><a class="signup-show" href="#">MODAL-new</a></li>
				<li><a href="#js-list">etc.</a></li>
			</ul>
		</li>
	</ul>
</div>
<div class="smp-menu toggle">
	<div class="menu-toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>

<ul class="smp-nav">
		<li><a href="">Home</a></li>
		<li><a href="">MENU</a></li>
		<li><a href="">ACCESS</a></li>
		<li><a href="">RECRUIT</a></li>
		<li><span class="smp-tg">Word Press</span>
			<ul>
				<li><a href="https://k5liaaaaan.work/">男飯とグルメ</a></li>
			</ul>
		</li>
		<li><span class="smp-tg">JS LIST</span>
			<ul>
				<li><a class="login-show" href="#">MODAL-login</a></li>
				<li><a class="signup-show" href="#">MODAL-new</a></li>
				<li><a href="#js-list">etc.</a></li>
			</ul>
		</li>
	</ul>	<!-- ↑共通終了↑ -->
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

<footer>
	<div id="copy_text">
	掲載されている全てのデータの著作権は、【サンプルサイト】に属します。<br>
	これらのファイルを無断使用・無断転載・無断複製する事を堅く禁じます。
    </div>
    <div id="copy">
        Copyright(c) 2019 SampleSite All Right Reserved.<br>
        <span>Designed by <a href="/" target="_blank">Harada Keigo</a></span>
    </div>
</footer>
<?php wp_footer(); ?>