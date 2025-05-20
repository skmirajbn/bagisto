# #!/bin/bash
# set -e

# # Wait for MySQL to be ready
# until php -r "try { new PDO('mysql:host=${DB_HOST:-db};dbname=${DB_DATABASE:-bagisto}', '${DB_USERNAME:-bagisto}', '${DB_PASSWORD:-root}'); echo 'connected'; } catch (PDOException \$e) { exit(1); }" > /dev/null 2>&1; do
#   echo "Waiting for database connection..."
#   sleep 2
# done

# # Check if composer.lock has compatibility issues and update if needed
# if [ "$AUTO_UPDATE_COMPOSER" = "true" ]; then
#   echo "Checking composer dependencies..."
#   composer update --no-interaction || composer update --no-interaction --ignore-platform-reqs
# fi

# # Run migrations if needed
# if [ "$RUN_MIGRATIONS" = "true" ]; then
#   php artisan migrate --force
# fi

# # Clear cache
# php artisan optimize:clear

# # Start Supervisor
# /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf