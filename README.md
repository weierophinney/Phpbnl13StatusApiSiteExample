PHPBenelux 2013 "RESTful APIs with ZF2" Example
===============================================

Introduction
------------
This is an example project to accompany a tutorial for delivery at PHPBenelux
2013 by Rob Allen and Matthew Weier O'Phinney. It implements a sample RESTful
API.


Installation
------------

- Initialize git submodules

    git submodule update --init

- Run composer

    php composer.phar install

- Use the sample database

    cp data/status.db.example data/status.db
    chmod a+rwX data/status.db

Web Server
----------
Afterwards, set up a virtual host to point to the public/ directory of the
project and you should be ready to go!

Alternately, if you have PHP 5.4 or greater installed on your system, you can
test the functionality by running the built-in webserver:

    cd public
    php -S localhost:8080

(Choose a hostname and port that will work for your machine.)

Exposed APIs
------------

Visit http://localhost:8080/status/api/documentation to get information about
the exposed APIs and usage. We recommend using either curl or HTTPie when
testing the API.
