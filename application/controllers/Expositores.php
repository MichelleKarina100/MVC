<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expositores extends CI_Controller {

  public function __construct(){
      parent::__construct();
      $this->load->model("expositor");
      $this->load->library("Grocery_CRUD");
      $this->load->database();
  }


  public function ingresar(){
    $crud=new Grocery_CRUD();
    $crud->set_table("ventas");
    $crud->set_language("spanish");
    $crud->field_type("tipo","dropdown",array("CPU"=>"CPU","LAPTOP"=>"LAPTOP"));
    $output=$crud->render();
    $this->load->view('ingresar',$output);
  }
}
