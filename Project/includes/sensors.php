<?php
class sensors{
 public $link='';
 function __construct($temp, $moist, $water, $motor){
  $this->connect();
  $this->storeInDB($temp, $moist, $water, $motor);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'project') or die('Cannot select the DB');
 }
 
 function storeInDB($temp, $moist, $water, $motor){
  $query = "insert into sensors (Water_Level, Dryness, Temperature, Motor_Status) values ( $water, $moist, $temp, '$motor')";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['t'] != '' and  $_GET['m'] != '' and  $_GET['w'] != '' and  $_GET['ms'] != ''){
 $sensors=new sensors($_GET['t'],$_GET['m'],$_GET['w'],$_GET['ms']);
}
?>
