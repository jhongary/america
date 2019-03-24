<!-- Modal Header -->
<div class="modal-header">
<h2 class="modal-title"><i class="fa fa-user"></i>Auto</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span>
    </button>
</div><!-- END Modal Header -->

<!-- Modal Body -->
<?php echo $this->Form->create('Auto',array('action' => 'guarda_auto','class' => 'form-horizontal form-bordered','enctype'=>'multipart/form-data'));?>
<div class="modal-body">             

    <div class="form-group"> 
        <label class="control-label">Marca</label>

        <?php echo $this->Form->hidden('id');?>
        <?php echo $this->Form->text('marca', array('class' => 'form-control', 'placeholder' => 'ingrese la marca', 'required')); ?>
    </div>

    <div class="form-group"> 
        <label class="control-label">Modelo</label>

        <?php echo $this->Form->text('modelo', array('class' => 'form-control', 'placeholder' => 'Ingrese el modelo', 'required')); ?>
    </div>
    <div class="form-group"> 
        <label class="control-label">Tipo</label>

        <?php echo $this->Form->text('tipo', array('class' => 'form-control', 'placeholder' => 'Ingrese el tipo de movil', 'required')); ?>
    </div>
    <div class="form-group"> 
        <label class="control-label">Color</label>

        <?php echo $this->Form->text('color', array('class' => 'form-control', 'placeholder' => 'Ingrese el color', 'required')); ?>
    </div>
    <div class="form-group"> 
        <label class="control-label">Placa</label>

        <?php echo $this->Form->text('placa', array('class' => 'form-control', 'placeholder' => 'Ingrese la placa', 'required')); ?>
    </div>
    <div class="form-group"> 
        <label class="control-label">Nro movil</label>

        <?php echo $this->Form->text('nromov', array('class' => 'form-control', 'placeholder' => 'Ingrese la nro movil', 'required')); ?>
    </div>
    <div class="form-group"> 
        <label class="control-label">ayo fabricacion</label>

        <?php echo $this->Form->text('fabricacion', array('class' => 'form-control', 'placeholder' => 'Ingrese el a;o fabricacion', 'required','accept' => 'image/*')); ?>
    </div>
    <div class="form-group"> 
        <label class="control-label">imagen</label>

        <?php echo $this->Form->file('imagen_up', array('class' => 'form-control', 'placeholder' => 'Ingrese la imagen', 'required')); ?>
    </div>

</div>


<div class="modal-footer">

    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-danger btn-primary">Guardar</button>
    
</div>
<?php echo $this->Form->end();?>

<!-- END Modal Body -->