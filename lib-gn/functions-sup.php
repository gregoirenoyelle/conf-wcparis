<?php
// functions sup du theme


///////////////////////
// ENQUEUE SCRIPT CSS
///////////////////////

// ENQUEUE JS
///////////////////////
function gn_enqueue_js() {
	wp_register_script( 'vft-js', get_stylesheet_directory_uri() . '/lib-gn/js/scripts-vft.js', array('jquery'), '1.0', true );

	if ( !is_admin() ) {
		wp_enqueue_script( 'vft-js' );
	}
}
add_action( 'wp_enqueue_scripts', 'gn_enqueue_js' );



// perso: footer changer Copyright test
add_filter('genesis_footer_creds_text', 'perso_texte_copyright');
function perso_texte_copyright($creds) {
$creds = 'Copyright '.'[footer_copyright]' . ' :: Création <a href="http://www.gregoirenoyelle.com/" target="_blank">Grégoire Noyelle</a>, <a href="http://imathi.eu/" target="_blank">imath</a> :: Base: <a href="http://www.wordpress.org" target="_blank">WordPress</a> , <a href="http://www.studiopress.com/features" target="_blank">Genesis Framework</a>
 :: '. '[footer_loginout]';
return $creds;
}


///////////////////////
// ACF CONTENT
///////////////////////



///////////////////////
// EDITOR STYLE
///////////////////////

function gn_ajouter_styles_editeur() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'gn_ajouter_styles_editeur' );


