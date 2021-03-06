<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Remove default loop
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'genesis_404' );
/**
 * This function outputs a 404 "Not Found" error message
 *
 * @since 1.6
 */
function genesis_404() {

	echo genesis_html5() ? '<article class="entry">' : '<div class="post hentry">';

		printf( '<h1 class="entry-title">%s</h1>', 'Oups ! Ça coince. On vient de déménager :-(' );
		echo '<div class="entry-content">'; ?>

	<address>Pour les nouveaux, merci de cliquer sur <a href="http://conferenceswcparis.fr/conferences/action/sign-up/">S'enregistrer / Signup</a>. Pour les autres sur <a href="http://conferenceswcparis.fr/conferences/">Conférences / talks</a> .</address>



	<a href="http://conferenceswcparis.fr/"><img src="http://gn-telechargement.s3.amazonaws.com/_tokeep/404-what-going-on-2.jpg" width="606" height="421"></a>

	<p>C'est promis, on reste ici maintenant. Oh yeaaah...</p>

<?php


			echo '</div>';

		echo genesis_html5() ? '</article>' : '</div>';

}

genesis();
