<?php

$temp_path = sys_get_temp_dir();
$mpdf = new \Mpdf\Mpdf(['tempDir' => $temp_path]);

$html_source = filter_input(INPUT_POST, "source", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$html_output = empty($html_source) ? "Nenhum conteudo HTML detectado" : $html_source;

$mpdf->WriteHTML(html_entity_decode($html_output));
$mpdf->Output();