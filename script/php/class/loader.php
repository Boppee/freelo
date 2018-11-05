<?php
  class loader {

    public $page;
    //add pages here
    public $pages = array("home");

    function __construct() {

      //page Controll
      $this->page = $_REQUEST["page"];
      if (!isset($this->page) || !in_array($this->page, $this->pages)) {
        $this->goToPage("?page=home");
      }

    }

    public function goToPage($url){
      header('Location: '.$url);
      exit;
    }
  }
?>
