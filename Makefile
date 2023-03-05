install:
	composer install

start:
	php main.php

test:
	composer exec phpunit tests