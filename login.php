<?php
echo $_GET['photo'];

echo $_SERVER['HTTP_AUTHORIZATION'];

if(isset($_POST['phone'])&&
   isset($_POST['password'])){

   $phone = $_POST['phone'];
   $password = $_POST['password'];

   $query = $pdo -> query("SELECT * FROM users WHERE phone = '{$phone}'");
   $user = $query -> fetch(PDO::FETCH_ASSOC);

    if ($user = false) {
        $array = array('error' => 'Неверный логин или пароль');
        header('HTTP/1.0 404 Not found');
        api_response($array);
    }
    else{

    }
}
else{
    $array = array('error' => 'Нет всех обязательных данных.');

    header('HTTP/1.0 422 Unprocessable entity');
    api_response($array);
}