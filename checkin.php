<?php include("sidebar.php");
include("connect.php");
$cnt = 0;
$sql = "SELECT max(cust_id) FROM chek_in";
$retval = mysqli_query($conn, $sql );

if(! $retval ) {
    die('Could not get data: ' . mysqli_error($conn));
}
while($row = mysqli_fetch_assoc($retval)) {
    $cnt=$row['max(cust_id)'];
    $cnt++;
}
?>
<style>
    .class{
        font-size:14px;

    }
    form {
    padding: 30px;
}
.box{
    overflow-x:scroll;
}

</style>
<div class="page-content container-fluid" style="background-color:rgba(233, 245, 250, 1);">
    <div class="footer"style="background-color:rgba(233, 245, 250, 1);">
        <div class="d-flex justify-content-between">
             <h2 class="" style="font-size:36px; font-weight: 600">CUSTOMER CHECK-IN</h2>
        </div>
     
    </div>
</div>

                    
<main class="page-content"style="background-color:rgba(233, 245, 250, 1);">
    <div class="container">
       

        <form action="checkin_add.php" method="post" enctype="multipart/form-data" style="background-color:rgba(255, 255, 255, 0.4)" >
          
            <div class="row mt-2">
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Cust Id</label>
                   
                    <input type="text" readonly value="<?php echo $cnt; ?>" class="form-control form-control-sm" name="id" id="id" placeholder="Customer Id">
                </div>
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name"> Name</label>
                    <input type="text" class="form-control form-control-sm" required  name="name" id="name" placeholder="First Name"/>
                </div>
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Email</label>
                    <input type="email" class="form-control form-control-sm"  name="email" id="email" placeholder="Add Email"/>
                </div>
            </div></br>
            <div class="row mt-2">
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Phone No</label>
                    <input type="text" class="form-control form-control-sm"  name="phone" id="phone" placeholder="Phone Number"/>
                </div>
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Check In date & Time</label>
                    <input type="datetime-local" class="form-control form-control-sm" name="date" id="date" required>
                </div>
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Type</label>
                    <select class="form-control form-control-sm" required name="type" id="type" onchange="diver()">
                        <option value="">Select Type</option>
                        <option>12 Hour</option>
                        <option>24 Hour</option>
                    <select>
                </div>
            </div></br>

            <div class="row mt-2">
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Room Number</label>
                
                    <select class="form-control form-control-sm" required name="rno" id="rno" onchange="diver1()">
                        <option value="">Select Number</option>
                        <?php
                                $query="SELECT DISTINCT `room_no` FROM `room` WHERE `status`=0 ORDER BY `id` ASC";
                                $confirm=mysqli_query($conn,$query) or die(mysqli_error());
                                while($loca=mysqli_fetch_array($confirm))
                              {?>
                                  <option><?php echo $loca['room_no']; ?></option>
                              <?php   }   ?>
                    <select>
                </div>

                <div class="group-form col-sm-4">
                    <label class="form_label" for="company_name">Id Proof</label>
                    <input type="file" class="form-control form-control-sm" name="proof" id="proof" accept="image/x-png,image/jpg,image/jpeg" />
                </div>
                <div class="group-form col-sm-4">
                    <label class="form_label" for="company_name">Extra Bed</label>
                
                    <select class="form-control form-control-sm" name="bed" id="bed">
                        <option value="">Select bed</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    <select>
                </div>

            </div>   </br>
            <div class="row mt-2">
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Cost</label>
                    <input type="text" class="form-control form-control-sm cost"  name="cost" id="cost" placeholder="cost" value="0"/>
                </div>

                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Rent Amount</label>
                   
                    <input type="text"  value="" class="form-control form-control-sm" readonly name="amt" id="amt" placeholder="Amount">
                </div>
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name"> Advance/Deposit</label>
                    <input type="text" class="form-control form-control-sm cost" name="dip" id="dip" placeholder="Deposit" value="0"/>
                </div>
            </div></br>
        
            
            <div class="row mt-2">
                
                <div class="group-form col-md-4">
                    <label class="form_label" for="company_name">Remain Amount</label>
                    <input type="email" class="form-control form-control-sm"  name="remain" id="remain" readonly placeholder="Remain amount"/>
                </div></br>
            </div>
        </br>
          <div class="row mt-2">
                <div class="group-form-btn col-md-12">
                   <center>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary col-md-3">Update</button>
                    </center> 
            </div>
             
            
        </form>
                    
         <!-- Table -->
         <div class="box mt-4">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr style="text-align:center;">
                                    <th>Cust_Id</th>
                                    <th>Name</th>
                                    <th>E-Mail-Id</th>
                                    <th>Mobile</th>
                                    <th>Date & Time</th>
                                    <th>Type</th>
                                    <th>Room Number</th>
                                    <th>Proof</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $qry="SELECT * FROM `chek_in` WHERE `status`=0";
                                $exc=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_array($exc))
                                {
                                    ?>
                                    <tr class="text-center">
                                        <td><?php echo $row['cust_id'] ?></td>
                                        <td><?php echo $row['full'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['datecheck'] ?></td>
                                        <td><?php echo $row['type'] ?></td>
                                        <td><?php echo $row['room'] ?></td>
                                        <td><a href="<?php echo $row['proof']; ?>" target="_blank"><img src="<?php echo $row['proof']; ?>" height="50" width="50"></a></td>
                                    
                                    </tr>
                                    <?php
                                }
                            ?>    
                        </table>
<!-- page-content" -->

</div>
</main>

<script>
    // function diver()
    // {
    //     var type = document.getElementById('type').value;
    //     $.ajax({
    //         url: 'fetchroom_ajax.php',
    //         type: "POST",
    //         dataType:'json',
    //         data:  {
    //             type: type,
    //         }
    //         , success:function(data) {
    //                 //alert(data);
    //                 $("#rno option").remove();
    //                 var x = document.getElementById("rno");
    //                 for(var i=0;i<data.length;i++){
    //                     var option = document.createElement("option");
    //                     option.text = data[i];
    //                     option.value = data[i];

    //                     x.add(option);
    //                 }
    //             }

    //     });

    // }


    function diver1()
    {
        // alert("hii")
        var wingname = document.getElementById('rno').value;
        var type = document.getElementById('type').value;
        // //alert(wingname);
        let log=$.ajax({
            url: 'room_ajax.php',
            type: "POST",
            dataType:'json',
            data:  {
                room: wingname,
                type: type,
            }
            , success:function(data) {
                $("#amt").val(data);
                $("#remain").val(data);
                
            }

        });console.log(log)
            
    }
    $(document).ready(function()
    {
        // alert('hii');
        $('.cost').keyup(function(){
            // alert('hii');
        var amt = $('#amt').val();
        var cost = $('#cost').val();
        // alert(cost);
        var dip = $('#dip').val();
        
        var calx= parseInt(amt) + parseInt(cost) - parseInt(dip);
        // alert(calx)
        $('#remain').val(calx.toFixed(2));
        });
    });
</script>

