<?php 
include("con.php");


// $truck=$_POST['truck'];
$tno=$_POST['tno'];
$driver=$_POST['driver'];
$date=$_POST['date'];

$sql="INSERT INTO `truck_asign`(`tno`, `driver`, `date`) VALUES ('$tno','$driver','$date')";
$conf=mysqli_query($con,$sql);
if($conf)
{
    echo "<script>alert('Vehicle Asigned.')location='assign_truck.php'</script>";
}


?>