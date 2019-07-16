<?php
require('fpdf.php');
$cedula = $_GET['cedula'];
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Image('qhs.png',85,10,40);
    $this->SetFont('Arial','B',15);
    $this->Ln(35);
    $this->Cell(68);
    $this->Cell(40,10,'HSEQ MUNDIAL SAS','C');
    $this->Ln(50);
    $this->Cell(52);
    $this->Cell(40,10,'CONSTANCIA DE APROBACION');
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(40,10,date('F j, Y, g:i a'),0,1,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,'Que una vez consultado el sistema de informacion de HSEQ MUNDIAL S A S, el numero de ');
$pdf->Ln(5);
$pdf->Cell(60,10,'indentificacion '.$cedula.' relacionado a continuacion. se encuentra en nuestra base de datos con');
$pdf->Ln(5);
$pdf->Cell(60,10,'los siguientes cursos:');
$pdf->Ln(15);

                      
$mysqli = new mysqli("localhost", "bwabgjbg_nelson", "Kaleth_2015", "bwabgjbg_certificado");

/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
     exit();
     }

$consulta = "SELECT certificado.idcertificado,alumnos.nombres,cursos.nomcurso,certificado.fechaaprobacion FROM cursos,certificado,alumnos WHERE cursos.idcurso = certificado.idcurso and certificado.cc=alumnos.cc and certificado.cc='$cedula'";
                      
if ($resultado = $mysqli->query($consulta)) {
                       
 /* obtener un array asociativo */
while ($fila = $resultado->fetch_assoc()) {
$pdf->Cell(0,6,'Fecha de Certificacion '.$fila[''].' - Fecha del Curso: '.$fila['fechaaprobacion'],0,1);
$pdf->Cell(0,7,'Nombres: '.$fila['nombres'],0,2);
$pdf->Cell(0,8,'Curso: '.$fila['nomcurso'],0,3);
$pdf->Ln(5);
  }
}                           

$pdf->Output();

?>
