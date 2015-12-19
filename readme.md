## PSB ONLINE MIAS 2016/2017

### Langkah Instalasi

- Clone source code

```
git clone https://github.com/udibagas/sidik.git
```

- Install dependency composer

```
cd sidik
composer install
```

- Copy .env.example ke .env

```
cp .env.example .env
```

- Sesuaikan setingan .env di bagian berikut:

    DB_HOST,
    DB_DATABASE,
    DB_USERNAME,
    DB_PASSWORD

- Generate App Key

```
php artisan key:generate
```

- Migrate database Schema

```
php artisan migrate
```

- Seed Database

```
php artisan db:seed
```

- Login menggunakan user: panitiapsbmias@gmail.com pass: password
