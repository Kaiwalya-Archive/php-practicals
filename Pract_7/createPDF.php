<?php 

    require_once __DIR__ . '/vendor/autoload.php';
    $pdf = new \Mpdf\Mpdf();
    $pdf->WriteHTML('<h1>Hello world!</h1>');
    $pdf->Output();
?>