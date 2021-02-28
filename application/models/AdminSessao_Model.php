<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminSessao_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->db->reconnect();
        @session_start();
    }



    public function session_panel(){
        if(isset($_SESSION['acesso_user']) and !empty($_SESSION['acesso_user']) and isset($_SESSION['acesso_pass']) and !empty($_SESSION['acesso_pass'])):

            return true;

        else:

            return false;

        endif;

    }

    public function destroy_session_panel(){
        unset($_SESSION['acesso_user']);
        unset($_SESSION['acesso_pass']);
    }

    public function logar($post){


        $this->db->select('id,usuario,senha,permissoes');
        $this->db->from('administrador');
        $this->db->where('usuario',$post['usuario']);
        $this->db->where('senha',md5($post['senha']));
        $get = $this->db->get();
        $count = $get->num_rows();

        if($count > 0):

            $result = $get->result_array()[0];

                 $_SESSION['acesso_id'] = $result['id'];
                 $_SESSION['acesso_user'] = $post['usuario'];
                 $_SESSION['acesso_pass'] = md5($post['senha']);

            header("Location:".base_url('painel'));

            else:

                header("Location:".base_url('painel?error=Usuario ou Senha Incorretos'));

        endif;



    }


}


