

<?php echo $this->Form->create('Persona',array('action' => 'guardaauto','id' => 'formuauto','enctype' => 'multipart/form-data'),array('type' => 'file'));?>
<div class="modal-header">
  <h3>Autos</h3>
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
</div>

<div class="modal-body">
  <?php echo $this->Form->hidden('Persona.id',array('value' => $idPersona));?>
  <div class="form-group"> 
    <label class="control-label">Nombre</label>

    <?php echo $this->Form->hidden('id');?>
    <?php echo $this->Form->select('auto_id', $autos, array('class' => 'select2 form-control','id'=>'requ','empty' => 'buscar por placa','style' => 'width: 100%;')); ?>
  </div>
  <div class="form-group">
    <table class="table table-bordered">
      <?php foreach($autos_reg as $auto): ?>
      <tr>
        <td><?= $auto['Auto']['modelo']?></td>
        <td><?= $auto['Auto']['placa'].' ('.$auto['Auto']['nromov'].')' ?></td>
        <td>
          <a href="javascript:" onclick="eliminaauto(<?php echo $auto['AutosPersona']['id']?>);">Eliminar</a>
        </td>
      </tr>
      <?php endforeach;?>
    </table>
  </div>

  <div cl>
    
  </div>
  
</div>
<div class="modal-footer">
  <?php echo $this->Form->submit('Adicionar',array('class' => 'btn btn-primary'));?>
  <?php echo $this->Form->end()?>
</div>

<script type="text/javascript">
  $('#formuauto').submit(function(e){
    datos = $(this).serialize();
    $.ajax({
      url: '<?php echo $this->Html->url(array('action' => 'autos',$idPersona)) ?>',
      type: 'POST',
      data: datos,
      success: function(data){
        cargarmodal('<?php echo $this->Html->url(array('action' => 'autos',$idPersona)) ?>'  );
      }
    });
    e.preventDefault();
  });

  function eliminaauto(idRelacion){
    $.ajax({
      url: '<?php echo $this->Html->url(array('action' => 'eliminaauto')) ?>/'+idRelacion,
      type: 'GET',
      success: function(data){
        cargarmodal('<?php echo $this->Html->url(array('action' => 'autos',$idPersona)) ?>'  );
      }
    });


    
  }
</script>