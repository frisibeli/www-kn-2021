<?php
function printJSONResponse($assocArray) {
  http_response_code(404);
  echo json_encode($assocArray);
}