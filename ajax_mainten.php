<?php 
    include('con.php');

    $truckno=$_POST['truck'];
    $m_date=$_POST['m_date'];
    $mainten=$_POST['mainten'];

    $sql="INSERT INTO `maintain`(`tno`, `date`) VALUES ('$truckno','$m_date')";
    $conform=mysqli_query($con,$sql);
    if($conform)
    {
        $sql1="SELECT `id` FROM `maintain` ORDER BY `id` DESC LIMIT 1;";
        $cfm=mysqli_query($con,$sql1);
        $row=mysqli_fetch_array($cfm);

        // if($mainten!=0)
        // {
            foreach ($mainten as $main)
            {
                $q="INSERT INTO `maintain_amount`(`id`, `dis_crip`, `amount`) VALUES ('$row[0]','$main[0]','$main[1]')";
                $conf=mysqli_query($con,$q);
            }
        // }

        echo "Truck Maintenance Added";

    }
?>