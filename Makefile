run: points_lib
	php -d opcache.preload="points-preload.php" points-test.php

points_lib: points.h points.c
	gcc -c -g points.c
	gcc -shared -o points.so points.o

clean:
	rm points.o points.so
