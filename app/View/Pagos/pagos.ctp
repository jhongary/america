<!-- END Blank Header -->
<!-- Example Block -->
<div class="col-md-6 col-8 align-self-center">
    <h2 class="text-themecolor m-b-0 m-t-0">Pagos del conductor <?php echo $persona['Persona']['nombre'] ?></h2>
</div>  

<div class="row">
    <div class="col-12">
     <div class="btn-group btn-group-sm pull-right">
         <a href="javascript:" onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'pago'));
          ?>');" class="btn btn-rounded btn-block btn-warning" title="Adicionar nueva Reactivo">NUEVO PAGO</a>
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
                                <th>Fecha</th>
                                <th>Monto</th>                                
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pagos as $pa): ?>
                                <tr>
                                    <td><?php echo $pa['Pago']['fecha']; ?></td>
                                    <td><?php echo $pa['Pago']['monto']; ?></td>                                    
                                    <td class="text-center">
                                        

                                            <i class="fa fa-pencil"></i></a>
                                            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'eliminar',$pa['Pago']['id']),array('class' => 'btn btn-danger btn-sm','title' => 'Eliminar Usuario','confirm' => 'Esta seguro de eliminar al usuario '.$us['User']['username'].'??','escape' => FALSE))?>
                                        
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