<?php

use phpfw\core\App;
use phpfw\core\Router;

define('DEBUG', 1);
const WWW = __DIR__;
define('CORE', dirname(__DIR__) . '/vendor/phpfw/core');
define('LIBS', dirname(__DIR__) . '/vendor/phpfw/libs');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('CACHE', __DIR__ . '/tmp/cache');
define('LAYOUT', 'blog');
define('ADMIN', 'http://phpfw.test/admin');

require '../vendor/phpfw/libs/functions.php';
require __DIR__ . '/../vendor/autoload.php';

new App;

$query = trim($_SERVER['REQUEST_URI'], '/');

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'about']);

// for pagination
Router::add('^\?page=([0-9]+)$', ['controller' => 'Main', 'action' => 'index']);

// language
Router::add('^language/change\?lang=([a-z]+)$', ['controller' => 'Language', 'action' => 'change']);

// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);
