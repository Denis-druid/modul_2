<?php
$data = $_SERVER['HTTP_AUTHOIZATION'];

if (isset($_POST['phone']) &&
    isset($_POST['password'])) {

    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $query = $pdo->query("SELECT * FROM users WHERE phone = '{$phone}' && password = '{$password}' ");
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {//Вход успешно выполнен

        if ($data){
            $array = array('Вход успешно выполнен');
            api_response($array);

            echo json_encode($data);
        }
        else{
            $array = array('error' => 'You need authorization');

            header('HTTP/1.0 403 Forbidden');
            api_response($array);
        }


    }
    else{
        $array = array('error' => 'Неверный логин или пароль.');
        header('HTTP/1.0 404 Not found');
        api_response($array);
    }
}
else{
    $array = array('error' => 'Нет всех обязательных данных.');

    header('HTTP/1.0 422 Unprocessable entity');
    api_response($array);
}