mtI18nPlugin
=======================

This plugin provides a doctrine admin theme to manage i18n:


Installation
------------

### Plugin installation

Edit your `config/ProjectConfiguration.class.php` file to enable the plugin:

    <?php
    class ProjectConfiguration extends sfProjectConfiguration
    {
      public function setup()
      {
        $this->enablePlugins(array(
          // ... other plugin(s)
          'mtI18nPlugin',
        ));
      }
    }


Basic configuration
-------------------

TODO


Changelog
---------

### v0.1 - 2011-09-22

 * Initial release


Credits
-------

TODO
