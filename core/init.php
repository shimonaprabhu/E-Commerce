<?php
$db = mysqli_connect('127.0.0.1','root','','E-commerce');
if(mysqli_connect_errno()){
  echo "Datbase connection failed with errors: ".mysqli_connect_error();
  die();
}
