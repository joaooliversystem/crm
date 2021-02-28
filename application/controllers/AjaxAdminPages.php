<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxAdminPages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Funcoes_Model');
        $this->load->model('AdminSessao_Model');
        $this->load->model('FuncoesAdmin_Model');

        //   $this->load->model('Funcoes_Model');

    }


    public function LocatePage(){
        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/'.$_GET['id']);

    }


    public function LocatePageAcoes(){
        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/'.$_GET['id']);

    }



    public function Add_administrador(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/administrador');


    }

    public function Add_cadastro(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/cadastro');


    }
    public function Add_documento(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/documento');


    }    public function Add_tipodocumento(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/tipodocumento');
    }
  public function Add_banner(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/banner');
    }
  public function Add_leilao(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/leilao');
    }

    public function Add_lotes(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/lotes');
    }

    public function Add_categorias(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/categorias');
    }


    public function Add_comitentes(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/comitentes');
    }


    public function Add_termosnotas(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/termosnotas');
    }


    public function Add_logoicone(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/logoicone');
    }

    public function Add_google(){

        if($this->AdminSessao_Model->session_panel() == false):  header("Location:".base_url('painel')); endif;

        $this->load->view('admin/pages/ajax/acoes/google');
    }



}