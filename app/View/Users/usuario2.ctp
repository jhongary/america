<div class="modal-header">
   <h2 class="modal-title"><i class="fa fa-user"></i></i>Informacion de Usuario</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span>
    </button>
</div>



<?php echo $this->Form->create('User', array('action' => 'guarda_usuario')); ?>
<div class="modal-body">


        <div class="form-group">
            <label for="recipient-name" class="control-label">Nombre</label>

            <?php echo $this->Form->hidden('User.id'); ?>
            <?php echo $this->Form->hidden('User.role', array('value' => 'Administrador')) ?>
            <?php //echo $this->Form->hidden('User.edificio_id', array('value' => $idEdificio)) ?>
            <?php echo $this->Form->text('User.nombre', array('id' => 'recipient-name', 'class' => 'form-control', 'placeholder' => 'Ingrese el nombre de Propietario', 'required')); ?>

        </div>


        <div class="form-group">
            <label for="recipient-name" class="control-label">Telefonos</label>

            <?php echo $this->Form->text('User.telefono', array('id' => 'recipient-name', 'class' => 'form-control', 'placeholder' => 'Ingrese los telefonos')); ?>

        </div>
        <div class="form-group">
            <label for="recipient-name" class="control-label">Direccion</label>

            <?php echo $this->Form->text('User.direccion', array('id' => 'recipient-name', 'class' => 'form-control', 'placeholder' => 'Ingrese la direccion')); ?>

        </div>

        <div class="form-group">
            <label for="recipient-name" class="control-label">E-mail</label>

            <?php echo $this->Form->text('User.email', array('id' => 'recipient-name', 'class' => 'form-control', 'type' => 'email', 'placeholder' => 'Ingrese correo electronico')); ?>

        </div>

        <div class="form-group">
            <label for="recipient-name" class="control-label">Tipo de usuario</label>

            <?php echo $this->Form->select('User.role', array('Administrador' => 'Administrador'), array('class' => 'form-control', 'empty' => 'Seleccione el role', 'required')); ?>

        </div>

        <div class="form-group">
            <label for="recipient-name" class="control-label">Usuario</label>

            <?php echo $this->Form->text('User.username', array('class' => 'form-control', 'placeholder' => 'Ingrese el nombre de usuario', 'required')); ?>
        </div>
        <div class="form-group">

            <label for="recipient-name" class="control-label">Nueva Contrase&ntilde;a</label>

            <?php echo $this->Form->password('User.password2', array('class' => 'form-control', 'placeholder' => 'Ingrese una contrasena nueva')); ?>
        </div>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-danger btn-primary">Guardar</button>
</div>


<?php echo $this->Form->end(); ?>
</div>
<!-- END Modal Body -->