<?php
include '../servis/PrognozaServis.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  echo "Pogresna metoda";
  exit;
}

try {
  $prognozaServis->izmeni($_POST['id'], $_POST);
  echo "uspesno izmenjena prognoza";
} catch (Exception $ex) {
  echo $ex->getMessage();
}
