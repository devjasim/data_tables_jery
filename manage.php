
<?php 
session_start();

$mysqli = new mysqli("localhost","root","","date_sorting");

$start = date('Y-m-d', strtotime($_POST["start"]));
$end = date('Y-m-d', strtotime($_POST["end"]));

$sql = "SELECT * FROM data  WHERE date BETWEEN '$start' AND '$end' ";
 $run = mysqli_query($mysqli,$sql);

 $abc = array();
 foreach($run as $data){
    $abc[] = $data;
 }


$_SESSION['data'] = $abc;

 header("location: index.php");

?>
