<?php include("sidebar.php"); 
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

}
.group-form {
    margin:0;
}
.btn{
    padding:12px 0 12px;
    border-radius:0;
}
</style>


<!-- sidebar-wrapper  -->
<main class="page-content" >
    <?php include('con.php'); ?>
    <div class="container-fluid" >
        <div class="row">
            <div class="topper col-md-12">
                <img src="img/img1.png" alt="" class="icns">
                <img src="img/img2.png" alt="" class="icns">
                <img src="img/img3.png" alt="" class="icns">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
           <h5><img src="img/p3.png" alt="" class="icns1"><span>Vehical Maintenance</span></h5>
        </div>
        <div class="row">
            <div class="com col-md-12">
                <!-- <form action="submit_driver.php" method="post" enctype="multipart/form-data" style="background-color:rgba(255, 255, 255, 0.4)" > -->
                    <div class="row mt-2">
                        <div class="group-form col-md-10">
                            <h5 class="group-form mb-2">Please Fill The Detail</h5><br>
                        </div>   
                        <div class="group-form col-md-2">
                            <a href="view_mainteance.php" class="btn btn-sm btn-primary" style="padding: 5px 5px;">View Details</a>
                        </div> 
                    </div>   
                    <div class="row mt-2 justify-content-md-center">
                    <!-- <div class="group-form col-md-4"> -->
                        <div class="group-form col-md-4">
                            <label class="form_label" for="company_name">Truck Number</label>
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
                        <div class="group-form col-md-4">
                            <label class="form_label" for="company_name">Maintenance Date</label>
                            <input type="Date" class="form-control form-control-sm" id="m_date" name="m_date" required>
                        </div>
                    </div></br>
                    <div class="row mt-2 justify-content-md-center">
                            <div class="group-form col-md-2">
                            </div>
                        <div class="group-form col-md-4">
                            <label class="form_label" for="company_name">Discription</label>
                            <input type="text" class="form-control form-control-sm dis" id="mobile1" name="mobile1" required placeholder="Discription Of Amount">
                        </div>

                        <div class="group-form col-md-4">
                            <label class="form_label" for="company_name">Amount</label>
                            <input type="number" class="form-control form-control-sm amt" id="mobile2" name="mobile2" required placeholder="Amount Of Maintenance">
                        </div>
                        <div class="group-form col-md-2">
                            <Button id="mplus" style="margin-top:25px; border:none; background-color:white; font-size:34px; color:blue;">+</Button>
                        </div>
                    </div></br>
                    <div id="show">
                                    
                    </div>
                    </br>               
                    <div class="row mt-2">
                        <div class="group-form-btn col-md-12">
                            <center>
                            <!-- <button type="submit" name="submit" class="btn btn-sm btn-primary col-md-4">Submit</button> -->
                            <button name="submit" onclick="insert()" class="btn btn-sm btn-primary col-md-5">Submit</button>
                            </center> 
                    </div>
                        
                <!-- </form> -->
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
    $(document).ready(function()
    {
        $('#mplus').click(function(e)
        {
            e.preventDefault();
            $('#show').append(`<div class="row mt-2 justify-content-md-center">
                            <div class="group-form col-md-2">
                            </div>
                        <div class="group-form col-md-4">
                            <label class="form_label" for="company_name">Discription</label>
                            <input type="text" class="form-control form-control-sm dis" id="mobile1" name="mobile1" required placeholder="Discription Of Amount">
                        </div>

                        <div class="group-form col-md-4">
                            <label class="form_label" for="company_name">Amount</label>
                            <input type="number" class="form-control form-control-sm amt" id="mobile2" name="mobile2" required placeholder="Amount Of Maintenance">
                        </div>
                        <div class="group-form col-md-2">
                            <Button class="minus" style="margin-top:25px; border:none; background-color:white; font-size:34px; color:red;">-</Button>
                        </div>
                    </div>`);

        });  
        $(document).on('click', '.minus', function(e) {
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        });
    });

    function insert()
    {
        // console.log('running');
        let truck=$('#truck').val();
        let m_date=$('#m_date').val();

        if(truck=='')
        {
            alert("Please Select Truckno");
            exit();
        }

        if(m_date=='')
        {
            alert("Please Select Date");
            exit();
        }

        let f=0;
        mainten=[];
        $('.dis').each(function(index, item)
        {
            mainten[f]=[];
            let amt = $(item).parent().parent().find('.amt').val();
            mainten[f].push(item.value);
            mainten[f].push(amt);
            f++;
        });

        let ajax=$.ajax({
            url:'ajax_mainten.php',
            type:'POST',
            data:{
                truck:truck,
                m_date:m_date,
                mainten:mainten,
            },
            success:function(status)
            {
                alert(status);
                window.location.href="maintenance.php";
            }
        });
        console.log(ajax);


    }
</script>
</html>

