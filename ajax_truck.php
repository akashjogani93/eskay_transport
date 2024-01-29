<?php 

include('con.php');
    $tname=$_POST['tname'];

    $sql="SELECT * FROM `add_vehical` WHERE `tname`='$tname'";
    $exc=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($exc))
    {
        $tno=$row['vno'];
    }
    echo $tno;
?>