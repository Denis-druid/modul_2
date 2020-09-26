<?php
//echo $_GET['photo'];
//
//echo $auth_user['id'];

$uploadfile = "Z:\home\localhost\www\images\\" . $_FILES['photo']['name'];



if (isset($_GET['photo'])) {

    if (isset($_FILES['photo'])) {


        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);

        $name = $_FILES["photo"]["name"];

        $prepare = $pdo->prepare("INSERT INTO
                    photo (name)
                    values (:name);");

        $prepare->bindValue(":name", $name);

        $execute = $prepare->execute();

        if ($execute) { //Вывод

            $photo_id = $pdo->lastInsertId();
            header('HTTP/1.0 422 Unprocessable entity');
            $array = array('id' => $photo_id,
                'name' => $name,
                'url' => "http://localhost/images/" .  $name);
            api_response($array);
        }

        else {
            $array = array('photo' => 'Incorrect photo');
            header('HTTP/1.0 422 Unprocessable entity');
            api_response($array);
        }
    }
//    Удаляю фоточки из БД
    elseif ($_GET['photo'] && $_SERVER["REQUEST_METHOD"]=="DELETE"){

        $name = $_FILES["photo"]["name"];

        $prepare = $pdo->prepare("DELETE FROM photo WHERE id = {$_GET['photo']};");

        $prepare->bindValue(":name", $name);

        $execute = $prepare->execute();
    }

    else {
        $array = array('photo' => 'Incorrect photo');
        header('HTTP/1.0 422 Unprocessable entity');
        api_response($array);
    }


}


