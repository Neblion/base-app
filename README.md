Neblion/BaseApp Symfony2 app
============================

Neblion/BaseApp is a Symfony2 base application on top on symfony/framework-standard-edition.
Working in progress, no stable release yet....

[![Build Status](https://secure.travis-ci.org/Neblion/scrum.png)](http://travis-ci.org/Neblion/base-app)

Neblion/BaseApp contain:
- stof/doctrine-extensions-bundle
- doctrine/doctrine-fixtures-bundle
- friendsofsymfony/user-bundle
- JQuery 1.9.1
- twitter/bootstrap

Installation
------------
### Requirements
You have to install and configure a Web server (such as Apache) with a recent 
version of PHP5 (5.3.8 or newer is recommended) and a database server.
You also have to install [composer](http://getcomposer.org/) (dependency management library for PHP), 
you should install it [globally](http://getcomposer.org/doc/00-intro.md#globally) on your system.

As Neblion/BaseApp is a symfony app, you can find more informations on Symfony2 
requirements at [requirements reference](http://symfony.com/doc/current/reference/requirements.html "Symfony2 requirements reference").
For information on configuring your specific web server document root, 
see the following documentation: [Apache](http://httpd.apache.org/docs/current/mod/core.html#documentroot).

### Step by step installation
1.  Install via composer and packagist

        composer create-project neblion/base-app <your-installation-path>

2.   Create you vhost and configure DocumentRoot to --> `<your-path>/web` and check your config: http://`<your-host>`/config.php

3.   Set permission on file system see [Symfony2 install](http://symfony.com/doc/current/book/installation.html#configuration-and-setup).

4.   Create your DB and a user DB (if you use MySQL):

        mysql -uroot -p
        <enter_mysql_root_pass>
        create database <DB_NAME>;
        grant all privileges on <DB-NAME>.* to '<YOUR-USERNAME>'@'localhost' identified by 'YOUR-PASSWORD' with grant option;
        flush privileges;

5.   Set your parameters.yml

6.   Run commands

        cd <your-installation-path>
        php app/console doctrine:schema:update --force
        php app/console assets:install
        php app/console assetic:dump

7.  All done, test it!
    
Documentation
-------------
Work in progress...

Support and contact
-------------------
thomas.bibard@neblion.net

Tests
-----
    phpunit -c app

Continuous Integration On Travis-ci Platform...[![Build Status](https://secure.travis-ci.org/Neblion/scrum.png)](http://travis-ci.org/Neblion/base-app)

License
-------
Neblion/BaseApp is a free software licensed under the GNU Affero General Public License V3.


Credits
-------
