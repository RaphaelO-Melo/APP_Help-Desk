<?php

    session_start();
    //Remover Índices -> unset()
    //unset($_SESSION['x']); //Faz verificação automática de se índice já existe

    //Destruir a variável -> session_destroy()
    session_destroy();//Será destruída porém tem acesso à variáveis até próxima sessão
    
    //Forçar o redirecionamento
    header('Location: ../index.php');
?>