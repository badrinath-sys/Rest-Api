# Initial Setup

1. `docker-compose up -d`

2. `docker-compose exec lumen composer install`

3. `docker-compose exec lumen php artisan migrate`

### Visit http://localhost/api/products