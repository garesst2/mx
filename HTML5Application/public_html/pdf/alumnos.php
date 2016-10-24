<?php 
    require_once 'alumno.entidad.php';
    require_once 'alumno.model.php';

    // Logica
    $alm = new Alumno();
    $model = new AlumnoModel();
?>
    
<h1>Mi primer reporte</h1>
<p>Hemos creado nuestro reporte usando PHP y HTML :).</p>

<table>
    <thead>
        <tr>
            <th style="background-color: yellow;text-align:left;">Nombre</th>
            <th style="text-align:left;">Apellido</th>
            <th style="text-align:left;">Sexo</th>
            <th style="text-align:left;">Nacimiento</th>
        </tr>
    </thead>
    <?php foreach($model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->__GET('Nombre'); ?></td>
            <td><?php echo $r->__GET('Apellido'); ?></td>
            <td><?php echo $r->__GET('Sexo') == 1 ? 'H' : 'F'; ?></td>
            <td><?php echo $r->__GET('FechaNacimiento'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>   

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#bbb;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#594F4F;background-color:#E0FFEB;border-top-width:1px;border-bottom-width:1px;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#493F3F;background-color:#9DE0AD;border-top-width:1px;border-bottom-width:1px;}
.tg .tg-e7p2{color:#ffcc67;vertical-align:top}
.tg .tg-2ows{color:#f56b00;vertical-align:top}
.tg .tg-rmb8{background-color:#C2FFD6;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-031e">gffgfgfghfgffffffffffffff</th>
    <th class="tg-yw4l">gfgfgggggggggggggggggggggg</th>
    <th class="tg-e7p2">gfgfggggggggggggggggggggggggggggggggg</th>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-rmb8"></td>
    <td class="tg-2ows"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-rmb8"></td>
    <td class="tg-yw4l"></td>
  </tr>
</table>