<?php 

function add_css_js() {//関数名add_css_js()を作成
	
	//全てのページにstyle.cssを読み込み
    wp_enqueue_style('style',get_template_directory_uri().'/style.css' );
    
    //全てのページにjs/common.jsを読み込み
    wp_enqueue_script('js', get_template_directory_uri().'/js/common.js',array( 'jquery' ),'1.8.1', true);
    
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

?>