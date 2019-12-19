run: points_lib
	php -d ffi.enable=preload -d opcache.preload="points-preload.php" points-test.php

points_lib: points.h points.c
	gcc -c -g points.c

clean:
	rm points.o
