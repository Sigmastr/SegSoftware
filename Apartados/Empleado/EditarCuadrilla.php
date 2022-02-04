<div class="modal fade" id="crud<?php echo $filas['id_personal']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Edición Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../CRUD/UPDATE_tipocuadrilla.php">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos de cupos de la cuadrilla</h4>
                    <div class="form-row">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $filas['id_personal'] ?>">
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Tipo de cuadrilla</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="TipoCuadrilla" id="TipoCuadrilla" placeholder="Solitario/duo" value="<?php echo $filas['Tipo_cuadrilla'] ?>">
                            </div>

                        </div>
                        <div class=" form-group col-md-6">
                            <label for="inputNombreEmpleado">Nombre del grupo de trabajo:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="Alias" id="Alias" placeholder="Grupo 1, Electricistas" value="<?php echo $filas['Alias'] ?>">
                            </div>

                        </div>
                        <!-- Estado de cuadrilla creado por defecto como desocupado -->

                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
            </form>


        </div>

    </div>
</div>