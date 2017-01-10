<?php

/**
 * Custom mail-related functions to fix mail sending
 * when the site is just known as "localhost"
 * @see https://github.com/daveross/docker-wordpress-devel
 */

/**
 * Override the mail sending address to wordpress@example.com
 * @see https://tools.ietf.org/html/rfc2606
 */
add_filter( 'wp_mail_from', function() { return 'wordpress@example.com'; } );