<?php
declare(strict_types=1);

require_once 'classes.php';

try {
// Initialize the library the manual way.
    $ffi = FFI::cdef(file_get_contents('points/points.h'), __DIR__ . '/points/target/release/points.so');
}
catch (FFI\Exception $e) {
    print($e->getMessage() . PHP_EOL . PHP_EOL);
    exit;
}

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
