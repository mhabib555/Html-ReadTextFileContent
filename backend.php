<?php

if (isset($_GET["serial"])) {
    $id = $_GET['serial'];
    $file = file_get_contents('database.json');
    $data = json_decode($file, true);
    $myObjTrue = new stdClass();
    $myObjFalse = new stdClass();
    foreach($data['data'] as $index => $row) {
        if($row['id'] === $id) { 
            $myObjTrue->check = true;
            $myObjTrue->message = 'Id is valid';
            echo json_encode($myObjTrue);
            return; 
        }
    }
    $myObjFalse->check = false;
    $myObjFalse->message = 'Id is invalid';
    echo json_encode($myObjFalse);
    return;
}


?>
