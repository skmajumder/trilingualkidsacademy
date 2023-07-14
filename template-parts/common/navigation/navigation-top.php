<?php
$trilingualkidsacademyTopMenu = [
	'container'       => 'nav',
	'container_id'    => 'mainnav',
	'container_class' => 'mainnav',
	'menu_class'      => 'menu',
	'theme_location'  => 'topMenuLocation',
	'fallback_cb'     => '',
];

wp_nav_menu( $trilingualkidsacademyTopMenu );