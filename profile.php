<?php

if ($auth_user) {

    $array = array('first-name' => $auth_user['first_name'],
                    'surname' => $auth_user['surname']);
    api_response($array);

}