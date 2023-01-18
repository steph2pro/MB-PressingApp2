<?php
use Dompdf\Dompdf;
use Dompdf\Options;
require_once 'dompdf/autoload.inc.php';
$option=new Options();
$option->set('defaultFont','courier');
$dompdf=new Dompdf($option);
$dompdf->loadHtml('stephane pro');
$dompdf->setPaper('A4','paysage');
$dompdf->render();
$fichier='mon-pdf.pdf';
header('location:mon-pdf.pdf');
$dompdf->stream($fichier);