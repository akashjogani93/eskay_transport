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
    <div class="container-fluid" >
        <div class="row">
            <div class="topper col-md-12">
                <img src="img/img1.png" alt="" class="icns">
                <img src="img/img2.png" alt="" class="icns">
                <img src="img/img3.png" alt="" class="icns">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
           <h5> <img src="img/p1.png" alt="" class="icns1"><span> ADD VEHICLE</span></h5>
        </div>
        
        <div class="row">
            <div class="com col-md-12">
                <form action="submit_vehicle.php" method="post" enctype="multipart/form-data" style="background-color:rgba(255, 255, 255, 0.4)" >
                    <h5 class="group-form mb-2">Please Fill The Detail</h5><br>
                    <div class="row mt-2">
                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Truck Name</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="tname" name="tname" required placeholder="Enter Truck Name">
                        </div>
                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Vehicle Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="tno" name="tno" required placeholder="Enter Truck Number">
                        </div>
                        <!-- <div class="group-form col-md-6">
                            <label class="form_label" for="company_name"> Brand (Vehicle Company)</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="tcmp" name="tcmp" required placeholder="Enter Truck Company Name">
                        </div> -->
                    </div></br>
                    
                    <div class="row mt-2">
                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Chassis Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="chessi" name="chessi" required placeholder="Enter Truck  Chassis Number">
                        </div>
                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Registration Date</label>
                            <input type="date"  value="" class="form-control form-control-sm" id="treg" name="treg" required placeholder="mm/dd/yyyy">
                        </div>
                    </div></br>

                    <div class="row mt-2">
                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Capacity</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="capacity" required name="capacity" placeholder="Enter Truck  Capacity">
                        </div>
                        
                    </div></br>
                    <h5 class="group-form mt-4">Please Provide The Documents</h5><br>
                    <div class="row mt-2">
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">RC Book</label>
                            <input type="file"  value="" class="form-control form-control-sm" id="rcbook" name="rcbook" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Rc Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="rcnumber" name="rcnumber">
                        </div>
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Expiry</label>
                            <input type="date"  value="" class="form-control form-control-sm" id="r_ex" name="r_ex" placeholder="Enter Truck  Capacity">
                        </div>

                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Permit License</label>
                            <input type="file"  value="" class="form-control form-control-sm" id="lic" name="lic" placeholder="mm/dd/yyyy">
                        </div>
                        
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">License Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="lienceNumber" name="lienceNumber">
                        </div>
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Expiry</label>
                            <input type="date"  value="" class="form-control form-control-sm" id="l_ex" name="l_ex">
                        </div>
                    </div><br>

                    <div class="row mt-2">
                        
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Vehicle Insurance</label>
                            <input type="file"  value="" class="form-control form-control-sm" id="insu" name="insu" placeholder="mm/dd/yyyy">
                        </div>
                        
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="insuNumber" name="insuNumber">
                        </div>
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Expiry</label>
                            <input type="date"  value="" class="form-control form-control-sm" id="in_ex" name="in_ex" placeholder="Enter Truck  Capacity">
                        </div>

                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Vehicle PUC</label>
                            <input type="file"  value="" class="form-control form-control-sm" id="puc" name="puc" placeholder="mm/dd/yyyy">
                        </div>
                        
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">PUC Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="pucnumber" name="pucnumber">
                        </div>
                        <div class="group-form col-md-2">
                            <label class="form_label" for="company_name">Expiry</label>
                            <input type="date"  value="" class="form-control form-control-sm" id="puc_ex" name="puc_ex" placeholder="Enter Truck  Capacity">
                        </div>
                    </div></br>

                        <div class="row mt-2">
                            <div class="group-form-btn col-md-12">
                                <center>
                                <button type="submit" name="submit" class="btn btn-sm btn-primary col-md-4">Submit</button>
                                </center> 
                        </div>
                        
                        
                </form>
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

</html>

