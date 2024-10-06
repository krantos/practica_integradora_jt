#!/bin/sh

# if [ -e "./database/database.sqlite" ]; then
# 	echo "Deleting sqlite db"
# 	rm ./database/database.sqlite
# fi

if [ -e "./tests/jobtracker.sqlite" ]; then
	echo "Deleting jobtracker.sqlite"
	rm ./tests/jobtracker.sqlite

fi
	
echo "creating jobtracker sqlite db"
touch ./tests/jobtracker.sqlite

# php artisan key:generate --env=testing

echo "Running migration"
php artisan migrate --env=testing

echo "Running tests"
php artisan test --env=testing
