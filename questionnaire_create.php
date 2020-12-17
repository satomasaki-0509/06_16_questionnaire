<?php

  //var_dump($_POST);
  //exit();

  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $mannzokudo1 = $_POST["超満足!"];
  $mannzokudo2 = $_POST["満足"];
  $mannzokudo3 = $_POST["普通"];
  $mannzokudo4 = $_POST["不満"];
  $mannzokudo5 = $_POST["超不満"];
  $kanso = $_POST["kanso"];

  $write_questionnaire_data = "{$name} {$mail} {} {$kanso}\n";

  $file = fopen('questionnaire_data/questionaire.csv', 'a');
  flock($file, LOCK_EX);
  fwrite($file,$write_questionnaire_data);
  flock($file, LOCK_UN);
  fclose($file);

  header("Location:questionnaire_input.php");