<?php
//$search = $_POST['search'];
//echo json_encode($search);

if ($_SERVER["REQUEST_METHOD"]=="POST") { //Не совсем по заданию, но работает
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

    if ($user !== false){
        $ar = array_chunk($user, 1);

        $id = $ar[0][0];
        $first_name = $ar[1][0];
        $surname = $ar[2][0];
        $phone = $ar[3][0];
//    $array = array(
//        'id'=>$id,
//        'first_name'=>$first_name,
//        'surname'=>$surname,
//        'phone'=>$phone
//    );

        $info = array(
            'id' => $id,
            'first_name' => $first_name,
            'surname' => $surname,
            'phone' => $phone
        );
        $array = array(
            'content' => $info
        );
        api_response($array);
    }




    }