<?php

function main_nav_url_replace( $menus ) {
	$stringReplace = home_url( '/' ) . '?section=';
	if ( is_front_page() ) {
		foreach ( $menus as $menu ) {
			$newUrl = str_replace( $stringReplace, '#', $menu->url );
			if ( $newUrl !== $menu->url ) {
				$newUrl = rtrim( $newUrl, '/' );
			}
			$menu->url = $newUrl;
		}
	}

	return $menus;
}

add_filter( 'wp_nav_menu_objects', 'main_nav_url_replace' );