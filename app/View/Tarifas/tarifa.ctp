<!-- Modal Header -->
<div class="modal-header">
<h2 class="modal-title"><i class="fa fa-user"></i>Tarifa</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span>
    </button>
</div><!-- END Modal Header -->

<!-- Modal Body -->
<?php echo $this->Form->create('Tarifa',array('action' => 'guarda_tarifa','class' => 'form-horizontal form-bordered','enctype'=>'multipart/form-data'));?>
<div class="modal-body">             

    <div class="form-group"> 
        <label class="control-label">Inicio</label>

        <?php echo $this->Form->hidden('id');?>
        <?php echo $this->Form->text('inicio', array('class' => 'form-control', 'placeholder' => 'ingrese la marca', 'required')); ?>
    </div>

    <div class="form-group"> 
        <label class="control-label">Destino</label>

        <?php echo $this->Form->text('destino', array('class' => 'form-control', 'placeholder' => 'Ingrese el modelo', 'required')); ?>
    </div>
    <div class="form-group"> 
        <label class="control-label">Diurno</label>

        <?php echo $this->Form->text('diurno', array('class' => 'form-control', 'placeholder' => 'Ingrese el tipo de movil', 'required')); ?>
    </div>
    <div class="form-group"> 
        <label class="control-label">Nocturno</label>

        <?php echo $this->Form->text('nocturno', array('class' => 'form-control', 'placeholder' => 'Ingrese el color', 'required')); ?>
    </div>

</div>


<div class="modal-footer">

    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-danger btn-primary">Guardar</button>
    
</div>
<?php echo $this->Form->end();?>

<!-- END Modal Body -->