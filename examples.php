<?php

echo "FFI script.", PHP_EOL;

// create FFI object, loading libc and exporting function printf()
$ffi = FFI::cdef(
    "int printf(const char *format, ...);", // this is a regular C declaration
    "libc.so.6");
// call C's printf()
$ffi->printf("Hello %s!\n", "world");



// create gettimeofday() binding
$ffi = FFI::cdef("
    typedef unsigned int time_t;
    typedef unsigned int suseconds_t;
 
    struct timeval {
        time_t      tv_sec;
        suseconds_t tv_usec;
    };
 
    struct timezone {
        int tz_minuteswest;
        int tz_dsttime;
    };
 
    int gettimeofday(struct timeval *tv, struct timezone *tz);    
", "libc.so.6");
// create C data structures
$tv = $ffi->new("struct timeval");
$tz = $ffi->new("struct timezone");
// call C's gettimeofday()
var_dump($ffi->gettimeofday(FFI::addr($tv), FFI::addr($tz)));
// access field of C data structure
var_dump($tv->tv_sec);
// print the whole C data structure
var_dump($tz);



// create a new C int variable
$x = FFI::new("int");
var_dump($x->cdata);

// simple assignment
$x->cdata = 5;
var_dump($x->cdata);

// compound assignment
$x->cdata += 2;
var_dump($x->cdata);
