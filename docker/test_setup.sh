#!/bin/sh

if [ -e "./tests/jobtracker.sqlite" ]; then
	echo "Deleting jobtracker.sqlite"
	rm ./tests/jobtracker.sqlite
fi
	
echo "creating jobtracker sqlite db"
touch ./tests/jobtracker.sqlite

echo "Running migration"
php artisan migrate:fresh --env=testing

echo "Running tests"
php artisan test --env=testing
