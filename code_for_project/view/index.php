<?php  
include_once("../Configs/Db.php");
$con = Database::connect();

if(isset($_GET['controler'], $_GET['action']))
{
  $controler = $_GET['controler'];
  $action = $_GET['action'];
}
else
{
  $controler = 'Home';
  $action ='Index';
}

require_once('_layout.php');

?>