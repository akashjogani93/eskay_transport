<?php 
    include("con.php");

    if(isset($_POST['submit']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mobile1=$_POST['mobile1'];
        $mobile2=$_POST['mobile2'];
        $adds=$_POST['adds'];
        $date=$_POST['date'];

        $adhar = $_FILES['adhar'];
        $adhar1 = upload_Profile($adhar,"./doc/");
        $lic = $_FILES['lic'];
        $lic1 = upload_Profile($lic,"./doc/");
        

        $adharno=$_POST['adharno'];
        $lic_no=$_POST['lic_no'];
        $driver=$_POST['driver'];
        

        $query="INSERT INTO `employee`(`fname`, `lname`, `mobile1`, `mobile2`, `adds`, `date`, `adhar`, `adhar_img`, `lic_no`, `lic`, `status`)  VALUES ('$fname','$lname','$mobile1','$mobile2','$adds','$date','$adharno','$adhar1','$lic_no','$lic1','$driver')";
        $connect=mysqli_query($con,$query);
        if($driver=='driver')
        {
            echo "<script>alert('Driver Added Successfully.')
                location='add_driver.php'
            </script>";
        }else
        {
            echo "<script>alert('Cleaner Added Successfully.')
                location='add_cleaner.php'
            </script>";
        }
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
