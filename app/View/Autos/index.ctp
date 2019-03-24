<!-- END Blank Header -->
<!-- Example Block -->
<div class="col-md-6 col-8 align-self-center">
    <h2 class="text-themecolor m-b-0 m-t-0">Listado de Autos</h2>
</div>  

<div class="row">
    <div class="col-12">
        <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?>
     <div class="btn-group btn-group-sm pull-right">
         <a href="javascript:" onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'auto'));
          ?>');" class="btn btn-rounded btn-block btn-warning" title="Adicionar nueva Auto">NUEVO AUTO</a>
    </div>
    <?php endif ?>
</div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Example Content -->
                <div class="table-responsive m-t-40">
                <table id="general-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Nro_movil</th>
                                <th>Tipo</th>                                
                                <th>placa</th>
                                <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?> 
                                <th>accion</th>

                            <?php endif ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($autos as $au): ?>
                                <tr>
                                    <td><?php echo $au['Auto']['marca']; ?></td>
                                    <td><a href='<?php echo $this->Html->url(array('action' => 'ver',$au['Auto']['id'])); ?>'> <?php echo $au['Auto']['nromov']; ?></td>
                                     <td><?php echo $au['Auto']['tipo']; ?></td>
                                    <td><?php echo $au['Auto']['placa']; ?></td>         

                                    <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?>                           
                                    <td class="text-center">
                                                                           
                                            <a href="javascript:void(0)" onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'auto',$au['Auto']['id'])); ?>');" title="Editar Auto" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-pencil"></i></a>
                                            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'eliminar',$au['Auto']['id']),array('class' => 'btn btn-danger btn-sm','title' => 'Eliminar Auto','confirm' => 'Esta seguro de eliminar al usuario '.$au['Auto']['marca'].'??','escape' => FALSE))?>
                                        
                                    </td>
                                    <?php endif ?>

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