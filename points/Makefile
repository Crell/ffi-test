
all: inline preload

preload: points_lib
	php -d opcache.preload="preloader.php" -d opcache.enable_cli=true preload.php

inline: points_lib
	php -d opcache.enable_cli=true inline.php

points_lib: points.h points.c
	gcc -c -g points.c
	gcc -shared -o points.so points.o

clean:
	rm points.o points.so
