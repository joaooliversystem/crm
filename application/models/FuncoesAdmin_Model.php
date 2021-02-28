<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FuncoesAdmin_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->db->reconnect();
        @session_start();
    }


    public function ProjetosFuncionario($funcionario){

        return 0;

    }

    public function ProjetosCliente($cliente){

        return 0;

    }
    public function TextoConvertTable($tipo,$valor,$campo){

        if($tipo == 'permissoes'):

            if($valor == 't'):

                $valor = 'Todas as Permissões';

            endif;

         endif;


         if($tipo == 'documentos'):

             if($campo == 'tipo'):

                 $this->db->select('nome');
                 $this->db->from('documentos_tipos');
                 $this->db->where('id',$valor);
                 $get = $this->db->get();
                 $count = $get->num_rows();

                 if($count > 0):

                     $result = $get->result_array()[0];

                 $valor = $result['nome'];

                 endif;

              endif;

             if($campo == 'cadastro'):

                 $this->db->select('nome');
                 $this->db->from('cadastros');
                 $this->db->where('id',$valor);
                 $get = $this->db->get();
                 $count = $get->num_rows();

                 if($count > 0):

                     $result = $get->result_array()[0];

                 $valor = $result['nome'];

                 endif;

              endif;

        endif;


        if($tipo == 'banners'):

            if($campo == 'convertFoto'):

                    if(file_exists (base_url('web/banners/'.$valor))):

                    $valor = '<img src="'.base_url('web/banners/'.$valor).'" style="width:50px;">';

                    else:

                    $valor = '<img src="'.base_url('web/default.jpg').'" style="width:50px;">';

                    endif;

            endif;

            if($campo == 'posicaoOrdem'):

                 if($valor == 1):

                     $valor = '<span class="btn">Topo do Site</span>';

                 endif;

            endif;

        endif;



         return $valor;

    }


    public function values_fields($table,$field,$value){

        $result = '';


        if($value > 0):

            $this->db->select($field);
            $this->db->from($table);
            $this->db->where('id',$value);
            $get = $this->db->get();

            $count = $get->num_rows();

            if($count > 0):
                $valor = $get->result_array()[0];
                $result = 'value="'.$valor[$field].'"';
            endif;
        endif;
        if($table == 'administrador'):

            if($value > 0):

                $this->db->select($field);
                $this->db->from($table);
                $this->db->where('id',$value);
                $get = $this->db->get();

                $count = $get->num_rows();

                if($count > 0):
                    $valor = $get->result_array()[0];
                    $result = 'value="'.$valor[$field].'"';
                endif;
            endif;

        endif;

        if($table == 'cadastros'):

            if($value > 0):

                $this->db->select($field);
                $this->db->from($table);
                $this->db->where('id',$value);
                $get = $this->db->get();

                $count = $get->num_rows();

                if($count > 0):
                    $valor = $get->result_array()[0];
                    $result = 'value="'.$valor[$field].'"';
                endif;
            endif;

        endif;

        if($table == 'documentos_tipos'):

            if($value > 0):

                $this->db->select($field);
                $this->db->from($table);
                $this->db->where('id',$value);
                $get = $this->db->get();

                $count = $get->num_rows();

                if($count > 0):
                    $valor = $get->result_array()[0];
                    $result = 'value="'.$valor[$field].'"';
                endif;
            endif;

        endif;


        return $result;

    }

}


