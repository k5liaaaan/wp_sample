<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="サンプル,練習用,トップページ" />
<meta name="description" content="こちらは練習用に作成されたサンプルサイトです。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>記事一覧</title>
<link rel="canonical" href="<?php echo get_the_permalink();?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/archive.css"/>
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

<div id="main">
		<h2 class="archiveTitle">NEWS</h2>
		<?php
			if ( have_posts() ) {
		  	while ( have_posts() ){
		    	the_post();
		?>
		<a href="<?php the_permalink() ?>">
	    <article class="archiveBox">
	    	<div class="archiveBoxData">
	    		<h3 class="archiveBoxTitle"><?php the_title(); ?></h3>
	      		<P class="archiveBoxTime"><?php the_date(); ?></P>
	    	</div>
	     	<span class="archiveBoxText"><?php the_excerpt(); ?></span> 
	    </article>
	    </a>
	    <?php
		  }
		}
		?>
		

	</div><!-- main -->

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