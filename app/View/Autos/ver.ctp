<style type="text/css">
b { color: #0033ff;
    font-weight: bold; }

</style>

<div class="row">
    <div class="col-6 col-8 align-self-center">
        <h2 class="text-themecolor m-b-0 m-t-0">Auto</h2>
    </div>
</div>

<div class="col-12">
    <div class="card">
        <div class="card-body">            
            <div class="align-center  " > <img src="<?php echo $this->Html->webroot('img/fotos/'.$auto['Auto']['imagen']); ?>" width="400" height="200">
            </div><br>     
            <div class="row show-grid ">
                <div class="col-md-4 text-center "><b>Numero de Movil</b><br> <?php echo $auto['Auto']['nromov']; ?></div>
                
                <div class="col-md-8 text-center "><b>Nombre Completo Propietario</b><br>

                    <?php foreach ($auto['Persona'] as $p): ?>

                        <a href='<?php echo $this->Html->url(array('action' => 'vercon',$p['id'])); ?>'>
                            <?=  $p['nombre'], $p['apellido']; ?><br>
                         </a>
                    
                    <?php endforeach; ?>
                </div>
                

            </div>
            



            <div class="row show-grid">
                <div class="col-md-4 text-center"><b>Marca</b><br> <?php echo $auto['Auto']['marca']; ?></div>
                <div class="col-md-4 text-center"><b>Modelo</b><br><?php echo $auto['Auto']['modelo']; ?></div>
                <div class="col-md-4 text-center"><b>Tipo</b><br><?php echo $auto['Auto']['tipo']; ?></div>

            </div>

            <div class="row show-grid">
                <div class="col-md-4 text-center"><b>Color</b><br><?php echo $auto['Auto']['color']; ?></div>
                <div class="col-md-4 text-center"><b>Placa</b><br><?php echo $auto['Auto']['placa']; ?></div>
                <div class="col-md-4 text-center"><b>a;o Fabricacion</b><br><?php echo $auto['Auto']['fabricacion']; ?> </div>
                
            </div>

            

            <div class="modal-footer">
                <a href='<?php echo $this->Html->url(array('action' => 'index'));
                ?>'> <button type="button" class="btn btn-white waves-effectt" data-dismiss="modal">Cerrar </button></a>
            </div>

        </div>
    </div>
</div>
