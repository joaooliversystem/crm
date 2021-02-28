<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
    </div>
    <div class="card-body">
        <div class="acoes">
            <button type="button" class="btn btn-sm btn-default btn-outline-dark" onclick="adicionar('Adicionar Clientes','cliente');"><i
                    class="icon mr5 fa fa-plus-circle c_verde"></i> Novo Cliente
            </button>

            <button type="button" class="btn btn-sm btn-default btn-outline-dark" disabled="disabled" onclick="views(13, 'edit', '')"><i
                    class="icon mr5 fa fa-edit (alias) c_333"></i> Alterar
            </button>
            <button type="button" class="btn btn-sm btn-default btn-outline-dark" disabled="disabled"
                    onclick="if(confirm('Deseja realmente deletar os itens selecionados?'))views(13, 'delete')"><i
                    class="icon mr5 fa fa-minus-circle c_vermelho"></i> Apagar
            </button>
            <form class="float-right">
                <input type="text" class="form-control form-control-sm" placeholder="Realizar uma Busca">
            </form>
            <a class="btn btn-sm btn-outline-primary float-right mr-4"><i class="fa fa-search"></i> Busca Avançada</a>

            <br>
            <br>
            <div class="clear"></div>
        </div>
        <div class="table-responsive" style="text-align: center;">
            <table class="table table-bordered small">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Projetos</th>
                    <th>Acões</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Projetos</th>
                    <th>Acões</th>
                </tr>
                </tfoot>
                <tbody>

                <?php
                $this->db->from('clientes');
                $this->db->order_by('id','desc');
                $this->db->limit(10,0);
                $get = $this->db->get();

                $count = $get->num_rows();
                if($count > 0):
                    $valor = $get->result_array();

                    foreach ($valor as $value){
                        ?>
                        <tr class="elementsadmintr" id="adminelement<?php echo $value['id'];?>" style="cursor:pointer;" onclick="selectElement('admin',<?php echo $value['id'];?>);" ondblclick="editar('Clientes','cliente',<?php echo $value['id'];?>)">
                            <td><?php echo $value['id'];?></td>
                            <td><?php echo $value['nome'];?></td>
                            <td><?php echo $value['cpf_cnpj'];?></td>
                            <td><?php echo $value['email'];?></td>
                            <td><?php echo $this->FuncoesAdmin_Model->ProjetosCliente($value['id']);?></td>
                            <td><a href="mudarSenhaAdmin(<?php echo $value['id'];?>);" data-toggle="tooltip" data-placement="top" title="Mudar a Senha"><i class="fas fa-key"></i></a></td>
                        </tr>

                    <?php } else:?>
                    <tr class="elementsadmintr" id="adminelement1" style="cursor:pointer;" onclick="selectElement('admin',1);" ondblclick="editAdminTable()">
                        <td>-- --</td>
                        <td>-- --</td>
                        <td>-- --</td>
                        <td>-- --</td>
                        <td>-- --</td>
                        <td>-- --</td>

                    </tr>


                <?php endif;?>
                </tbody>
            </table>
            <a class="btn btn-sm btn-outline-primary center-align justify-content-center" style="text-align: center;right: 50%;" align="center">Carregar Mais</a>

        </div>
    </div>
</div>