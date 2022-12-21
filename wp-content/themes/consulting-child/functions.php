<?php

add_action( 'wp_enqueue_scripts', 'consulting_child_enqueue_parent_styles');

function consulting_child_enqueue_parent_styles() {

	wp_enqueue_style( 'consulting-style', get_template_directory_uri() . '/style.css', array( 'bootstrap' ), CONSULTING_THEME_VERSION, 'all' );

    $skin = get_theme_mod('site_skin', 'skin_default');
    if ($skin == 'skin_default') {
        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'consulting-layout' ), CONSULTING_THEME_VERSION, 'all' );
    } else {
        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'consulting-layout', 'stm-skin-custom-generated' ), CONSULTING_THEME_VERSION, 'all' );
    }

}


/*add_filter('wpcf7_form_action_url', 'wpcf7_custom_form_action_url');
function wpcf7_custom_form_action_url($url){
	
	//if( is_page(1071) or is_page(558) ){
		global $post, $wpcf7;

		$wpcf7->skip_mail = 1;
		//return 'http://www.laboratoriodias.com.br/~dfs/newlab/results2.php';
		return 'https://www.resultados.com.br/index.aspx?origem=DIAS';

		return $url;
	//}

}*/

add_filter('wpcf7_form_action_url', 'wpcf7_custom_form_action_url');
function wpcf7_custom_form_action_url(){
	if( !is_page(1478) ){
		$wpcf7 = WPCF7_ContactForm::get_current();
		$wpcf7->skip_mail = true;
		return 'https://www.resultados.com.br/index.aspx?origem=DIAS';
	}
}
