<?php
// When there is a request from client execute the following code
if(isset($_GET['text'])){

  // Getting the value obtained from GET request of client and changing it to upper case
  $text = $_GET['text'];
  $text = strtoupper($text);

  // Responsing to the client
  echo "$text";
}


 ?>
