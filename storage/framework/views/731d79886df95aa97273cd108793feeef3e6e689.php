<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

<title>Constancia hseqmundial sas</title>

 <!-- Web Fonts  -->
        <link href="<?php echo e(asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light')); ?> " rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <?php echo Html::style('assets/font-awesome/css/font-awesome.css'); ?>

        <?php echo Html::style('assets/vendor/magnific-popup/magnific-popup.css'); ?>

        <?php echo Html::style('assets/vendor/bootstrap-datepicker/css/datepicker3.css'); ?>

        <?php echo e(Html::favicon('favicon.ico')); ?>


        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/select2/select2.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')); ?>" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/theme.css')); ?>" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/skins/default.css')); ?>" />

        <!-- Head Libs -->
        <?php echo e(Html::script('assets/vendor/modernizr/modernizr.js')); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
	color: #000;
}

.container {
	width: 890px;
	background-image: url("http://www.hseqmundial.com/certificatetools/assets/fondo.jpg");
}

.contenido {
	padding: 0px 20px 20px 30px;
	margin-bottom:10px;
	margin-left:20px;
	margin-right:20px;
	text-align:left;
}

.cursos {
	padding: 0px 20px 20px 0px;
	margin-bottom:5px;
	margin-left:50px;
	margin-right:20px;
	text-align:left;
}

-->
</style></head>

<body>

<div class="container">
  <div>
  	<div>
  	  <h1>
  	      <img src="http://www.hseqmundial.com/certificatetools/assets/498715-PHRWVH-758.png" width="890" height="259" /></h1>
    </div>
    <div class="contenido">
      <h2><p>HSEQ MUNDIAL SAS HACE CONSTAR:</p></h2>
      <?php $__currentLoopData = $nombre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keynombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <h6><p>Que el señor (a) <?php echo e($keynombre->nombre); ?> identificado con cédula de ciudadanía <?php echo e($keynombre->cc); ?> Realizo los procesos de formación trabajo seguro en altura registrando los siguientes cursos :</p></h6>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="cursos">
        
        <?php $__currentLoopData = $reporte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><strong>Curso : <?php echo e($key->nomcurso); ?> </strong></p>
        <p><strong>Fecha de Aprobacion : <?php echo e($key->fechaaprobacion); ?> </strong></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

    <div class="footer">
      <table width="851" border="0">
      <tr>
        <th width="187" scope="col"><img src="http://www.hseqmundial.com/certificatetools/assets/Imagen3.png" alt="" width="166" height="75" /></th>
        <th width="532" scope="col"><p>Centro  de Entrenamiento Autorizado Bajo Norma NTC 6072 y Resolucion 1178 del 2017  Ministerio Del Trabajo</p></th>
        <th width="118" scope="col"><img src="http://www.hseqmundial.com/certificatetools/assets/Imagen2.png" alt="" width="94" height="86" /></th>
      </tr>
    </table>
    <p><img src="http://www.hseqmundial.com/certificatetools/assets/498715-PHRWVH-7589.png" width="890" height="59" /></p>
  </div>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>
