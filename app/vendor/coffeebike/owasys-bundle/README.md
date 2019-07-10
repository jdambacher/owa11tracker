# [WIP] OwasysBundle
This is a Symfony Bundle for the Owasys OWA11 tracking device. It helps to wrap all mqtt messages from and to the OWA11 device.

**Notice**: This bundle is still work in progress!

**Please open an issue or a PR if you want to contribute to the project.**

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require coffeebike/owasys-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new CoffeeBike\OwasysBundle\CoffeeBikeOwasysBundle(),
        );

        // ...
    }

    // ...
}
```
