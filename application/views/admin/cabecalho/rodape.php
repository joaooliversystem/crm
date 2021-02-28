
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Leilões do Brabo <?php date('Y');?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Clique em "Sair do Sistema" se estiver pronto para sair do Painel Administrativo.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="<?php echo base_url('LogoutAdmin?key='.md5(date('c')));?>">Sair do Sistema</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/admin/')?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/admin/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/admin/')?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/admin/')?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/admin/')?>js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url('assets/admin/')?>js/demo/chart-pie-demo.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="modal fade" data-backdrop="static" id="adicionarEditarModal" tabindex="-1" role="dialog" aria-labelledby="adicionarEditarModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="border-radius: 0!important;">
        <div class="modal-content" style="border-radius: 0!important;">
            <div class="modal-header" style="padding: 0.4em!important;background: #2653d4;border-radius: 0!important;color: white;">
                <h6 class="modal-title" id="tituloModal"></h6>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="addEditBody">
                ...
            </div>

        </div>
    </div>
</div>
<script>


function view(page){
  $("#contentPage").html("<img src='<?php echo base_url('assets/')?>preloader.gif' style='float: left;width: 100%;'>");
  $("#contentPage").load("<?php echo base_url('AjaxAdminPages/LocatePage?id=');?>"+page);

}

function selectElement(table,id){

    $(".elements"+table+"tr").css("background","white");
    $("#"+table+"element"+id).css("background","rgb(255, 229, 170)");

}


</script>
<script>
    function adicionar(titulo,page){

        $("#addEditBody").html("<img src='<?php echo base_url('assets/')?>preloader.gif' style='float: left;width: 100%;'>");

        $("#addEditBody").load("<?php echo base_url('AjaxAdminPages/LocatePageAcoes?id=');?>"+page);


        $("#tituloModal").text(titulo);
        $("#adicionarEditarModal").modal('show');
    }


    function editar(titulo,page,edit){


        $("#addEditBody").html("<img src='<?php echo base_url('assets/')?>preloader.gif' style='float: left;width: 100%;'>");

        $("#addEditBody").load("<?php echo base_url('AjaxAdminPages/LocatePageAcoes?id=');?>"+page+"&&editar="+edit);

        $("#tituloModal").text(titulo);
        $("#adicionarEditarModal").modal('show');
    }

</script>

<script>

    function addEdit(fieldup,tipo,tabela){

       var form =  $("form").serialize();
        $.ajax({
            url : "<?php echo base_url('sendBuildAdmin')?>",
            type : 'post',
            data : form,
            beforeSend : function(){
                $("#resultado").html("ENVIANDO...");
            }
        })
            .done(function(msg){
                if(msg == 1){


                    if(tipo == 2){
                        adicionar('Adicionar Novo',tabela);
                    }else{
                        Swal.fire({
                            icon: 'success',
                            title: 'Salvo com Sucesso',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                    if(tipo == 3){
                        $('.modal').modal('hide');

                    }
                    view(fieldup);

                }else{

                    Swal.fire({
                        icon: 'error',
                        title: msg,
                        showConfirmButton: false,
                        timer: 500
                    })
                    alert();
                }

            })
            .fail(function(jqXHR, textStatus, msg){
                alert(msg);
            });
    }

</script>

<script>

    function deletarItem(tabela,id,fieldup){
        Swal.fire({
                title: 'Tem certeza que deseja delatar esse item?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: `Confirmar`,
            denyButtonText: `Cancelar`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url : "<?php echo base_url('deletePostItem')?>",
                    type : 'post',
                    data : {
                        id : id,
                        tabela :tabela
                    }
                })
                    .done(function(msg){

                        if(msg == 1){
                            Swal.fire('Deletado com Sucesso!', '', 'success');
                            $('.modal').modal('hide');
                            view(fieldup);


                        }else{
                            Swal.fire('Ocorreu um erro, tente novamente!', '', 'error')

                        }
                    })
            } else if (result.isDenied) {
                Swal.fire('Ocorreu um erro, tente novamente!', '', 'error')
            }
        })

    }

</script>
</body>

</html>