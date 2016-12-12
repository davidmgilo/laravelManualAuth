# Laravel Manual Authentication


##Installation

Clone the repository via github:

```
$ git clone https://github.com/davidmgilo/laravelManualAuth.git
```

Install the dependencies:

```
$ composer install
```

```
$ npm install
```

Set up the environment:

```
$ cp .env.example .env
```

Comment every DB variable  except DB_CONNECTION and set it to sqlite.

Create the database:

```
$ touch database/database.sqlite
 ```
Generate the artisan key:

```
$ php artisan key:generate
```

##Usage

You can set up the database through:

```
$ php artisan migrate --seed
```

Use it through a local server as in:

```
$ llum serve
```

Or:

```
$ php artisan serve
```


## Contact

By email: davidmgilo@gmail.com