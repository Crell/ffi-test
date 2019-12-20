<?php
declare(strict_types=1);

echo "STARTING PRELOAD", PHP_EOL;

FFI::load(__DIR__ . "/dummy.h");
opcache_compile_file(__DIR__ . "/dummy.php");

echo "ENDING PRELOAD", PHP_EOL;
