<?php 
    #USUÁRIOS DO SISTEMA
    $usuarios_app = 
    [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
    ];

    #PRINT DOS USUÁRIOS
    /*
    echo '<pre>';
        print_r($usuarios_app);
    echo '</pre>';
    */

    $usuario_autenticado = false;
    //Coleta as informações recebidas
    $main_user_email = $_POST['email'];
    $main_user_password = $_POST['senha'];

    //Percorre o array de usuários cadastrados
    foreach($usuarios_app as $user) {
        $current_user_email = $user['email'];
        $current_user_password = $user['senha'];

        //Compara as informações atuais com as recebidas
        if(($main_user_email === $current_user_email) && ($main_user_password === $current_user_password)){
            $usuario_autenticado = true;
        }
    }

    //Verifica se usuário foi encontrado
    if($usuario_autenticado){
        echo 'Usuário encontrado';
    } else {
        header('Location: ../index.php?login=erro');
    }
?>