<?php include("sidebar.php"); 
include('con.php');
$id=$_GET['id'];
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
    width:100%;
   padding:30px;
    background-color:white;
    overflow-x:scroll;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    border-radius:15px;

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
.aaaa{
    display:flex;
}
h6{
    font-weight:700;
}
.fst:nth-of-type(odd) {
    background-color: #f9f9f9;
}
h4 {
      color: blue;
    }
</style>


<!-- sidebar-wrapper  -->
<?php 
    $q="SELECT * FROM `tripsheet` WHERE `id`='$id'";
    $cof=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($cof))
    {
        $id=$row['id'];
        $truc=$row['truc'];
        $drvr=$row['drvr'];
        $fromdate=$row['fromdate'];
        $todate=$row['todate'];
        $kmfrom=$row['kmfrom'];
        $kmto=$row['kmto'];
        $totalkm=$row['totalkm'];

        $disele=$row['disele'];
        $average=$row['average'];

        $expenseDate=$row['expenseDate'];
        $expense_payment=$row['expense_payment'];

        $payment_mode=$row['payment_mode'];
        $received_name=$row['received_name'];
        $balance=$row['balance'];
        $date=$row['date'];
        $status=$row['status'];
    }
?>
<main class="page-content" >
    <div class="container-fluid " >
        <div class="row">
            <div class="topper col-md-12">
                <img src="img/img1.png" alt="" class="icns">
                <img src="img/img2.png" alt="" class="icns">
                <img src="img/img3.png" alt="" class="icns">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
           <h5> <img src="img/p5.png" alt="" class="icns1"><span> VIEW TRIPSHEET</span></h5>
        </div>
        <div class="com">
            <h4>TRIPSHEET DETAIL</h4></br>
            <div class="row fst">
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Truck Number:</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $truc; ?></p>
                        </div>
                    </div>
                </div>
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Driver Name:</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $drvr; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>From Date:</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $fromdate; ?></p>
                        </div>
                    </div>
                </div>
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>To Date</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $todate; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row fst">
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Km From:</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $kmfrom; ?></p>
                        </div>
                    </div>
                </div>
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Km To</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $kmto; ?></p>
                        </div>
                    </div>
                </div>
             </div>
             <div class="row fst">
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Total km:</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $totalkm; ?></p>
                        </div>
                    </div>
                </div>
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Diesel:</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $disele; ?></p>
                        </div>
                    </div>
                </div>
             </div>
             <div class="row fst">
                <div class="group-form  col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Truck Average:</h6>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $average; ?></p>
                        </div>
                    </div>
                </div>
            </div></div></br>
            <div class="row">
                <div class="col-md-6">
                    <div class="com">
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <h4>TRIPSHEET PLACES</h4>
                            </div>
                        </div></br>
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Places From:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Places To:</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <?php 
                                    $q1="SELECT * FROM `places` WHERE `id`='$id'";
                                    $cof1=mysqli_query($con,$q1);
                                    while($row=mysqli_fetch_array($cof1))
                                    {
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><?php echo $row['fromPlace']; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['toPlace']; ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                                </br>
                    <div class="com">
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <h4>FRIGHT AMOUNTS</h4>
                            </div>
                        </div></br>
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Discription:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Amount:</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <?php 
                                    $q1="SELECT * FROM `fright` WHERE `id`='$id'";
                                    $cof1=mysqli_query($con,$q1);
                                        $totalF=0;
                                        while($row=mysqli_fetch_array($cof1))
                                        {
                                            ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p><?php echo $row['dis_crip']; ?></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>₹. <?php echo $row['amount']; ?></p>
                                                    </div>
                                                </div>
                                            <?php
                                            $totalF+=$row['amount'];
                                        }
                                        ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 style="color:red;">Total Fright Charge:</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <b><p style="color:red;">₹. <?php echo $totalF; ?></p></b>
                                                </div>
                                            </div>
                                    <?php
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="com">
                    <div class="row fst">
                        <div class="group-form  col-md-12">
                            <h4>EXPENDATURE</h4>
                        </div>
                    </div></br>
                    <div class="row fst">
                        <div class="group-form  col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Discription:</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6>Amount:</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row fst">
                        <div class="group-form  col-md-12">
                        <?php 
                        $q2="SELECT * FROM `expenses` WHERE `id`='$id'";
                        $cof2=mysqli_query($con,$q2);
                            $expensed=0;
                            while($row=mysqli_fetch_array($cof2))
                            {
                                ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><?php echo $row['givenName']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>₹.<?php echo $row['amount']; ?></p>
                                        </div>
                                    </div>
                                <?php
                                $expensed+=$row['amount'];
                            }
                            ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 style="color:red;">Total Expendature:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <b><p style="color:red;">₹. <?php echo $expensed; ?></p></b>
                                    </div>
                                </div>
                        <?php
                        ?>
                        </div>
                        </hr>
                        <div class="col-md-10">
                            <table style="width:100%;">
                                <tr>
                                    <th><b>Date:</b> <?php echo $expenseDate; ?></th>
                                    <th><b>Payment Mode:</b> <?php echo $expense_payment; ?></th>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div></br>
            <div class="com">
                <h4>TRIPSHEET CALCULATION</h4></br>
                <div class="row fst">
                    <div class="col-md-6">
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Total Fright Charge:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>₹. <?php echo $totalF; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><p>Received By:</p></b>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $received_name; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row fst">
                    <div class="col-md-6">
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Total Expendature:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>₹. <?php echo $expensed; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                    <b><p>Date:</p></b>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $date; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row fst">
                    <div class="col-md-6">
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <div class="row">
                        <!-- <hr style="color:black;"> -->

                                    <div class="col-md-6">
                                        <h6 style="color:red;">Balance Amount:</h6>
                                    </div>
                                    <div class="col-md-6">
                                       <b> <p style="color:red;">₹. <?php echo $balance; ?></p></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row fst">
                            <div class="group-form  col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                    <b><p>Payment Mode:</p></b>
                                    </div>
                                    <div class="col-md-6">
                                    <p><?php echo $payment_mode; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        </br>
        
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
</script>
</html>

