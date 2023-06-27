# Laravel Project using Sail

This a Basic Laravel project that uses Sail to run and manage the sending of SMS to patients.

## Set up

Before starting, make sure you have Docker installed.

1. Once downloadad the project:

2. Go to the folder you have it downloaded:

```shell
cd laravel-sms
```

3. Install depedencies:

```shell
composer install
```

4. Copy the file `.env.example` to `.env`:

```shell
cp .env.example .env
```

5. Run Laravel Sail to start the containers and set up de environment:

```shell
./vendor/bin/sail up
```

6. Run migrations to create the necessary tables:

```shell
./vendor/bin/sail artisan migrate
```

7. Run Seeders to populate the DB with examples:

```shell
./vendor/bin/sail artisan db:seed
```

## Use

You can send HTTP calls to the API using a REST client such as Postman. This API has the below routes available:

- `POST /api/patient/{id}/sms`: Sends SMS to patient with ID provided.

- Params:
  - `message` (string): Message body to be sent.

- Other routes can be added to attend different needs.

## Tests

This project counts with automated tests to guarantee the API is working correctly. You can run the tests with the command bellow:

```shell
./vendor/bin/sail artisan test
```

## Observers

Laravel Observers will log all DB changes. You can find the code at `app/Observers`.

## Final Considerations

For more information check the official documentation at [https://laravel.com/docs](https://laravel.com/docs).

In case of any questions do not hesitate to contact the developer.
