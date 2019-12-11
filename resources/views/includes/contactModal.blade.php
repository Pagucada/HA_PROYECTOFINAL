<div id="contacto-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contacto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" value="" class="form-control" placeholder="Ingresar nombre completo...">
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="" class="form-control" placeholder="Ingresar Email...">
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea name="message" cols="40" class="form-control" placeholder="Ingresar mensaje..."></textarea>
                    </div><!-- /.form-group -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->