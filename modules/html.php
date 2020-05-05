<?php

$html_source = filter_input(INPUT_POST, "source", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$html_output = empty($html_source) ? "Nenhum conteudo HTML detectado" : $html_source;

echo $html_output;