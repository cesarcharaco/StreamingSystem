<div class="modal fade" id="create_clientes">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="nav-icon fa fa-shopping-basket"></i> Crear Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" method="POST" data-parsley-validate name="clienteForm" id="clienteForm">
        <div class="modal-body">
          <p align="center"><small>Todos los campos <b style="color: red;">*</b> son requeridos.</small></p>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="nombres">Nombres <b style="color: red;">*</b></label>
                <input type="text" name="nombres" id="nombres" class="form-control" required="required" placeholder="Ingrese los nombres del cliente" onkeyup="this.value = this.value.toUpperCase();">
              </div>
              @error('nombres')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="apellidos">Apellidos <b style="color: red;">*</b></label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" required="required" placeholder="Ingrese los apellidos del cliente" onkeyup="this.value = this.value.toUpperCase();">
              </div>
              @error('apellidos')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="celular">Celular <b style="color: red;">*</b></label>
                <input type="text" name="celular" id="celular" class="form-control" required="required" placeholder="Ingrese el celular del cliente" onkeyup="this.value = this.value.toUpperCase();">
              </div>
              @error('celular')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="direccion">Direcci??n <b style="color: red;">*</b></label>
                <textarea name="direccion" id="direccion" class="form-control" required="required" placeholder="Ingrese la direcci??n del cliente" onkeyup="this.value = this.value.toUpperCase();" rows="6" cols="10"></textarea>
              </div>
              @error('direccion')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="localidad">Localidad <b style="color: red;">*</b></label>
                <textarea name="localidad" id="localidad" class="form-control" required="required" placeholder="Ingrese la localidad del cliente" onkeyup="this.value = this.value.toUpperCase();" rows="6" cols="10"></textarea>
              </div>
              @error('localidad')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
          <button type="submit" id="SubmitCreateCliente" class="btn btn-info"><i class="fa fa-save"></i> Registrar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->