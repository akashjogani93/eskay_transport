<?php 
    include "con.php";


    $truckno=$_POST['truckno'];
    if($truckno != '')
    {
        $exc=mysqli_query($con,"SELECT `driver` FROM `truck_asign` WHERE `tno`='$truckno'");
        while($row=mysqli_fetch_array($exc))
        {
            $tno=$row['driver'];
            $truck=mysqli_query($con,"SELECT * FROM `employee` WHERE `id`='$tno'");
            while($row1=mysqli_fetch_array($truck))
            {
                $fname=$row1['fname'];
                $lname=$row1['lname'];
                $name=$fname." ".$lname;
            }
    

        }
    }else{
        $name='';
    }
    
    echo $name;
?>

<?php 

    // $tname=$_POST['tname'];

    // $sql="SELECT * FROM `add_vehical` WHERE `tname`='$tname'";
    // $exc=mysqli_query($con,$sql);
    // while($row=mysqli_fetch_array($exc))
    // {
    //     $tno=$row['vno'];
    // }
    // echo $tno;
?>