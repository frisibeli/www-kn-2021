<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");

$jsonFileContent = file_get_contents("./conversation.json");

echo $jsonFileContent;