<section role="main" id="main">
    <noscript class="message black-gradient simpler">Your browser does not support JavaScript! Some features won't work as expected...</noscript>
    <hgroup id="main-title" class="thin">
        <h1>Listado de Tarifas</h1>
    </hgroup>

    <div class="with-padding">                   

        <table class="table responsive-table" id="tabla-json">

            <thead>
                <tr>                      
                    <th style="width: 10%;">Inicio</th>
                    <th >Destino</th>
                    <th style="width: 10%;" class="hide-on-mobile">diurno</th>  
                    <th style="width: 10%;" class="hide-on-mobile">nocturno</th>
                    <th >Acciones</th>
                </tr>
            </thead>          

            <tbody>

            </tbody>
        </table>  <br>
        
    </div>
</section>  

<script>
  urljsontabla = '<?php echo $this->Html->url(array('action' => 'index.json')); ?>';
  filtro_c = [
      {type: "text"},
      {type: "text"},
      {type: "text"},
      {type: "text"}
  ];
  
  /*datos_tabla2 = {};
  datos_tabla2 = {
      "oLanguage": {
          "sUrl": "<?php //echo $this->webroot; ?>js/libs/DataTables/Spanish.json"
      },
      'sPaginationType': 'full_numbers',
      'sDom': '<"dataTables_header"lfr>t<"dataTables_footer"ip>',
      'bProcessing': true,
      'sAjaxSource': urljsontabla,
      'sServerMethod': 'POST',
      "order": [],
      'fnInitComplete': function (oSettings)
      {
          // Style length select
          table2.closest('.dataTables_wrapper').find('.dataTables_length select').addClass('select blue-gradient glossy').styleSelect();
          tableStyled = true;
      }, "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
          $('td:eq(2)', nRow).addClass('hide-on-mobile');
          $('td:eq(3)', nRow).addClass('hide-on-mobile');
          $('td:eq(4)', nRow).addClass('hide-on-mobile');
      }
  };*/
  function editarc(idtarifa) {
      location = '<?php echo $this->Html->url(array('action' => 'tarifa')); ?>/' + idtarifa;
  }
  function eliminarc(idtarifa) {
      if (confirm("Esta seguro de eliminar al cliente??")) {
          location = '<?php echo $this->Html->url(array('action' => 'eliminar')); ?>/' + idtarifa;
      }
  }
  
</script>
