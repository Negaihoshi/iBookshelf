<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = urldecode($uri);

$public = __DIR__.'/public';

$requested = $public.$uri;

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software [here](https://github.com/laravel/laravel/pull/3106).
if ($uri !== '/' and file_exists($requested))
{
    return false;
}

require_once $public.'/index.php';
