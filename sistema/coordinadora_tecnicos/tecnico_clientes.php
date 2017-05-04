<?php include('pagina_inicio.php'); ?>
  

  <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Clientes</h2>   
                        
                       
                    </div>
					
                </div>
                 <!-- /. ROW  -->
                 <hr />
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#nuevoCliente">
                              Nuevo
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Nuevo Cliente</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input class="form-control">
                                                    <label>Apellido</label>
                                                    <input class="form-control">
                                                    <label>Tipo Documento</label>
                                                    <select class="form-control">
                                                        <option>DNI</option>
                                                        <option>CUIT</option>
                                                        <option>CI</option>
                                                    </select>
                                                     <label>DNI</label>
                                                    <input class="form-control">
                                                     <label>Tel&eacute;fono</label>
                                                    <input class="form-control">
                                                    <label>E-mail</label>
                                                    <input class="form-control">
                                                    <label>Direcci&oacute;n</label>
                                                    <input class="form-control">
                                             </div>
                                            </form>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#Cliente</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Tipo Documento</th>
                                            <th>Documento</th>
                                            <th>Telefono</th>
                                            <th>Mail</th>
                                            <th>Direccion</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    
                                     <tbody>
                                    
                                     <tr class="odd gradeX">
                                            <td>123</td>
                                            <td>ENRIQUE</td>
                                            <td>WIEDENMANN</td>
                                            <td>DNI</td>
                                            <td>33914084</td>
                                            <td>4320-5844</td>
                                            <td>enrique.wiedenmann@gmail.com</td>
                                            <td>SAN MARTIN 4788 1 RO B</td>
                                            <td class="center">
                                                <!--Editar -->
                                                <a href="editar_registro.php?id=4532">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>&nbsp;
                                                <!--Eliminar -->
                                                <a href="javascript: eliminar_registro('4532','','')">
                                                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                         <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>ENRIQUE</td>
                                            <td>WIEDENMANN</td>
                                             <td>DNI</td>
                                            <td>33914084</td>
                                            <td >4320-5844</td>
                                            <td >enrique.wiedenmann@gmail.com</td>
                                            <td >SAN MARTIN 4788 1 RO B</td>
                                            <td class="center ">
                                                <!--Editar -->
                                                <a href="editar_registro.php?id=4532">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>&nbsp;
                                                <!--Eliminar -->
                                                <a href="javascript: eliminar_registro('4532','','')">
                                                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                         <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>ENRIQUE</td>
                                            <td>WIEDENMANN</td>
                                             <td>DNI</td>
                                            <td>33914084</td>
                                            <td >4320-5844</td>
                                            <td >enrique.wiedenmann@gmail.com</td>
                                            <td >SAN MARTIN 4788 1 RO B</td>
                                            <td class="center ">
                                                <!--Editar -->
                                                <a href="editar_registro.php?id=4532">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>&nbsp;
                                                <!--Eliminar -->
                                                <a href="javascript: eliminar_registro('4532','','')">
                                                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                         <tr class="odd gradeX">
                                            <td>2</td>
                                            <td>ENRIQUE</td>
                                            <td>WIEDENMANN</td>
                                             <td>DNI</td>
                                            <td>33914084</td>
                                            <td >4320-5844</td>
                                            <td >enrique.wiedenmann@gmail.com</td>
                                            <td >SAN MARTIN 4788 1 RO B</td>
                                            <td class="center ">
                                                <!--Editar -->
                                                <a href="editar_registro.php?id=4532">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>&nbsp;
                                                <!--Eliminar -->
                                                <a href="javascript: eliminar_registro('4532','','')">
                                                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                         <tr class="odd gradeX">
                                            <td>3</td>
                                            <td>ENRIQUE</td>
                                            <td>WIEDENMANN</td>
                                             <td>DNI</td>
                                            <td>33914084</td>
                                            <td >4320-5844</td>
                                            <td >enrique.wiedenmann@gmail.com</td>
                                            <td >SAN MARTIN 4788 1 RO B</td>
                                            <td class="center ">
                                                <!--Editar -->
                                                <a href="editar_registro.php?id=4532">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>&nbsp;
                                                <!--Eliminar -->
                                                <a href="javascript: eliminar_registro('4532','','')">
                                                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                         <tr class="odd gradeX">
                                            <td>4</td>
                                            <td>ENRIQUE</td>
                                            <td>WIEDENMANN</td>
                                             <td>DNI</td>
                                            <td>33914084</td>
                                            <td >4320-5844</td>
                                            <td >enrique.wiedenmann@gmail.com</td>
                                            <td >SAN MARTIN 4788 1 RO B</td>
                                            <td class="center ">
                                                <!--Editar -->
                                                <a href="editar_registro.php?id=4532">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>&nbsp;
                                                <!--Eliminar -->
                                                <a href="javascript: eliminar_registro('4532','','')">
                                                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                
          
         
        </div>
               
    </div>
	
	
	
	<?php include('pagina_fin.php') ?>