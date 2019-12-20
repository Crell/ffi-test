<?php
declare(strict_types=1);

//FFI::load(__DIR__ . "/dummy.h");

//require_once "dummy-preload.php";
//require_once "dummy.php";

//var_dump(opcache_get_status());


$d = new Dummy();
$d->printf("Hello %s!\n", "world");
