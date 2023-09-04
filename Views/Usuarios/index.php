<?php include "Views/Templates/header.php"; ?>

<div class="row">
        <div class="col-md-12">
          <div class="tile" style="border-radius: 5px;padding: 10px;">
           <div class="tile-body">
               <div class="row invoice-info d-flex">
                <div class="col-8 text-left input-group" id="botonesContainer">
                </div>

                <div class="col-4 text-right d-flex">
               <h5 class="title_max-width992 "><i class="fa fa-list"></i>&nbsp;Lista de Usuarios/</h5>
               <button class="btn btn-primary btn-sm ml-auto" onclick="frmUsuario()">
                 <i class="fa fa-plus-circle" aria-hidden="true" style="color: white;"></i>&nbsp;Nuevo
               </button>
             </div>

              </div>
            </div>
           
          </div>
        </div>
      </div>


<div class="row">
    <div class="col-lg-12">
        <div class="tile clase_header" style="border-radius: 5px;padding: 10px;">
    <h5 class="title_max-width767 text-center" ><i class="fa fa-list"></i>&nbsp;Lista de Usuarios</h5>
            <div class="tile-body">
                <table class="display responsive nowrap table table-sm" id="tblUsuarios" style="width: 100%">
                   
                        <thead class="thead-dark">
                            <tr>
                                <th>N°</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
              
            </div>
        </div>
    </div>
</div>
<div id="nuevo_usuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="title">Nuevo Usuario</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="frmUsuario">
                                    <div class="form-group">
                                        <label for="usuario">Usuario</label>
                                        <input type="hidden" id="id" name="id">
                                        <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del usuario">
                                    </div>
                                    <div class="row" id="claves">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="clave">Contraseña</label>
                                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="confirmar">Confirmar Contraseña</label>
                                                <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar contraseña">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="button" onclick="registrarUser(event);" id="btnAccion">Registrar</button>
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="permisos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary">
                                <h5 class="modal-title text-white">Asignar Permisos</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="frmPermisos">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "Views/Templates/footer.php"; ?>