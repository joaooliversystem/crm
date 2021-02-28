<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Funcoes_Model');
        $this->load->model('FuncoesAdmin_Model');
        $this->load->model('AdminSessao_Model');

        //$this->load->model('Funcoes_Model');

    }


    public function logout(){
        if($this->AdminSessao_Model->session_panel() == true):
            $this->AdminSessao_Model->destroy_session_panel();
        endif;
        header("Location:".base_url('painel'));
        }

    public function index(){


        if($this->AdminSessao_Model->session_panel() == true):

        $this->load->view('admin/cabecalho/topo');
        $this->load->view('admin/index');
        $this->load->view('admin/cabecalho/rodape');

        else:

            if(isset($_POST['loginKey']) and isset($_POST['usuario']) and !empty($_POST['usuario']) and isset($_POST['senha']) and !empty($_POST['senha'])):

                $this->AdminSessao_Model->logar($_POST);

            endif;

            $this->load->view('admin/acesso');

        endif;

    }


}