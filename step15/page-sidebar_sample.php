<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php require "include/site-name.php"; ?>｜アクセス</title>
<meta name="keywords" content="サンプル,練習用,メニュー" />
<meta name="description" content="こちらは練習用に作成されたサンプルサイトです。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/access.css" type="text/css" media="screen,tv" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css" type="text/css" media="screen,tv" />
<?php wp_head(); ?>
</head>

<<?php get_header(); ?>

<body>

	<div class="content" id="sidebar-content">

		<div class="sidebar-content_main">
			<h2>ACCESS</h2>
			<div class="box-access">
				<div class="access-map">
					<div class="accessFlame">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.764801255991!2d140.10170681469364!3d35.6335243401954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228481195535bf%3A0xa5bdc3782ffb6318!2z5pWs5oSb5aSn5a2m!5e0!3m2!1sja!2sjp!4v1563626424582!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="store-box">
						<h3>敬愛大学 軽音楽部部室</h3>
						<dl>
							<dt>住所</dt>
							<dd>〒263-0024<br>
							千葉県千葉市稲毛区穴川１丁目５−２1<br>
							部室棟２F 軽音楽部</dd>

							<dt>電話番号</dt>
							<dd>043-251-6363</dd>

							<dt>営業時間</dt>
							<dd>8:00~21:00</dd>

							<dt>休日</dt>
							<dd>土日祝<br>
								場合により変更あり</dd>

							<dt>説明</dt>
							<dd>大学時代多くの時間を過ごした場所</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>

		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
		
	</div>

</body>
<?php get_footer(); ?>
<?php wp_footer(); ?>