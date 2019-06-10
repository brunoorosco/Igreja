<?php 
 include("../../../vendor/autoload.php");

 $html = file_get_contents('tarefas_equipe.php');

 $mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [190, 236],
    'orientation' => 'L'
 ]); 
 $mpdf-> SetDisplayMode('fullpage');
 $css = file_get_contents("style_painel.css");
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($html);
 $mpdf->Output();

 exit;