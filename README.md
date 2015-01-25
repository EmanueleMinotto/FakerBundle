Faker Bundle [![Build Status](https://travis-ci.org/EmanueleMinotto/FakerBundle.svg)](https://travis-ci.org/EmanueleMinotto/FakerBundle)
============

Bundle for Symfony 2 providing the [Faker](https://github.com/fzaninotto/Faker) library.

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require emanueleminotto/faker-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding the following line in the `app/AppKernel.php`
file of your project:

```php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
        );

        if (...) {
            // ...
            $bundles[] = new EmanueleMinotto\FakerBundle\FakerBundle();
        }
    }
}
```

Usage
-----

No more requirements, you can start using the `faker` service.

Reading:

 * [Configuration Reference](https://github.com/EmanueleMinotto/FakerBundle/tree/master/Resources/doc/configuration-reference.rst)
 * [Providers](https://github.com/EmanueleMinotto/FakerBundle/tree/master/Resources/doc/providers.rst)
 * [Twig Extension](https://github.com/EmanueleMinotto/FakerBundle/tree/master/Resources/doc/twig.rst)

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE
