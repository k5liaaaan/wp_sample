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

function the_pagination() {
    global $wp_query;
    $bignum = 999999999;
    if ( $wp_query->max_num_pages <= 1 )
      return;
    echo '<nav class="pagination">';
    echo paginate_links( array(
      'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
      'format'       => '',
      'current'      => max( 1, get_query_var('paged') ),
      'total'        => $wp_query->max_num_pages,
      'prev_text'    => '&larr;',
      'next_text'    => '&rarr;',
      'type'         => 'list',
      'end_size'     => 3,
      'mid_size'     => 3
    ) );
    echo '</nav>';
}

if(!function_exists('lab_setup')):
  function lab_setup(){
    register_nav_menus(array(
      'global' => 'グローバルナビ',//グローバルナビ空けてるのでお好きにどうぞ
      'header' => 'ヘッダーナビ',
      'footer' => 'フッターナビ',
    ));
  }
  endif;
  add_action('after_setup_theme','lab_setup');

?>