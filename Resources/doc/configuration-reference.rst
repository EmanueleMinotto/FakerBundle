Default Bundle Configuration
==========================

.. code-block:: yaml

    # app/config/config_dev.yml
    faker:
        twig: false
        locale: '%faker.locale%' # default en_US
        seed: '%faker.seed%' # default null
