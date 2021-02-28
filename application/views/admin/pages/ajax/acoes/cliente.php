<form id="formAddInput" method="post" action="javascript:addEdit('pageAdministrador',1,'');">

    <?php $arr['tabela'] = 'clientes';   $arr['campo'] = 'clientes';  $this->load->view('admin/pages/ajax/acoes/z_files/topo',$arr);?>


    <?php

    if(isset($_GET['editar'])):
        $get = $_GET['editar'];
        echo '<input type="hidden" name="id" value="'.$_GET['editar'].'">';
    else:
        $get = 0;
    endif;

    ?>

    <input type="hidden" name="tabela" value="clientes">

    <div class="row">


        <div class="form-group col-6">
            <label class="col-2 pt-2">Nome <span class="text-danger">*</span></label>
            <input <?php echo $this->FuncoesAdmin_Model->values_fields('clientes','nome',$get);?> type="text" name="nome" class="form-control input-painel col-10" placeholder="Informe o Nome Completo" >
        </div>


        <div class="form-group col-6">
            <label class="col-2 pt-2">CPF <span class="text-danger">*</span></label>
            <input <?php echo $this->FuncoesAdmin_Model->values_fields('clientes','cpf_cnpj',$get);?> type="text" name="cpf_cnpj" class="form-control input-painel col-10" placeholder="Usuario de Login">
        </div>



        <div class="form-group col-6">
            <label class="col-2 pt-2">E-mail <span class="text-danger">*</span></label>
            <input <?php echo $this->FuncoesAdmin_Model->values_fields('clientes','email',$get);?> type="email" name="email" class="form-control input-painel col-10" placeholder="Informe o E-mail">
        </div>

        <?php if(!isset($_GET['editar'])):?>
            <div class="form-group col-6">
                <label class="col-2 pt-2">Senha <span class="text-danger">*</span></label>
                <input type="text" name="pass" class="form-control input-painel col-10" placeholder="Informe a Senha" value="<?php echo rand();?>">
            </div>

        <?php else:?>
        <div class="form-group col-6">
        </div>

        <?php endif;?>
            <hr>
            <div class="clearfix"></div>
                <div class="form-group col-2">
                    <label >CEP</label><br>
                    <input <?php echo $this->FuncoesAdmin_Model->values_fields('clientes','cep',$get);?> type="text" name="cep" class="form-control input-painel" placeholder="Informe o CEP">
                </div>

                <div class="form-group col-3">
                    <label>Rua</label><br>
                    <input <?php echo $this->FuncoesAdmin_Model->values_fields('clientes','rua',$get);?> type="text" name="rua" class="form-control input-painel" placeholder="Informe a Rua">
                </div>

            <div class="form-group col-3">
                <label>Bairro</label>
                <input <?php echo $this->FuncoesAdmin_Model->values_fields('clientes','bairro',$get);?> type="text" name="bairro" class="form-control input-painel" placeholder="Informe o Bairro">
            </div>

            <div class="form-group col-2">
                <label >Estado</label><br>
                <input <?php echo $this->FuncoesAdmin_Model->values_fields('clientes','estado',$get);?> type="text" name="cidade" class="form-control input-painel" placeholder="Informe o Estado">
            </div>

            <div class="form-group col-2">
                <label >Cidade</label><br>
                <input <?php echo $this->FuncoesAdmin_Model->values_fields('clientes','cidade',$get);?> type="text" name="estado" class="form-control input-painel" placeholder="Informe a Cidade">
            </div>

    </div>

</form>