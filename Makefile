install:
	composer install

console:
	composer exec --verbose psysh

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src tests
	composer exec --verbose phpstan -- --level=8 analyse -c ./phpstan.neon

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src tests

test:
	composer exec --verbose phpunit

test-coverage:
	composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml
