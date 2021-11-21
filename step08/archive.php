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

<?php get_header(); ?>

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

		<?php if( function_exists("the_pagination") ) the_pagination(); ?>

	</div><!-- main -->

</body>

<?php get_footer(); ?>
<?php wp_footer(); ?>