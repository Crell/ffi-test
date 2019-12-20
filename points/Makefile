
all: inline preload

preload: points_lib
	php -d opcache.preload="preloader.php" preload.php

inline: points_lib
	php  inline.php

points_lib: points.h points.c
	gcc -c -g points.c
	gcc -shared -o points.so points.o

clean:
	rm points.o points.so
