<?php 

function add_css_js() {//関数名add_css_js()を作成
	
	//全てのページにstyle.cssを読み込み
    wp_enqueue_style('style',get_template_directory_uri().'/style.css' );
    
    //全てのページにjs/common.jsを読み込み
    wp_enqueue_script('js', get_template_directory_uri().'/js/common.js',array( 'jquery' ),'1.8.1', true);
    
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'archive'; //任意のURL名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
//10は優先順位(低い方を優先)/2は紐付けられた関数の数

?>