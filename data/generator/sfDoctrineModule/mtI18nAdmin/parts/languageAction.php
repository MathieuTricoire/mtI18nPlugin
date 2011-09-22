  protected function getLanguage()
  {
    $this->language = $this->getDefaultLanguage();
    
    if (($this->getRequest()->isMethod(sfRequest::PUT) || $this->getRequest()->isMethod(sfRequest::POST)) && $this->getRequest()->getPostParameter('_language') != null)
    {
      $this->language = $this->getRequest()->getPostParameter('_language');
    }
    elseif ($this->getRequest()->getGetParameter('_language') != null)
    {
      $this->language = $this->getRequest()->getGetParameter('_language');
    }

    return $this->language;
  }
  
  protected function getDefaultLanguage()
  {
    return $this->configuration->getDefaultLanguage() !== false ? $this->configuration->getDefaultLanguage() : $this->getUser()->getCulture();
  }
