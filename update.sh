#!/bin/bash
# sudo chmod +x update.sh

echo "Updating Frontend"
git -C ../jw-notes pull

echo "Updating Backend"
git pull
composer install -o --no-dev

echo "Migrating"
php artisan migrate --force

echo "Optimizing"
php artisan optimize

echo "Reloading Octane"
php artisan octane:reload

#echo "Scout Indexes"
php artisan scout:sync-index-settings

echo "Updating Done"
