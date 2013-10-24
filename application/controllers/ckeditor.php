<?php
 
if (!defined('BASEPATH')) {
 
    include 'index.html';
 
    exit;
 
}
 
class Ckeditor extends CI_Controller {
 
    public function __construct() {
 
        parent::__construct();
 
    }
 
    public function index() {
 
    $this->editor();
 
    }
 
    public function editor(){
 
    $this->load->view("editor_view");
 
    }
 
}
 
?>