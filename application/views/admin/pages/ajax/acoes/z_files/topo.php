<div>
<a href="javascript:addEdit('<?php echo $campo;?>',1,'<?php echo $tabela;?>');" class="btn btn-outline-grey" style="border-radius: 0!important;"><i class="fa fa-check text-success"></i> Salvar</a>
<a href="javascript:addEdit('<?php echo $campo;?>',2,'<?php echo $tabela;?>');" class="btn btn-outline-grey" style="border-radius: 0!important;"><i class="fa fa-check-circle text-success"></i> Salvar e Criar Outro</a>
<a href="javascript:addEdit('<?php echo $campo;?>',3,'<?php echo $tabela;?>');" class="btn btn-outline-grey" style="border-radius: 0!important;"><i class="fa fa-check-circle text-success"></i> Salvar e Fechar</a>
<a href="<?php if(isset($_GET['editar'])):?>javascript:deletarItem('<?php echo $tabela;?>',<?php echo $_GET['editar'];?>,'<?php echo $campo;?>'); <?php else: ?>#<?php endif;?>" class="btn btn-outline-grey <?php if(!isset($_GET['editar'])): echo 'disabled'; endif;?>" style="border-radius: 0!important;"><i class="fa fa-minus-circle text-danger"></i> Apagar</a>
<a href="javascript:$('#adicionarEditarModal').modal('hide');" class="btn btn-outline-grey" style="border-radius: 0!important;"><i class="fa fa-times-circle text-danger"></i> Fechar</a>
</div>
<hr><br>