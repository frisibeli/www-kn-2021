<?php

$hashedPass = password_hash('admin', PASSWORD_DEFAULT);

function require_auth() {
	$AUTH_USER = 'admin';
	$AUTH_PASS = '$2y$10$m.e.gnTOoHc.vlBPN1oAdOtyb2gJghd9cVVzaUMR9E0XT7iFI699u';


  header('Cache-Control: no-cache, must-revalidate, max-age=0');
	$has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
	$is_not_authenticated = (
		!$has_supplied_credentials ||
		$_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
		!password_verify($_SERVER['PHP_AUTH_PW'], $AUTH_PASS)
	);

	if ($is_not_authenticated) {
		header('HTTP/1.1 401 Authorization Required');
		header('WWW-Authenticate: Basic realm="Access denied"');
		exit;
	}
}

require_auth();