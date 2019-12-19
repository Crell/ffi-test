<?php
declare(strict_types=1);

$p1 = new Point(3, 4);
$p2 = new Point(7, 9);

//$ffi = FFI::load(__DIR__ . "/points.h");
//$ffi = FFI::scope("POINTS");

$ffi = FFI::cdef(file_get_contents('points.h'), 'points.o');

$d = $ffi->distance($p1, $p2);

print "Distance is $d\n";
