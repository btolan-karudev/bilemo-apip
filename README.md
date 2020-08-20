# bilemo-apip

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ea353f99b6244646a632b442ee754386)](https://app.codacy.com/manual/btolan-karudev/bilemo-apip?utm_source=github.com&utm_medium=referral&utm_content=btolan-karudev/bilemo-apip&utm_campaign=Badge_Grade_Dashboard)


## Setup

If you've just downloaded the code, congratulations!!

To get it working, follow these steps:

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```
composer install
```

You may alternatively need to run `php composer.phar install`, depending
on how you installed Composer.

**Start the built-in web server**

You can use Nginx or Apache, but Symfony's local web server
works even better.

To install the Symfony local web server, follow
"Downloading the Symfony client" instructions found
here: https://symfony.com/download - you only need to do this
once on your system.

Then, to start the web server, open a terminal, move into the
project, and run:

```
symfony serve
```

(If this is your first time using this command, you may see an
error that you need to run `symfony server:ca:install` first).

Now check out the site at `https://localhost:8000`

Have fun!