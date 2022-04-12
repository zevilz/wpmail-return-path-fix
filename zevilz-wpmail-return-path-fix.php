<?php
/**
Plugin Name: WP mail Return-Path fix
Description: Adds sender email address to "Return-Path" header
Version: 1.0
Author: zEvilz
Author URI: https://github.com/zevilz/zevilz-wpmail-return-path-fix
License: MIT
*/

add_action( 'phpmailer_init', function( $phpmailer ) {
	$phpmailer->Sender = $phpmailer->From;
} );
