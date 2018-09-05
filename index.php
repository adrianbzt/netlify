<?php

$name = trim( explode( '?', $_SERVER['REQUEST_URI'], 2 )[0], '/' );
$name = str_replace( '.', '', $name );
$file = '404';

if ( $name !== 'index' && is_file( __dir__ . "/$name.php" ) ) {
	$file = $name;
} elseif (!$name) {
	$file = 'home';
}

// echo '<pre>';
// print_r($name);
// echo '<br/>';
// print_r($file);
// die;

$dir = dirname(__FILE__);
// include $dir . "/partials/header.php";
// require $dir . "/$file.php";
// include $dir . "/partials/footer.php";

echo $dir;