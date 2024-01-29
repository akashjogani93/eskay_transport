<?php 

    include("con.php");

    $truc = $_POST['truc'];
    $drvr = $_POST['drvr'];
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
    $kmfrom = $_POST['kmfrom'];
    $kmto = $_POST['kmto'];
    $totalkm = $_POST['totalkm'];  

    $disele = $_POST['disele'];
    $average = $_POST['average'];

    $expenseDate = $_POST['expenseDate'];
    $expense_payment = $_POST['expense_payment'];

    $payment_mode = $_POST['mode_last'];
    $received_name = $_POST['received'];
    $balance = $_POST['balance'];
    $last_date = $_POST['last_date'];

    $place = $_POST['place'];
    $vals = $_POST['vals'];
    $frightCharge = $_POST['frightCharge'];

    
    $sql="INSERT INTO `tripsheet`(`truc`, `drvr`, `fromdate`, `todate`, `kmfrom`, `kmto`,`totalkm`,`disele`, `average`,`payment_mode`, `received_name`, `balance`, `date`,`expenseDate`,`expense_payment`) VALUES('$truc','$drvr','$fromdate','$todate','$kmfrom','$kmto','$totalkm','$disele','$average','$payment_mode','$received_name','$balance','$last_date','$expenseDate','$expense_payment')";
    $conform=mysqli_query($con,$sql);
    if($conform)
    {
        $sql1="SELECT `id` FROM `tripsheet` ORDER BY `id` DESC LIMIT 1;";
        $cfm=mysqli_query($con,$sql1);
        $row=mysqli_fetch_array($cfm);
        if($place!=0)
        {
            foreach ($place as $pla){
                    $q="INSERT INTO `places`(`id`, `fromPlace`, `toPlace`)VALUES 
                    ('$row[0]','$pla[0]','$pla[1]');";
                    $conf=mysqli_query($con,$q);
            }
        }
        
        foreach ($vals as $val)
        {
            $q1="INSERT INTO `expenses`(`id`,`givenName`,`amount`) VALUES('$row[0]','$val[0]','$val[1]');";
            $conf=mysqli_query($con,$q1);
        }

        foreach ($frightCharge as $fright)
        {
            $q2="INSERT INTO `fright`(`id`,`dis_crip`,`amount`) VALUES('$row[0]','$fright[0]','$fright[1]');";
            $conff=mysqli_query($con,$q2);
        }
        
        echo "Tripsheet Added Successfully";
    }



?>