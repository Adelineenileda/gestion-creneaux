# Jelix

Jelix is an open-source framework for PHP. Jelix 1.8 is compatible from PHP 7.4 to PHP 8.3. 

It has a modular, extensible architecture. Applications based on Jelix are made with
modules, which allow to reuse features in several projects.

For more information, read [details about its features](https://jelix.org/articles/en/features).


**This package, `jelix/jelix-standard`, is a distribution of Jelix with standard components**. 
If you want a minimal package, use the [`jelix/jelix`](https://packagist.org/) package instead.

Installation
============

The best way is to use [Composer](https://getcomposer.org).

Create a directory and a composer.json file : 

```
{
    "name": "me/my-project",
    "require": {
        "php": ">=7.4",
        "jelix/jelix-standard": "~1.8.20"
    }
}
```

Then you run:

```
composer install
```

Read [the documentation to create an application](https://docs.jelix.org/en/manual-1.8/installation/create-application).

Documentation and community
===========================

There is a full manual to learn Jelix. You can read it 
[directly on the website](https://docs.jelix.org/en/manual-1.8).

You can ask your questions [on the forum](https://jelix.org/forums/forum/cat/2-english) or
on our IRC Channel, #jelix, on the irc.freenode.net network.

Contribution & development
===========================

If you want to contribute, you can use the provided Vagrant configuration
which install all what is needed to run and test Jelix, and launch unit tests. See the
testapp/README.md file in the repository.

Fill issues on Github https://github.com/jelix/jelix/.
