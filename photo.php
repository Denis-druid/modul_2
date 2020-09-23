<?php
//echo $_GET['photo'];
//
//echo $auth_user['id'];

if (isset($_GET['photo'])) {
    $uploadfile = "Z:\home\localhost\www\images\\".$_FILES['photo']['name'];

    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);



//        if (move_uploaded_file($_FILES["photo"]["name"], dirname(__FILE__) . "\images\\" . $_FILES["photo"]["name"])) {
//            echo 'File Uploaded'; //оповещаем пользователя об успешной загрузке файла
//        } else {
//            echo 'File not uploaded';
//        }

//
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
