#!/bin/bash
set -e

echo "Deployment started ..."
# Enter maintenance mode or return true
# if already is in maintenance mode(!)
(/opt/php80/bin/php artisan down) || true

# Pull the latest version of the app
git pull origin master

# Install composer dependencies(!)
#composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache(!)
/opt/php80/bin/php artisan clear-compiled

# Recreate cache(!)
/opt/php80/bin/php artisan optimize

# Compile npm assets(!)
npm run build

# Run database migrations(!)
/opt/php80/bin/php artisan migrate --force

# Exit maintenance mode(!)
/opt/php80/bin/php artisan up

echo "Deployment finished!"
