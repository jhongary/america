<link href="<?php echo $this->webroot; ?>template/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<div class="row">
    <div class="col-6 col-8 align-self-center">
        <h2 class="text-themecolor m-b-0 m-t-0">Conductor</h2>
    </div>
</div>
<!-- END Modal Header -->
<!-- Modal Body -->
<?php echo $this->Form->create('Persona', array('action' => 'guarda_persona', 'class' => 'form-horizontal form-bordered','enctype'=>'multipart/form-data')); ?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label class="control-label">Nombre</label>
                    <?php echo $this->Form->hidden('id'); ?>
                    <?php echo $this->Form->text('nombre', array('class' => 'form-control', 'placeholder' => 'Ingrese los nombre del Conductor', 'required')); ?>

                </div>
                <div class="col-md-6">                
                    <label class="control-label">Apellido</label>
                    <?php echo $this->Form->text('apellido', array('class' => 'form-control', 'placeholder' => 'Ingrese los Apellidos del Conductor', 'required')); ?>

                </div>              

            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label class="control-label">CI</label>
                    <?php echo $this->Form->text('ci', array('class' => 'form-control', 'placeholder' => 'Ingrese la C.I.', 'required','type' => 'number')); ?>

                </div>
                
                
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label class="control-label">Telefono</label>
                    <?php echo $this->Form->text('telefono', array('class' => 'form-control', 'placeholder' => 'Ingrese telefono','type' => 'number')); ?>

                </div>
                <div class="col-md-6">                
                    <label class="control-label">Celular</label>
                    <?php echo $this->Form->text('celular', array('class' => 'form-control', 'placeholder' => 'Ingrese su celular','type'=>'number')); ?>                
                </div> 

            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label class="control-label">Fecha Vencimiento C.I.</label>
                    <?php echo $this->Form->text('fecha_ci', array('class' => 'form-control', 'placeholder' => 'Ingrese Vencimiento C.I.','type'=>'date')); ?>

                </div>
                <div class="col-md-4">                
                    <label class="control-label">Fecha Vencimiento Licencia</label>
                    <?php echo $this->Form->text('fecha_lic', array('class' => 'form-control', 'placeholder' => 'Fecha Vencimiento Licencia','type'=>'date')); ?>                
                </div> 
                <div class="col-md-4">                
                    <label class="control-label">Fecha Incorpora</label>
                    <?php echo $this->Form->text('fecha_inco', array('class' => 'form-control','value' => date('Y-m-d'), 'placeholder' => 'Fecha Incorporacion','type'=>'date')); ?>                
                </div>                
            </div><br>
            <div class="row">
                <div class="col-md-6">                
                    <label class="control-label">Domicilio</label>
                    <?php echo $this->Form->text('domicilio', array('class' => 'form-control', 'placeholder' => 'Ingrese su domicilio')); ?>                
                </div> 
                <div class="col-md-3">
                    <label class="control-label">Zona</label>
                    <?php echo $this->Form->text('zona', array('class' => 'form-control', 'placeholder' => 'Ingrese la zona', 'required')); ?>
                </div>

                <div class="col-md-3">                
                    <label class="control-label">Estado</label>
                    <?php echo $this->Form->select('estado',array('Habilitado'=>'Habilitado','Deshabilitado'=>'Deshabilitado'), array('class' => 'form-control', 'placeholder' => 'Ingrese su estado')); ?>                
                </div>                
            </div><br>
            <div class="row">
                <div class="col-md-6">                
                    <label class="control-label">Imagen del conductor</label>
                    <?php echo $this->Form->file('imagen_up', array('class' => 'form-control', 'accept' => 'image/*'));?>
                </div>  
                <div class="col-md-6">                
                    <label class="control-label">Categoria</label>
                    <?php echo $this->Form->text('categoria', array('class' => 'form-control', 'placeholder' => 'Ingrese su categoria Licencia')); ?>                
                </div>                
            </div> <br>
            <div class="row">
                <div class="col-md-12">                
                    <label class="control-label">Motivo baja al conductor</label>
                    <?php echo $this->Form->text('motivo_baja', array('class' => 'form-control', 'placeholder' => '  ')); ?>                
                </div>  
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <label class="control-label" ">Seleccione auto</label>

                            <?php echo $this->Form->select('auto_id', $autos, array('class' => 'select2 form-control','id'=>'requ','empty' => 'buscar por placa','style' => 'width: 100%;')); ?>
                        </div>
                        
                    </div>

                </div>
            </div>          


            <div class="modal-footer">
                <a href='<?php echo $this->Html->url(array('action' => 'index'));
                ?>'> <button type="button" class="btn btn-white waves-effectt" data-dismiss="modal">Cerrar </button></a>
                
                <?php echo $this->Form->submit('Guardar',array('class' => 'btn btn-block btn-danger'));?>

            </div>


        </div></div></div>

        <?php echo $this->Form->end(); ?>
        <!-- END Modal Body -->
       

       <!--  <script src="america/app/webroot/template/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script> -->
       
       
<?php $this->start('campo_js') ?>

        <script>


            $('.select2').select2();    

            
    </script>
    <?php $this->end() ?>