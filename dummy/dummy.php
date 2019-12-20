<?php
declare(strict_types=1);


final class Dummy {
    private static $ffi = null;
    function __construct() {
        if (is_null(self::$ffi)) {
            self::$ffi = FFI::scope("DUMMY");
        }
    }
    function printf($format, ...$args) {
        return (int)self::$ffi->printf($format, ...$args);
    }
}
