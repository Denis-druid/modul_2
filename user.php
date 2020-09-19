<?php
//isset($_GET['first_name']);
//$first_name = $_POST['first_name'];
//echo json_encode($first_name);
if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    $query = $pdo->query("SELECT * FROM users WHERE first_name = '{$first_name}'");
    $user = $query->fetch(PDO::FETCH_ASSOC);
    echo json_encode(array($user));
}