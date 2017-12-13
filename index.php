<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {

    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $questionOne = $json->result->parameters->questionOne;
    $questionTwo = $json->result->parameters->questionTwo;
    $questionThree = $json->result->parameters->questionThree;


}

else {
    echo "Method not allowed";
}


?>
