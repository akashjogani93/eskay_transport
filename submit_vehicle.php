<?php 
    include("con.php");

    if(isset($_POST['submit']))
    {
        $tname=$_POST['tname'];
        // $tcmp=$_POST['tcmp'];
        $tno=$_POST['tno'];
        $chessi=$_POST['chessi'];
        $treg=$_POST['treg'];
        $capacity=$_POST['capacity'];

        $rcbook = $_FILES['rcbook'];
        $rcbook1 = upload_Profile($rcbook,"./image/");
        $lic = $_FILES['lic'];
        $lic1 = upload_Profile($lic,"./image/");
        $insu = $_FILES['insu'];
        $insu1 = upload_Profile($insu,"./image/");
        $puc = $_FILES['puc'];
        $puc1 = upload_Profile($puc,"./image/");

        $r_ex=$_POST['r_ex'];
        $l_ex=$_POST['l_ex'];
        $in_ex=$_POST['in_ex'];
        $puc_ex=$_POST['puc_ex'];

        $rcnumber=$_POST['rcnumber'];
        $lienceNumber=$_POST['lienceNumber'];
        $insuNumber=$_POST['insuNumber'];
        $pucnumber=$_POST['pucnumber'];

        $query="INSERT INTO `add_vehical`(`tname`, `vno`, `chassi_no`, `date`, `capacity`, `rc_book`, `r_ex`, `licence`, `li_ex`, `insuran`, `in_ex`, `puc`, `puc_ex`,`rcnumber`,`lienceNumber`,`insuNumber`,`pucnumber`) VALUES ('$tname','$tno','$chessi','$treg','$capacity','$rcbook1','$r_ex','$lic1','$l_ex','$insu1','$in_ex','$puc1','$puc_ex','$rcnumber','$lienceNumber','$insuNumber','$pucnumber')";
        $connect=mysqli_query($con,$query);
        echo "<script>alert('Vehicle Added Successfully.')
                location='add_vehicle.php'
            </script>";
    }

    function upload_Profile($image, $target_dir)
    {   
        if($image['name']!=""){
        $target_file = $target_dir . basename($image["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $msg = " ";
        try {
            $check = getimagesize($image["tmp_name"]);
            $msg = array();
            if ($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                $msg[1] = "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "pdf" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                $msg[2] = "Sorry, only PDF, JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $msg[3] = "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($image["tmp_name"], $target_file)) {
                    //$msg= "The file ". basename( $image["name"]). " has been uploaded.";
                } else {
                    $msg[4] = "Sorry, there was an error uploading your file.";
                }
            }
            // echo "<pre>";
            // print_r($msg);
            return ltrim($target_file, '');
            } catch (Exception $e) {
            // echo "Message" . $e->getmessage();
        }
    }else{
        return "";
    }
    }
?>
?>