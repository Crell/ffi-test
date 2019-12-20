<?php
declare(strict_types=1);

//$ffi = FFI::load(__DIR__ . "/points.h");
//$ffi = FFI::scope("POINTS");

$ffi = FFI::cdef(file_get_contents('points.h'), __DIR__ . '/points.so');


$p1 = new Point(3, 4);
$p2 = new Point(7, 9);

$cp1 = $ffi->new('struct point');
$cp2 = $ffi->new('struct point');

$cp1->x = $p1->x;
$cp1->y = $p1->y;
$cp2->x = $p2->x;
$cp2->y = $p2->y;

$d = $ffi->distance($cp1, $cp2);

print "Distance is $d\n";
