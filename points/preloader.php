<?php
declare(strict_types=1);

print "START PRELOADER" . PHP_EOL;

FFI::load(__DIR__ . "/points.h");
opcache_compile_file(__DIR__ . "/classes.php");

print "END PRELOADER" . PHP_EOL;
