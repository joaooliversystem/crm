<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxAdmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Funcoes_Model');
        $this->load->model('AdminSessao_Model');
        $this->load->model('FuncoesAdmin_Model');

        //   $this->load->model('Funcoes_Model');

    }

    public function setInTables(){
        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;


        if(isset($_POST['senha']) and !empty($_POST['senha'])):

            $_POST['senha'] = md5($_POST['senha']);

        endif;
        if(isset($_POST['id'])):



            $id = $_POST['id'];
            $table = $_POST['tabela'];
            unset($_POST['id']);
            unset($_POST['tabela']);
            $this->db->where('id',$id);
            $query = $this->db->update($table,$_POST);

            else:
                $table = $_POST['tabela'];
                unset($_POST['tabela']);

            $this->db->insert($table,$_POST);
            $query = $this->db->insert_id();
        endif;

        if($query > 0):
            echo 1;
            else:
            echo 0;
        endif;

    }

    public function deleteInTables(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;


        if(isset($_POST['id']) and !empty($_POST['id']) and isset($_POST['tabela']) and !empty($_POST['tabela'])):

            $this->db->where('id',$_POST['id']);
            $this->db->delete($_POST['tabela']);

            echo 1;
            else:

            echo 0;

        endif;
    }


}