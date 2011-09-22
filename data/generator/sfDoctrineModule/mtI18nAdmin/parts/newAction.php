  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm(null, array('language' => $this->getLanguage()));
    $this-><?php echo $this->getSingularName() ?> = $this->form->getObject();
  }
