[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfModelGeneratorHelper
{
  public static $languages_config = <?php echo $this->asPhp(isset($this->params['languages']) ? $this->params['languages'] : array()) ?>;

  public function getUrlForAction($action)
  {
    return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_'.$action;
  }

  public function getLanguages()
  {
    return array_keys(self::$languages_config);
  }

  public function getLanguagesConfig()
  {
    return self::$languages_config;
  }
  
  public function getLanguageExists($language)
  {
    return array_key_exists($language, self::$languages_config);
  }
  
  public function getLanguageParam($language, $param)
  {
    return $this->getLanguageExists($language) && array_key_exists($param, self::$languages_config[$language])
      ? self::$languages_config[$language][$param]
      : false;
  }
  
  public function getLanguageName($language)
  {
    return $this->getLanguageParam($language, 'name');
  }
  
  public function getLanguageLocalizedName($language)
  {
    return $this->getLanguageParam($language, 'localized_name');
  }
  
  public function getLanguageFlag($language)
  {
    return $this->getLanguageParam($language, 'flag');
  }
  
  public function linkToNewLanguage($language)
  {
    $img   = sprintf('<img src="%s" alt="%s" />', $this->getLanguageFlag($language), $this->getLanguageLocalizedName($language));
    $title = __('Add in %lang% (%loc_lang%)', array('%lang%' => __($this->getLanguageName($language)), '%loc_lang%' => $this->getLanguageLocalizedName($language)));

    return '<li class="sf_admin_action_language_new">'.link_to($img, $this->getUrlForAction('new'), array('_language' => $language), array('title' => $title)).'</li>';
  }

  public function linkToEditLanguage($object, $language)
  {
    $img   = sprintf('<img src="%s" alt="%s" />', $this->getLanguageFlag($language), $this->getLanguageLocalizedName($language));
    $title = __('Edit in %lang% (%loc_lang%)', array('%lang%' => __($this->getLanguageName($language)), '%loc_lang%' => $this->getLanguageLocalizedName($language)));

    return '<li class="sf_admin_action_language_edit">'.link_to($img, $this->getUrlForAction('edit'), array('sf_subject' => $object, '_language' => $language), array('title' => $title)).'</li>';
  }
  
  public function linkToChangeLanguage($object, $language)
  {
    if ($object->isNew())
    {
      return $this->linkToNewLanguage($language);
    }
    
    return $this->linkToEditLanguage($object, $language);
  }
}
