<?php
//echo $_GET['photo'];
//
//echo $auth_user['id'];

if (isset($_GET['photo'])) {

    if (isset($_FILES['photo'])) {
//        $destiation_dir = dirname(__FILE__) . '\images\\'. $_FILES['photo']['name'];
//
//        if (move_uploaded_file($_FILES['photo']['name'], $destiation_dir)) { //перемещение в желаемую директорию
//            echo 'File Uploaded'; //оповещаем пользователя об успешной загрузке файла
//        } else {
//            echo 'File not uploaded';
//        }
    }
//        echo $destiation_dir;
//        $name = $_FILES["photo"]["name"];

//        $prepare = $pdo->prepare("INSERT INTO
//                    photo (name)
//                    values (:name);");

//        $prepare->bindValue(":name", $name);
//
//        $execute = $prepare->execute();
//
//        if ($execute) {
//
//            $photo_id = $pdo->lastInsertId();
//
//
//            header('HTTP/1.0 422 Unprocessable entity');
//
//            $array = array('id' => $photo_id,
//                'name' => $name,
//                'url' => "http://localhost/images/" .  $name);
//            api_response($array);
//        }
//
//        else {
//            $array = array('photo' => 'Incorrect photo');
//            header('HTTP/1.0 422 Unprocessable entity');
//            api_response($array);
//        }


//    else {
//        $array = array('photo' => 'Incorrect photo');
//        header('HTTP/1.0 422 Unprocessable entity');
//        api_response($array);
//    }
}
