<style type="text/css">
b { color: #0033ff;
    font-weight: bold; }

</style>

<div class="row">
    <div class="col-6 col-8 align-self-center">
        <h2 class="text-themecolor m-b-0 m-t-0">Conductor</h2>
    </div>
</div>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="align-center  " > <img src="<?php echo $this->Html->webroot('img/fotos/'.$per['Persona']['imagen']); ?>" width="150">

                <div class="row show-grid ">
                    <div class="col-md-4 text-center "><b>Numero de Movil</b><br> <?php echo $per['Auto']['nromov']; ?></div>
                    <div class="col-md-8 text-center "><b>Nombre Completo Propietario</b><br><?php echo $per['Persona']['apellido']; ?></div>
                    

                </div>
            </div>
            

            



            <div class="row show-grid">
                <div class="col-md-4 text-center"><b>Nombres</b><br> <?php echo $per['Persona']['nombre']; ?></div>
                <div class="col-md-4 text-center"><b>Apellidos</b><br><?php echo $per['Persona']['apellido']; ?></div>
                <div class="col-md-4 text-center"><b>C.I.</b><br><?php echo $per['Persona']['ci']; ?></div>

            </div>

            <div class="row show-grid">
                <div class="col-md-4 text-center"><b>Fecha de Vencimiento C.I.</b><br><?php echo $per['Persona']['fecha_ci']; ?></div>
                <div class="col-md-4 text-center"><b>Nro de Licencia</b><br><?php echo $per['Persona']['ci']; ?></div>
                <div class="col-md-4 text-center"><b>Categoria</b><br><?php echo $per['Persona']['categoria']; ?> </div>
                
            </div>

            <div class="row show-grid">
                <div class="col-md-8 text-center"><b>Domicilio:Calle,Avenida y Numero</b><br><?php echo $per['Persona']['domicilio']; ?></div>
                <div class="col-md-4 text-center"><b>Zona</b><br><?php echo $per['Persona']['zona']; ?></div>
            </div>

            <div class="row show-grid">
                <div class="col-md-4 text-center"><b>Estado</b><br><?php echo $per['Persona']['estado']; ?></div>
                <div class="col-md-8 text-center"><b>Motivo de baja</b><br><?php echo $per['Persona']['motivo_baja']; ?></div>
            </div>

            <div class="modal-footer">
                <a href='<?php echo $this->Html->url(array('action' => 'index'));
                ?>'> <button type="button" class="btn btn-white waves-effectt" data-dismiss="modal">Cerrar </button></a>
            </div>

        </div>
    </div>
</div>



<?php $this->end() ?>
<!-- END Example Block -->