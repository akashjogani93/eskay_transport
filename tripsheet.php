<?php include("sidebar.php"); 
    include "con.php";

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
    padding:30px;
    background-color:white;
   
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

.abcc{
    background-color:black;
}

tr th{
    border: none;
}
tr td{
    border: none;
}
.com_table{
    margin:auto;
    display:grid;
    justify-content:center;
}
.bts1{
    float:right;
}
.expenserow{
    margin-bottom:20px;
}
.grou{
    display:flex;
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
        </div><br>
        <div class="row">
            <div class="col-md-8"><h5> <img src="img/p6.png" alt="" class="icns1"><span>TRIP SHEET</span></h5></div>
            <!-- <div class="col-md-4"><button type="submit" name="submit" class="btn bts1 btn-sm btn-primary col-md-6">Submit</button></div> -->
          
        </div><br>
       
        <div class="row ">


            <div class=" col-md-6">
                <div class="com">
                    <!-- <form action="checkin_add.php" method="post" enctype="multipart/form-data" style="background-color:rgba(255, 255, 255, 0.4)" > -->
                     
                        <h5>Please Fill The Detail</h5><br>
                        <div class="row">
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">Truck Number</label>
                                <!-- <input type="text"  value="" class="form-control form-control-sm" placeholder="Driver"> -->
                                <select name="truckno" id="truckno" class="form-control form-control-sm" onchange="diver()">
                                    <option value="">select Truck Number</option>
                                    <?php 
                                        $conform=mysqli_query($con,"SELECT DISTINCT `tno` FROM `truck_asign`");
                                        while($row=mysqli_fetch_array($conform))
                                        {
                                            $tno=$row['tno'];
                                            echo '<option>'.$tno.'</option>';
                                        }

                                    ?>
                                </select>
                            </div>
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">Driver</label>
                                <input type="text" class="form-control form-control-sm" id="drvr" readonly placeholder="Truck Name">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name"> Place From</label>
                                <input type="text" id="fromplace" class="form-control form-control-sm from-place" placeholder="Place From">
                            </div>
                            <div class="group-form col-md-5">
                                <label class="form_label" for="company_name"> Place To</label>
                                <input type="text" id="to-place" class="form-control form-control-sm to-place" placeholder="Place To">
                            </div>
                            <div class="group-form col-md-1">
                                <Button id="plus" style="margin-top:25px; border:none; background-color:white; font-size:34px; color:blue;">+</Button>
                            </div>
                        </div>
                        <div id="show">
                            
                        </div>
                        <div class="row mt-4">
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">Date From</label>
                                <input type="date" value="" id="fromdate" class="form-control form-control-sm" placeholder="mm/dd/yyyy">
                            </div>
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name"> Date To</label>
                                <input type="date"  value="" id="todate"class="form-control form-control-sm" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name"> KM From</label>
                                <input type="number" id="kmfrom" class="form-control form-control-sm" placeholder="From" onblur="kmto()">
                            </div>
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">KM To</label>
                                <input type="number" id="kmto" class="form-control form-control-sm" placeholder="To" onblur="kmto()">
                            </div>
                            <script>
                                function kmto()
                                {
                                    var kmfrom=$('#kmfrom').val();
                                    var kmto=$('#kmto').val();
                                    var gap = Math.abs(kmfrom - kmto);
                                    $('#totalkm').val(gap);
                                }
                                $(document).ready(function()
                                {
                                    $('#disele').on('input', function() 
                                    {
                                        let totalkm=$('#totalkm').val();
                                        let disele=$(this).val();
                                        average=totalkm/disele;
                                        $('#average').val(average);
                                    });
                                });
                            </script>
                        </div>
                        <div class="row mt-4">
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">Total KM</label>
                                <input type="number" id="totalkm" class="form-control form-control-sm" readonly placeholder="From" >
                            </div>
                            
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">Diesel</label>
                                <input type="number" id="disele" class="form-control form-control-sm" placeholder="Diesel">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">Vehicle Avarage</label>
                                <input type="text"  value="" id="average" class="form-control form-control-sm" readonly placeholder="Vehicle Average">
                            </div>
                           </br>
                        </div>
                    <!-- </form> -->
                </div><br>
                <div class="com">
                    <!-- <form action="checkin_add.php" method="post" enctype="multipart/form-data"  > -->
                        <h5> Freight Charges  </h5><br>
                        <div class="row">
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">Description</label>
                                <input type="text"  value="" id="des_crip" class="form-control form-control-sm des_crip" placeholder="Description">
                            </div>
                            <div class="group-form col-md-5">
                                <label class="form_label" for="company_name">Amount</label>
                                <input type="text"  value="" id="amount" class="form-control form-control-sm amount" placeholder="Amount">
                            </div>
                            <div class="group-form col-md-1">
                                <Button id="FrightPlus" style="margin-top:25px; border:none; background-color:white; font-size:34px; color:blue;">+</Button>
                            </div>
                        </div>
                        <div id="showFright">
                            
                        </div>
                    <!-- </form> -->
                </div>
            </div>


            <div class="col-md-6">
                <div class="com1">
                    <!-- <form action="checkin_add.php" method="post" enctype="multipart/form-data"  > -->
                        <h5> Expenses  </h5><br>
                        <div class="row">
                            <div class="group-form col-md-6 expenserow">
                                <label class="form_label" for="company_name">Give By</label>
                                <input type="text" class="form-control form-control-sm givenbyname" placeholder="Give By">
                            </div>
                            <div class="group-form col-md-5 expenserow">
                                <label class="form_label" for="company_name">Amount</label>
                                <input type="text"  value="" class="form-control form-control-sm expenseAmount" placeholder="Amount">
                            </div>
                            <div class="group-form col-md-1">
                                <Button class="addexx" style="margin-top:10px; border:none; background-color:white; font-size:34px; color:blue;">+</Button>
                            </div>
                            <br>
                        </div>
                        <div id="expense">

                        </div>
                        <div class="row">
                            <div class="group-form col-md-6 expenserow">
                                <label class="form_label" for="company_name">Date</label>
                                <input type="date" id="expenseDate" class="form-control form-control-sm expensedate" placeholder="Amount">
                            </div>
                            <div class="group-form col-md-5 expenserow">
                                <label class="form_label" for="company_name">Payment Type</label><br>
                                <select name="expense_payment" id="expense_payment" class="form-control expensepay">
                                    <option>cash</option>
                                    <option>online</option>
                                </select>
                            </div> 
                        </div>

                        <div class="group-form-btn col-md-12">
                            <button id="addexpense" class="btn btn-sm btn-primary col-md-5" onclick="addexpense()" style="float:right;">Add</button>
                        </div></br>
                    <!-- </form> -->
                </div>
                    <br>
                <div class="com1 com_table" >
                    <div class="advance">
                        <div class="row">
                            <div class="grou col-md-12">
                                <label class="form_label col-md-6" for="company_name">Freight Total Charges</label>
                                <input type="text"  value="" id="total1" class="form-control col-md-6" placeholder="Give By" readonly>
                            </div>
                        </div></br>
                        <div class="row">
                            <div class="grou col-md-12">
                                <label class="form_label col-md-6" for="company_name" >Total Expenditure</label>
                                <input type="text"  value="" class="form-control col-md-6" placeholder="Amount" readonly id="totalExpendatureAmount">
                            </div>
                        </div></br>
                        <div id="expendature">

                        </div>
                        <div class="row">
                            <div class="grou col-md-12">
                                <label class="form_label col-md-6" for="company_name" >Balance Amount</label>
                                <input type="text"  value="" id="balance" class="form-control form-control-sm" placeholder="Amount" readonly>
                            </div>
                        </div></br>
                        <div class="row">
                            <div class="grou col-md-12">
                                <label class="form_label col-md-6" for="company_name" >Received by</label>
                                <input type="text" id="received" class="form-control form-control-sm" placeholder="Name">
                            </div>
                        </div></br>
                        <div class="row">
                            <div class="grou col-md-12">
                            <input type="date"  value="" id="last_date" name="last_date" class="form-control co-md-6" >
                                <div class="col-md-6">
                                <!-- <label class="form_label" for="company_name">Payment Type</label><br> -->
                                <select name="mode_last" id="mode_last" class="form-control">
                                    <option value="">Payment Type</option>
                                    <option>cash</option>
                                    <option>online</option>
                                </select>
                                </div>
                            </div>
                        </div></br>
                        <div class="row">
                            <div class="grou col-md-12">
                                <button name="submit" onclick="insert()" class="btn btn-sm btn-primary col-md-5" style="float:right;">Submit</button>
                            </div>
                        </div>
                    </div>
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
    $(document).ready(function ()
    {
        $('#example').DataTable();

        $('#plus').click(function(e)
        {
            e.preventDefault();
            // console.log("pass");
            $('#show').append(`<div class="row mt-4">
                                <div class="group-form col-md-6">
                                    <label class="form_label" for="company_name"> Place From</label>
                                    <input type="text" class="form-control form-control-sm from-place" placeholder="Place From">
                                </div>
                                <div class="group-form col-md-5">
                                    <label class="form_label" for="company_name"> Place To</label>
                                    <input type="text" class="form-control form-control-sm to-place" placeholder="Place To">
                                </div>
                                <div class="group-form col-md-1">
                                    <Button id="minus" class="remove" style="margin-top:25px; border:none; background-color:white; font-size:34px; color:blue;">-</Button>
                                </div>
                            </div>`);
        });

        
        $('#FrightPlus').click(function(e)
        {
            e.preventDefault();
            $('#showFright').append(`<div class="row">
                            <div class="group-form col-md-6">
                                <label class="form_label" for="company_name">Description</label>
                                <input type="text"  value="" id="des_crip" class="form-control form-control-sm des_crip" placeholder="Description">
                            </div>
                            <div class="group-form col-md-5">
                                <label class="form_label" for="company_name">Amount</label>
                                <input type="text"  value="" id="amount" class="form-control form-control-sm amount" placeholder="Amount">
                            </div>
                            <div class="group-form col-md-1">
                                <Button id="Frightminus" class="Frightminus" style="margin-top:25px; border:none; background-color:white; font-size:34px; color:blue;">-</Button>
                            </div>
                        </div>`);

        });  

        var i=1;
        $('.addexx').click(function(e)
        {
            i++;
            e.preventDefault();
            // console.log("pass");
            $('#expense').append(`<div class="row">
                            <div class="group-form col-md-6 expenserow">
                                <label class="form_label" for="company_name">Give By</label>
                                <input type="text"  value="" class="form-control form-control-sm givenbyname" placeholder="Give By">
                            </div>

                            <div class="group-form col-md-5 expenserow">
                                <label class="form_label" for="company_name">Amount</label>
                                <input type="text"  value="" class="form-control form-control-sm expenseAmount" placeholder="Amount">
                            </div>
                        <div class="group-form col-md-1">
                                <Button class="removeexx" style="margin-top:10px; border:none; background-color:white; font-size:34px; color:red;">-</Button>
                            </div>
                        </div>`);
        });

        $(document).on('click', '.remove', function(e) {
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        });

        $(document).on('click', '.Frightminus', function(e) {
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        });

        $(document).on('click', '.removeexx', function(e) 
        {
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        });
    });

function addexpense()
{

    let truc=$('#truckno').val();
    let fromdate=$('#fromdate').val();
    // alert(fromdate);
    let todate=$('#todate').val();
    var kmfrom=$('#kmfrom').val();
    // alert(kmfrom);

    let kmto=$('#kmto').val();
    let average=$('#average').val();

    let expense_payment=$('#expense_payment').val();
    let expenseDate=$('#expenseDate').val();

    var frightCharge=[];
    let f=1;
    $('.des_crip').each(function(index, item)
    {
        frightCharge[f]=[];
        let frightamount = $(item).parent().parent().find('.amount').val();
        frightCharge[f].push(item.value);
        frightCharge[f].push(frightamount);
        f++;
    });

    let frightTotal=0;
    frightCharge.map((item,f)=>
    {
        frightTotal=frightTotal+parseInt(item[1]);
    });

    
    // var place=[];
    // let i=1;
    // $('.from-place').each(function(index, item)
    // {
    //     place[i]=[];
    //     let toplace = $(item).parent().parent().find('.to-place').val();
    //     place[i].push(item.value);
    //     place[i].push(toplace);
    //     i++;

    // });

    // if(truc != '' && kmfrom !='' && fromdate !='' && todate !='' && kmto !='' && disele !='' && average !='' && average !='' && place !='' && des_crip !='' && amount !='')
    // {
          // get all Expendature
        $('#expendature').html('');
        
        var vals = [];
        let j = 1;
        $('.givenbyname').each(function(index, item) 
        {
            vals[j] = [];
            // let expensedate = $(item).parent().parent().find('.expensedate').val();
            let expenseAmount = $(item).parent().parent().find('.expenseAmount').val();
            vals[j].push(item.value);
            // vals[j].push(expensedate);
            vals[j].push(expenseAmount);
            j++;
        });

        

        let expend1=0;
        vals.map((item,j)=>
        {
            // $('#expendature').append(`<div class="row ${j}">
            //     <div class="grou col-md-12">
            //         <label class="form_label col-md-6" for="company_name" >----${j}st Expenditure</label>
            //         <input type="text" value="${item[1]}" class="form-control form-control-sm" placeholder="Amount" readonly>
            //     </div>
            // </div></br>`);

            expend1=expend1+parseInt(item[1]);
        });

        $('#total1').val(frightTotal);
        $('#totalExpendatureAmount').val(expend1);

        if(expend1>frightTotal)
        {
            $('#balance').val(expend1-parseInt(frightTotal));
        }else
        {
            $('#balance').val(parseInt(frightTotal)-expend1);
        }
            
        

     
    // }
    // else{
    //     alert('Please Fill All Fields');
    //         exit();
    // }
}


function diver()
{
    let truc=$('#truckno').val();
    // alert(truckno);

    let ajax=$.ajax({
            url:'get.php',
            type:'POST',
            data:{
                truckno:truc,
            },
            // datatype:'json',
            success:function(status)
            {
                // alert(status);
                $('#drvr').val(status);
            }
        });
        console.log(ajax);
   
    // alert(ajax);
    // alert('hii');

}


function insert()
{
    let truc=$('#truckno').val();
    let drvr=$('#drvr').val();
    let fromdate=$('#fromdate').val();
    let todate=$('#todate').val();
    var kmfrom=$('#kmfrom').val();
    let kmto=$('#kmto').val();

    let totalkm=$('#totalkm').val(); //gap of the kilometer

    let disele=$('#disele').val();
    let average=$('#average').val();

    let expenseDate=$('#expenseDate').val(); //expense Date
    let expense_payment=$('#expense_payment').val(); //expense Pay

    let mode_last=$('#mode_last').val();

    let received=$('#received').val();
    let balance=$('#balance').val();
    let last_date=$('#last_date').val();


    var place=[];
    let i=0;
    $('.from-place').each(function(index, item)
    {
        place[i]=[];
        let toplace = $(item).parent().parent().parent().find('.to-place').val();
        place[i].push(item.value);
        place[i].push(toplace);
        i++;
    });
    

    var vals = [];
    let j = 0;
    $('.givenbyname').each(function(index, item) 
    {
        vals[j] = [];
        // let expensedate = $(item).parent().parent().find('.expensedate').val();
        let expenseAmount = $(item).parent().parent().find('.expenseAmount').val();
        // let expensepay = $(item).parent().parent().find('.expensepay').val();
        vals[j].push(item.value);
        // vals[j].push(expensedate);
        vals[j].push(expenseAmount);
        // vals[j].push(expensepay);
        j++;
    });

    var frightCharge=[];
    let f=0;
    $('.des_crip').each(function(index, item)
    {
        frightCharge[f]=[];
        let frightamount = $(item).parent().parent().find('.amount').val();
        frightCharge[f].push(item.value);
        frightCharge[f].push(frightamount);
        f++;
    });


    let log = $.ajax({
        url: 'ajax_trip_insert.php',
        type: "POST",
        // datatype:'json',
        data: {
            truc : truc,
            drvr : drvr,
            fromdate : fromdate,
            todate : todate,
            kmfrom : kmfrom,
            kmto : kmto,
            totalkm: totalkm,
            disele : disele,
            average : average,
            expenseDate : expenseDate,
            expense_payment : expense_payment,
            mode_last:mode_last,
            received:received,
            balance:balance,
            last_date:last_date,
            place : place,
            vals : vals,
            frightCharge : frightCharge,
            
        },
        success: function(data) 
        {
            alert(data);
            console.log(data);
            windows.location.href="tripsheet.php";
        }
    });console.log(log);

}
    

</script>
</html>

