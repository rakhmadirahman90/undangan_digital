<?php

use Illuminate\Http\Request;

// Vercel serverless entry point for Laravel.
// Keep the handler minimal: Laravel boots the application and handles
// the request using the standard Laravel front controller flow.

putenv('APP_ENV=production');
putenv('APP_DEBUG=false');
putenv('SESSION_DRIVER=array');
putenv('CACHE_STORE=array');
putenv('QUEUE_CONNECTION=sync');
putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=/tmp/undangan.sqlite');

$_ENV['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = 'false';
$_ENV['SESSION_DRIVER'] = 'array';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['QUEUE_CONNECTION'] = 'sync';
$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = '/tmp/undangan.sqlite';

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Request::capture());
