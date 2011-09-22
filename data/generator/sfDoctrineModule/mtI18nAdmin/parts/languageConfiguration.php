  public function getDefaultLanguage()
  {
    return <?php echo isset($this->config['default_language']) ? $this->config['default_language'] : 'false' ?>;
  }
