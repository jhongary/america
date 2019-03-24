<!-- END Blank Header -->
<!-- Example Block -->
<div class="col-md-6 col-8 align-self-center">
    <h2 class="text-themecolor m-b-0 m-t-0">Listado de Usuarios</h2>
</div>  

<div class="row">
    <div class="col-12">
     <div class="btn-group btn-group-sm pull-right">
         <a href="javascript:" onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'usuario'));
          ?>');" class="btn btn-rounded btn-block btn-warning" title="Adicionar nueva Reactivo">NUEVO USUARIO</a>
    </div>
</div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Example Content -->
                <div class="table-responsive m-t-40">
                <table id="general-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Username</th>
                                <th>Role</th>                                
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $us): ?>
                                <tr>
                                    <td><?php echo $us['User']['nombre']; ?></td>
                                    <td><?php echo $us['User']['username']; ?></td>
                                    <td><?php echo $us['User']['role']; ?></td>                                    
                                    <td class="text-center">
                                        
                                            <a href="javascript:void(0)" onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'usuario2',$us['User']['id'])); ?>');" title="Editar Usuario" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-pencil"></i></a>
                                            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'eliminar',$us['User']['id']),array('class' => 'btn btn-danger btn-sm','title' => 'Eliminar Usuario','confirm' => 'Esta seguro de eliminar al usuario '.$us['User']['username'].'??','escape' => FALSE))?>
                                        
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
                <!-- END Example Content -->
            </div>
        </div>
        <!-- END Example Content -->
    </div>
</div>
<!-- END Example Block -->

<?php $this->start('campo_js') ?>
<script src="<?php echo $this->webroot; ?>template/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<!--<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>-->
<script>
    $('#general-table').DataTable({
"oLanguage": {
      "sUrl": "<?php echo $this->webroot; ?>js/Spanish.json"
    }

    });
</script>
<?php $this->end() ?>