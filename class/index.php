<?php
  /**
   *
   */
  class Connection extends mysqli{
    private $server='127.0.0.1';
    private $user='root';
    private $password='whydoit';
    private $database='academic';
    function __construct(){
      parent::__construct($this->server,$this->user,$this->password,$this->database);
    }

  }

?>
