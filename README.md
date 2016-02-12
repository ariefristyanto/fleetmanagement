# Armada

## Description
Fleet Management system built using [Laravel](http://laravel.com/) framework
* See [Laravel 5.1 Docs](http://laravel.com/docs/5.1)
* See [Laracast Tutorials](https://laracasts.com/series/laravel-5-fundamentals)


## Features
* Based on Laravel 5.1
* Theme engine using [yaapis/Theme](https://github.com/yaapis/Theme).
* Includes 3 themes based on [almasaeed2010/AdminLTE](https://github.com/almasaeed2010/AdminLTE).
* Custom Error pages: 
    * 403: Forbidden access.
    * 404: Page not found.
    * 500: Internal server error.
* Authentication
* Authorization
* Flash notifications using [laracasts/flash](https://github.com/laracasts/flash).
* Internationalization (i18n).
* Gulp and Elixir ready to compile and minimize Sass & CoffeeScript.
* Bootstrap v3.3.4.
* Font-awesome v4.4.0.
* Ionic Framework v2.0.1.
* jQuery 2.1.4.
* Select2 4.0.0
* Select2 Bootstrap Theme v0.1.0-beta.4
* Development tools
    * Laravel [DebugBar](https://github.com/barryvdh/laravel-debugbar).
    * Laravel [IDE Helper](https://github.com/barryvdh/laravel-ide-helper).


## Install Local Development


### Option 1: Homestead (recommended)
Homestead is a vagrant VM image that runs on VirtualBox. It is recommended development for Windows or Mac.
* See [Homestead](http://laravel.com/docs/5.1/homestead)


### Option 2: Manually install PHP and laravel.


## Fetch dependencies

### Composer
Fetch all dependencies using *composer* by issuing the following command:

```
composer install
```

**_Note:_** 

On a production server, prior to running the *composer install* command, you will want to deploy a copy of the file 
*composer.lock* from your development server, to guarantee that the exact version of the various 
packages that you have developed on and tested gets installed. Never run the *composer update* 
command on a production server.

### Node.js
Fetch all dependencies for Node.js using *npm* by using the following command:

```
npm install
```

### Migration
After having configured your database settings, you will want to build the database.
 
If you kept the default database settings your will first have to initialize the SQLite file
```
touch database/database.sqlite
```

To run the migration scripts run this command
 ```
 ./artisan migrate
 ```
 
 To seed the database run the command below, note that in the development environment a few extra user and permissions
 are created.
 ```
 ./artisan db:seed --env=development
 ```

To regenerate composer autoload classmap (needed when adding new seeder or migration)
 ```
composer dump-autoload
 ```


### First login and test
You should now be able to launch a Web browser and see your new Web application with these logins:
- admin@company1.com
- user@company1.com
- admin@company2.com
- user@company2.com

All users are set with password `123456Qz!`.

## CSS & javascripts

To compile CSS & javascripts, run
 ```
gulp
 ```


## Tests

To run tests
 ```
phpunit
 ```
