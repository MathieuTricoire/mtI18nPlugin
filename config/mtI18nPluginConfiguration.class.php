<?php

/**
 * mtI18nPlugin configuration.
 * 
 * @package     mtI18nPlugin
 * @subpackage  config
 * @author      Mathieu Tricoire <mathieu.tricoire@gmail.com>
 */
class mtI18nPluginConfiguration extends sfPluginConfiguration
{
  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    if (!sfConfig::get('mt_i18n_plugin_web_dir'))
    {
      sfConfig::set('mt_i18n_plugin_web_dir', '/mtI18nPlugin');
    }
  }
}
