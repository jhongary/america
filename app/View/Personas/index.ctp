<div class="row">
  <div class="col-6 col-8 align-self-center">
    <h2 class="text-themecolor m-b-0 m-t-0">Listado de Conductores</h2>
  </div>
</div>


<div class="row">
  <div class="col-12">
    <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?>
   <div class="btn-group btn-group-sm pull-right">
     <a href='<?php echo $this->Html->url(array('action' => 'persona'));
     ?>' class="btn btn-rounded btn-block btn-warning" title="Adicionar nueva Material">NUEVO CONDUCTOR</a>
   </div>
    <?php endif ?>
 </div>
 <div class="col-12">
  <div class="card">
    <div class="card-body">
     <div class="table-responsive m-t-40">
      <table id="general-table" class="table table-bordered">
        <thead>
          <tr>
            <th>img</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>ci</th>
            <th>nro_Movil</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($personas as $pe): ?>
            <tr>
<!-- <img src="<?php echo $this->Html->webroot('img/fotos/' . $m['Mascota']['imagen']); ?>"
  style="width: 51px; height: 51px;"/> -->

  <td><img src="<?php echo $this->Html->webroot('img/fotos/'.$pe['Persona']['imagen']); ?>" style="width: 51px; height: 51px;"/> </td>
  <td>     <a href='<?php echo $this->Html->url(array('action' => 'ver',$pe['Persona']['id'])); ?>'> <?php echo $pe['Persona']['nombre']; ?>  </a></td>
  <td><?php echo $pe['Persona']['apellido']; ?></td>
  <td><?php echo $pe['Persona']['ci']; ?></td>
  <td><?php echo $pe['Auto']['nromov']; ?></td>
  <td class="text-center">
    <div class="btn-group btn-group-xs">
      <?php if ($pe['Persona']['auto_id'] != ''): ?>

       

        <a href='<?php echo $this->Html->url(array('action' => 'verauto',$pe['Persona']['auto_id'])); ?>' title="ver auto" class="btn btn-success btn-sm"><i class="fa fa-car"></i></a>



        <?php else: ?>
          <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?>
         <a href="javascript:" class="btn btn-info btn-sm" onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'auto',$pe['Persona']['auto_id'])) ?>'  );"><i class="fa fa-car" title="designar auto" ></i></a>
            <?php endif ?>


       <?php endif ?>



      <?php if ($this->Session->read('Auth.User.role') == 'Administrador'): ?>

       <a href='<?php echo $this->Html->url(array('action' => 'persona',$pe['Persona']['id'])); ?>' title="Editar Condutor" class="btn btn-secondary btn-sm"><i class="fa fa-pencil"></i></a>

       <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'eliminar',$pe['Persona']['id']),array('class' => 'btn btn-danger btn-sm','title' => 'Eliminar Condutor','confirm' => 'Esta seguro de eliminar el conductor '.$pe['Persona']['nombre'].'??','escape' => FALSE))?>
       <?php endif; ?>
     </div>
   </td>
 </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- END Example Content -->
</div>
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
<!-- END Example Block -->