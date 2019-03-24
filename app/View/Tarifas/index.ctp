<!-- END Blank Header -->
<!-- Example Block -->
<div class="col-md-6 col-8 align-self-center">
    <h2 class="text-themecolor m-b-0 m-t-0">Listado de Tarifas</h2>
</div>  

<div class="row">
    <div class="col-12">
        <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?>
     <div class="btn-group btn-group-sm pull-right">
         <a href="javascript:" onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'tarifa'));
          ?>');" class="btn btn-rounded btn-block btn-warning" title="Adicionar nueva Auto">NUEVA TARIFA</a>
    </div>
<?php endif?>
</div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Example Content -->
                <div class="table-responsive m-t-40">
                <table id="general-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="busqda">Inicio</th>
                                <th class="busqda">Destino</th>
                                <th class="busqda">Diurno</th>                                
                                <th class="busqda">Nocturno</th>
                                <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?>
                                <th>accion</th>
                            <?php endif?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tarifas as $ta): ?>
                                <tr>
                                    <td><?php echo $ta['Tarifa']['inicio']; ?></td>
                                    <td><?php echo $ta['Tarifa']['destino']; ?></td>
                                     <td><?php echo $ta['Tarifa']['diurno']; ?></td>
                                    <td><?php echo $ta['Tarifa']['nocturno']; ?></td> 

                                    <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?>                                   
                                    <td class="text-center">
                                                                           
                                            <a href="javascript:void(0)" onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'tarifa',$ta['Tarifa']['id'])); ?>');" title="Editar Tarifa" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-pencil"></i></a>
                                            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'eliminar',$ta['Tarifa']['id']),array('class' => 'btn btn-danger btn-sm','title' => 'Eliminar Tarifa','confirm' => 'Esta seguro de eliminar la Tarifa '.$ta['Tarifa']['destino'].'??','escape' => FALSE))?>
                                        
                                    </td>
                                <?php endif?>
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
        order: []
    });

    $('#general-table thead th.busqda').each(function () {
            var title = $('#general-table thead th').eq($(this).index()).text();
            $(this).html('<input type="text" class="form-control" placeholder="Buscar ' + title + '" />');
        });

      
</script>

<?php $this->end() ?>