  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm(null, array('language' => $this->getLanguage()));
    $this-><?php echo $this->getSingularName() ?> = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }
