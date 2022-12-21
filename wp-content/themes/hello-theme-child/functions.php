<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );





/*add_action( 'elementor_pro/forms/new_record', function( $record, $handler ) {
	//make sure its our form
	$form_name = $record->get_form_settings( 'form_name' );
	if ( 'Resultados' !== $form_name ) {
		return;
	}

	$raw_fields = $record->get( 'fields' );
	$fields = [];
	foreach ( $raw_fields as $id => $field ) {
		$fields[ $id ] = $field['value'];
	}

	wp_remote_post( 'https://www.resultados.com.br/index.aspx?origem=DIAS', [
		'body' => $fields,
	]);
});*/
