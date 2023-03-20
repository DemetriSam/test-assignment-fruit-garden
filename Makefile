install:
	composer install

start:
	php main.php

test:
	composer exec phpunit tests

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src tests

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src tests

phpstan:
	composer exec --verbose phpstan -- --xdebug