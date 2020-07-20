<?php

    /*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    */

    $arquivo = fopen('arquivo.txt', 'a'); //Abre o arquivo (cria se não existir)
    
    //Coleta os valores dos inputs e substitui o char especial
    $_POST['titulo'] = str_replace('^', '-', $_POST['titulo']);
    $_POST['categoria'] = str_replace('^', '-', $_POST['categoria']);
    $_POST['descricao'] = str_replace('^', '-', $_POST['descricao']);

    //$texto = $titulo . "^" . $categoria . "^" . $descricao;
    $texto = implode('^', $_POST) . PHP_EOL;
    
    //Escreve no txt
    fwrite($arquivo, $texto);

    //Fechar arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>