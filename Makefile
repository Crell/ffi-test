
inline: points_lib
	php  points-inline.php

points_lib: points.h points.c
	gcc -c -g points.c
	gcc -shared -o points.so points.o

clean:
	rm points.o points.so
