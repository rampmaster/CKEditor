# CKEditor for Symfony 4
Provides a CKEditor integration for your Symfony4 Project.

Version
-------
0.1.01

Development ONLY
----------------

This package is currently under development and is also a learning tool for myself.  Please use with EXTREME caution.   I will remove this warning when I am satisfied it is ready for release.


Installation
============

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:  A flex recipe for version 0.1.00 has been written, but is currently waiting for testing and approval.

```console
$ composer require hillrange/ckeditor
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require hillrange/ckeditor dev-master
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Download CKEditor
-----------------

Once, you have registered the bundle, you need to install CKEditor:
```console
$ php bin/console ckeditor:install
```
and then run 
```console
$ composer update
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/Bundles.php` file of your project:

```php
<?php

return [
    //...
    //
    Hillrange\CKEditor\HillrangeCKEditorBundle::class => ['all' => true],
];

```
Features
--------

ToDo
----


