<form id="formAddInput" method="post" action="javascript:addEdit('pageAdministrador',1,'');">

    <?php $arr['tabela'] = 'administrador';   $arr['campo'] = 'administradores';  $this->load->view('admin/pages/ajax/acoes/z_files/topo',$arr);?>


    <?php

    if(isset($_GET['editar'])):
        $get = $_GET['editar'];
    echo '<input type="hidden" name="id" value="'.$_GET['editar'].'">';
    else:
        $get = 0;
    endif;

    ?>

    <input type="hidden" name="tabela" value="administrador">

    <div class="row">


        <div class="form-group col-6">
            <label class="col-2 pt-2">Nome <span class="text-danger">*</span></label>
            <input <?php echo $this->FuncoesAdmin_Model->values_fields('administrador','nome',$get);?> type="text" name="nome" class="form-control input-painel col-10" placeholder="Informe o Nome Completo" >
        </div>


        <div class="form-group col-6">
            <label class="col-2 pt-2">Login <span class="text-danger">*</span></label>
            <input <?php echo $this->FuncoesAdmin_Model->values_fields('administrador','usuario',$get);?> type="text" name="usuario" class="form-control input-painel col-10" placeholder="Usuario de Login">
        </div>



        <div class="form-group col-6">
            <label class="col-2 pt-2">E-mail <span class="text-danger">*</span></label>
            <input <?php echo $this->FuncoesAdmin_Model->values_fields('administrador','email',$get);?> type="email" name="email" class="form-control input-painel col-10" placeholder="Informe o E-mail">
        </div>

        <?php if(!isset($_GET['editar'])):?>
        <div class="form-group col-6">
            <label class="col-2 pt-2">Senha <span class="text-danger">*</span></label>
            <input type="password" name="senha" class="form-control input-painel col-10" placeholder="Informe a Senha">
        </div>


        <hr>
        <div class="clearfix"></div>
        <div class="col-12">

        <p> <b>Permissões:</b></p>

            <label class="form-group mr-2">
                <input  type="checkbox" name="permissoes" value="t" class=""> Todas as Permissões
            </label>

            <label class="form-group mr-6">
                <input type="checkbox" name="permissoes" value="as" class=""> Permissões de Assistente
            </label>

        </div>
        <?php endif;?>
    </div>

</form>