<?php

$html_output = <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <title>Testing mPDF</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <header class="jumbotron bg-info text-white">
            <h1 class="display-4">Testing mPDF</h1>
        </header>
        <main class="container">
            <h3>Testando a biblioteca <a href="https://mpdf.github.io/">mPDF</a></h3>

            <form method="POST">
                <div class="form-group">
                    <label for="source">Conteudo HTML para incluir</label>
                    <textarea class="form-control" rows="15" id="source" name="source"></textarea>
                </div>
                <div class="form-group form-check">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="action" value="pdf" checked>PDF
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="action" value="html">HTML
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-info float-right">Enviar</button>
            </form>
        </main>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
EOT;

echo $html_output;