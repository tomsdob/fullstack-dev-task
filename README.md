## To install the dependencies, please refer to the official Laravel Sail docs: [Laravel Sail](https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects)

## Copy the .env.example file
```bash
cp env.example .env
```

## Generate an app key
```bash
./vendor/bin/sail artisan key:generate
```

## Run the migrations
```bash
./vendor/bin/sail artisan migrate
```

## Start up the application
```bash
./vendor/bin/sail up 
```

## Database URL, credentials
```
host: localhost:3306
database: fullstack_dev_task
username: root
password:
```

### Unit testing with PHPUnit
```bash
./vendor/bin/sail artisan test
```

### Database seeding
```bash
./vendor/bin/sail artisan db:seed
```

### PHPStan/Larastan
```bash
./vendor/bin/phpstan analyse
```