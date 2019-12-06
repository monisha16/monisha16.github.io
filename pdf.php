<?php

require_once "config.php";
require('fpdf.php');

  $resultset1=Array();

  $eid = $_GET["eid"];
$sql="SELECT uname, uemail FROM user where uid in(SELECT uid FROM joined WHERE eid=$eid) ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $resultset1[] = $row;
  }
}

$conn->close();
$numrows=mysqli_num_rows($result);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

foreach($resultset1 as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(50,10,$column,1);
}
$pdf->Output();
?>
