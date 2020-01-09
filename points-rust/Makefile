
## User-friendly targets.

all: inline preload

preload: points.so
	php -d opcache.preload="preloader.php" -d opcache.enable_cli=true preload.php

inline: points.so
	php -d opcache.enable_cli=true inline.php

clean:
	rm -rf points/target
	rm -f points.h

## Building dependencies

rust:
	cd points && cargo build --release
