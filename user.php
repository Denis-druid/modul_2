<?php
//isset($_GET['first_name']);
//$first_name = $_POST['first_name'];
//echo json_encode($first_name);
//&& $_SERVER["REQUEST_METHOD"]=="GET"

if ($_SERVER["REQUEST_METHOD"]=="GET") { //Не совсем по заданию, но работает
    $search = $_POST['search'];
    $id = null;
    $first_name = null;
    $surname = null;
    $phone = null;

    $query = $pdo->query("SELECT * FROM users WHERE
                                    first_name LIKE '$search%' ||
                                    surname LIKE '$search%' ||
                                    phone LIKE '$search%' ");
    $user = $query->fetch(PDO::FETCH_ASSOC);

    $ar = array_chunk($user, 1);

    $id = $ar[0];
    $first_name = $ar[1];
    $surname = $ar[2];
    $phone = $ar[3];

    $array = array(
        'id'=>$id,
        'first_name'=>$first_name,
        'surname'=>$surname,
        'phone'=>$phone
    );
    api_response($array);
}