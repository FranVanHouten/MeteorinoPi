<div class="modal fade" id="update" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fas fa-edit"></i> Actualizar Datos</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="POST" id="update" class="needs-validation" action="#" novalidate>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="usuario"> Usuario</label>
                                <input type="text" name="id" value=""/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email"> Email</label>
                                <input type="text" name="id" value=""/>
                            </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Guardar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////////////////-->
<script type="text/javascript">
    $('#update').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    $(e.currentTarget).find('input[name="id"]').val(id);
});
</script>