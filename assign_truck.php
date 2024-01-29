<?php include("sidebar.php"); 
include("con.php");
?>
<style>
    body {
        /* background-image: linear-gradient(to bottom , #248ea9 40%, #fafdcb 40%); Standard syntax (must be last) */
        background-color:rgba(233, 245, 250, 1);
        /* background-color: #946000; */
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Ropa Sans', sans-serif;
    }
   
    .topper{
        margin:auto;
        width:100%;
        background-color:white;
        padding:25px 0 25px; 0;
        display:flex;
        justify-content:end;
       
    }
    .icns{
  margin: 0 10px 0 10px ;
    /* font-size: 12px; */
    width: 15px;
    height: 15px;
    /* line-height: 30px; */
    text-align: center;
    border-radius: 4px
}
.icns1{
  margin: 0 10px 0 0 ;
    /* font-size: 12px; */
    width: 20px;
    height: 20px;
    /* line-height: 30px; */
    text-align: center;
    border-radius: 4px
}
.com{
    width:97%;
   padding:30px;
    background-color:white;
    margin-right:20px
}
.com1{
    width:100%;
   padding-top:30px;
    background-color:white;
    overflow-x:scroll;
}

.group-form {
    margin:0;
}
.btn{
   
    border-radius:0;
    margin:4px 0;
}
.table thead {
    background-color: white;
    color: black;
}
tr td{
    text-align:center;
}
.abcc{
    background-color:black;
}
</style>


<!-- sidebar-wrapper  -->
<main class="page-content" >
    <div class="container-fluid" >
        <div class="row">
            <div class="topper col-md-12">
                <img src="img/img1.png" alt="" class="icns">
                <img src="img/img2.png" alt="" class="icns">
                <img src="img/img3.png" alt="" class="icns">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
           <h5> <img src="img/p6.png" alt="" class="icns1"><span> TRUCK ASSIGNMENT</span></h5>
        </div>
       
        <div class="row ">


            <div class=" col-md-5">
                <div class="com">
                    <form action="asign_submit.php" method="post" enctype="multipart/form-data" style="background-color:rgba(255, 255, 255, 0.4)" >
                     
                
                        <div class="row">
                            <div class="group-form col-md-12">
                                <label class="form_label" for="company_name">Truck Number</label>
                                <!-- <input type="text"  value="" class="form-control form-control-sm" placeholder="Truck Name"> -->
                                <select name="truck" id="truck" class="form-control form-control-sm" required>
                                    <option value="">Truck Number</option>
                                    <?php 
                                        $sql="SELECT * FROM `add_vehical` ORDER BY `vid`";
                                        $exc=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($exc))
                                        {
                                            ?>
                                                <option><?php echo $row['vno']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="row mt-4">
                            <div class="group-form col-md-12">
                                <label class="form_label" for="company_name"> Truck Number</label>
                                <input type="text"  name="tno" id="tno" class="form-control form-control-sm" readonly placeholder="Enter Truck Number">
                            </div>
                        </div> -->
                        </br>
                        <center><h5>Assign To</h5></center>
                        <div class="row mt-4">
                            <div class="group-form col-md-12">
                                <label class="form_label" for="company_name">Driver</label>
                                <!-- <input type="text"  value="" class="form-control form-control-sm" placeholder="Enter Driver Name"> -->
                                <select name="driver" id="driver" class="form-control form-control-sm" required>
                                    <option value="">Select Driver</option>
                                    <?php 
                                        $sql="SELECT * FROM `employee` WHERE `status`='driver' ORDER BY `id`";
                                        $exc=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($exc))
                                        {
                                            $id=$row['id'];
                                            ?>
                                                <option value="<?php echo $id; ?>"><?php echo $row['fname']." ".$row['lname']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="group-form col-md-12">
                                <label class="form_label" for="company_name">Date</label>
                                <input type="date"  value="" name="date" class="form-control form-control-sm" required placeholder="Enter Mobile Number">
                            </div>
                        </div>

                             <div class="row">
                            <div class="group-form-btn col-md-12">
                                <center>
                                <button type="submit" name="submit" class="btn btn-sm btn-primary col-md-12">Submit</button>
                                </center> 
                        </div>
                        </div>
                            
                    </form>
                </div>
            </div>


            <div class=" col-md-7">
                <div class="com1">
                    <table id="example" class="table table-striped table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Truck Number</th>
                                <th>Driver Assigned</th>
                                <th> Date</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require_once("con.php");
                            $query="SELECT `truck_asign`.*,`employee`.`fname`,`employee`.`lname` FROM `employee`,`truck_asign` WHERE `employee`.`id`=`truck_asign`.`driver`";
                            $exc=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($exc))
                            {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['tno']; ?></td>
                                        <td><?php echo $row['fname']." ".$row['lname']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <!-- <td><a href="#" class="btn btn-sm btn-success">Edit</a><a href="#" class="btn btn-sm btn-danger">Delete</a></td> -->
                                    </tr>
                                <?php
                            } 
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div id="sticky-footer" class="container-fluids">
           <div class="wthree-copyright m-3">
            <p class="text-center" style="font-weight:600; color:black;"> Design & Developed By Evon IT solution..</p>
           </div>
   </div>
</main>
</body>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});


function diver()
{
    // console.log("pass");
    var tname=$("#truck").val();
    var tno=$("#tno").val();
    console.log(tname);

    let log=$.ajax({
            url:'ajax_truck.php',
            type:'POST',
            // datatype:'json',
            data:{
                tname:tname
            },
            success:function(data)
            {
                // console.log(data);
                $("#tno").val(data);
            }
    });
}
</script>
</html>

