<?php

    class Expositor extends CI_Model{

      public function __construct(){
          parent::__construct();
      }
 
      public function consultarExpositoresPorGenero($genero){
        $this->db->where("genero_exp",$genero);
        $listadoExpositores=$this->db->get("expositor");
        if($listadoExpositores->num_rows()>0){
          return $listadoExpositores;
        }else{
          return false;
        }
      }

    }
