# PHP Project Template

## Features

- PHP 8.1
- Doctrine
- Laminas Framework
- PHPStan
- PHPUnit

# ProjectTitle

## Local development

Starting the container
```bash
docker-compose up -d
```

Creating a local `.env` file
```bash
cp .env.skel .env
```

Creating a local `.doctrine.local.php.skel` file
```bash
cp ./config/autoload/doctrine.local.php.skel ./config/autoload/doctrine.local.php
```

Running composer install.
```bash
docker-compose exec container-name composer install
```

Run migrations
```bash
docker-compose exec container-name php public/index.php migrations:migrate
```

(Optional) Jump inside the container.
```bash
docker-compose exec -it container-name bash
```

Debugging
* Server: `localhost:8080`
* IDE Key (session id): `DEBUG`   
