<?php
require_once('../Public/fpdf/fpdf.php');
require_once('../Dao/library.dao.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        //   $this->Image('logo.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(35, 0, 'Libros prestados', 0, 0, 'C');
        // Salto de línea
        $this->Ln(20);
        $this->Cell(25, 10, 'Nombre', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Nombre Libro', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Genero', 1, 0, 'C', 0);
        $this->Cell(45, 10, 'Fecha Prestamo', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Fecha Entrega', 1, 1, 'C', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}



// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// while($row = LibraryDAO::listarEditorial()){
//     $pdf->Cell(90,10,$row['nombre'],1,0,'C',0);
//     $pdf->Cell(90,10,$row['autor'],1,0,'C',0);
//     $pdf->Cell(90,10,$row['genero'],1,0,'C',0);
// }
foreach (LibraryDAO::listarLibrosPrestados() as $libro) {
    $pdf->Cell(25, 10, utf8_decode($libro['nombre']), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, utf8_decode($libro['nombre_libro']), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, utf8_decode($libro['genero_libro']), 1, 0, 'C', 0);
    $pdf->Cell(45, 10, utf8_decode($libro['fecha_prestamo']), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, utf8_decode($libro['fecha_entrega']), 1, 1, 'C', 0);
}
$pdf->Output();
$link = $pdf->AddLink();
$pdf->Write(0, utf8_decode('ir Atras'), $link);
$pdf->SetLink($link);
