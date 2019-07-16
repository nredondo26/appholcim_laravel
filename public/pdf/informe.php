<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">

</head>
<body class="well">
<form class="form-horizontal" method="POST" action="generarpdf.php">
    <div class="container">
        <div class="row">

            <section class="logo col-xs-4 col-xs-offset-4     col-md-2 col-md-offset-5    col-lg-2  col-lg-offset-5">
                <img src="qhs.png" class="img-responsive img-thumbnail" height="200px;">
            </section>
            
            <section>

                    <div class="input-group col-xs-10 col-xs-offset-1  col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 input  text-center">
                       <?php
                       $cedula = $_POST['cedula'];
                        $mysqli = new mysqli("localhost", "bwabgjbg_nelson", "Kaleth_2015", "bwabgjbg_certificado");

                        /* verificar la conexión */
                        if ($mysqli->connect_errno) {
                            printf("Conexión fallida: %s\n", $mysqli->connect_error);
                            exit();
                        }

                        $consulta = "SELECT certificado.idcertificado,alumnos.nombres,cursos.nomcurso,certificado.fechaaprobacion FROM cursos,certificado,alumnos WHERE cursos.idcurso = certificado.idcurso and certificado.cc=alumnos.cc and certificado.cc='$cedula'";
                      
                        if ($resultado = $mysqli->query($consulta)) {

                        $row_cnt = $resultado->num_rows;

                        if($row_cnt==0){

                        printf("Por favor verifique su identificacion, ya que no se encontro ningun usuario con estos datos");
                        } 
                        else{

                            /* obtener un array asociativo */
                            
                            $final=$cedula.".pdf";
                            
                            $file ="/home/bwabgjbg/public_html/subir/certificados/$final";

                            if (file_exists($file)){
                              printf ("Usted se encuentra en nuetra base de datos con ".$row_cnt. " curso(s)");;
                                    echo "<a href='generarpdf.php?cedula=$cedula'> Generar Constancia</a></br>";
                                    echo "<a href='http://hseqmundial.com/subir/certificados/$cedula.pdf'> Descargar Certificado</a>";
                            }else{
                              printf ("Usted se encuentra en nuetra base de datos con ".$row_cnt. " curso(s)");;
                                    echo "<a href='generarpdf.php?cedula=$cedula'> Generar Constancia</a></br>";
                            } 
                           
                           
                            }   
                            }                        
                            /* liberar el conjunto de resultados */
                            $resultado->free();
                        /* cerrar la conexión */
                        $mysqli->close();
                        
                       
                       
                       
                        ?>
                    </div>
                    
                

                <div class="text-center center-block rap-button">   	
             
                    
                    <a href="http://certificado.hseqmundial.com/" class="btn btn-danger" role="button">REGRESAR</a>
                    <a href="http://hseqmundial.com/" class="btn btn-info" role="button">Hseqmundial.com</a>
                </div>
                
            </section>
            
        </div>
        
    </div>
    
</form>


</body>


</html>