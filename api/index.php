<?php

use Illuminate\Contracts\Console\Kernel as ConsoleKernel;

// Vercel's filesystem is ephemeral. Keep the SQLite database in /tmp and
// initialize its schema on a cold start before Laravel handles the request.
$dbPath = '/tmp/undangan.sqlite';

putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=' . $dbPath);
putenv('SESSION_DRIVER=array');
putenv('CACHE_STORE=array');
putenv('QUEUE_CONNECTION=sync');

$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = $dbPath;
$_ENV['SESSION_DRIVER'] = 'array';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['QUEUE_CONNECTION'] = 'sync';

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

if (! file_exists($dbPath)) {
    touch($dbPath);
}

try {
    $app->make(ConsoleKernel::class)->call('migrate', [
        '--force' => true,
        '--no-interaction' => true,
    ]);
} catch (Throwable $e) {
    error_log('Vercel SQLite migration failed: ' . $e->getMessage());
}

$app->handleRequest(\Illuminate\Http\Request::capture());
