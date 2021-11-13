<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");

$FILE = "./conversation.json";

// Reading the conversation file
$jsonFileContent = file_get_contents($FILE);
$parsedConversation = json_decode($jsonFileContent, true);

// Reading the POST request raw data
$requestData = file_get_contents('php://input');

function isValid($message)
{
  return true;
}

$parsedMessage = json_decode($requestData, true);
if (isValid($parsedMessage)) {
  array_push($parsedConversation['conversation'], $parsedMessage);

  $jsonStringConversation = json_encode($parsedConversation, JSON_UNESCAPED_UNICODE);

  file_put_contents($FILE, $jsonStringConversation, LOCK_EX);

  echo $jsonStringConversation;
} else {
  echo "Invalid message";
}