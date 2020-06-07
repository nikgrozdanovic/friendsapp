# friendsapp

To get the application running, clone the repository first.
After that run
```
composer install
```

```
npm install
```

After doing that, get your .env file set. Run from the terminal the following command:
```
mv .env.example .env
```

Run your XAMPP (or anything else that you use for a db host) and create database called friendsapp.
In your .env file adapt the following lines:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1/
DB_PORT=3306
DB_DATABASE=friendsapp
DB_USERNAME={your db username}
DB_PASSWORD={your db password}
```

After setting up your database, apply the migrations so you get all the neccessary tables in your database by running:
```
php artisan migrate
```
