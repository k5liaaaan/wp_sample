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

<div class="smp-menu toggle">
	<div class="menu-toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<div class="menu">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'header',//メニューの選択
        'container'      => 'div',
        'depth'          => 0,
        'fallback_cb' => false,
        'menu_class'      => 'nav'//クラス名
    ) );
    ?>
</div>