<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="サンプル,練習用,トップページ" />
<meta name="description" content="こちらは練習用に作成されたサンプルサイトです。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title><?php require "include/site-name.php"; ?>|<?php the_title(); ?></title>
<link rel="canonical" href="<?php echo get_the_permalink();?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/single.css"/>
<?php wp_head(); ?>
</head>

<?php get_header(); ?>

<body>

	<div id="main">

		<?php
	      if ( have_posts() ) :
	      while ( have_posts() ) : the_post();
	    ?>
	    <div class="singleBox">
			<h2 class="singleBoxTitle"><?php the_title(); ?></h1>
			<p class="singleBoxTime"><?php the_date(); ?></p>
			<span class="singleBoxText"><?php the_content(); ?></span>
	    </div>
		<?php
			endwhile;
			endif;
		?>

	</div><!-- main -->

</body>

<?php get_footer(); ?>
<?php wp_footer(); ?>