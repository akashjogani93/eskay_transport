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
           <h5> <img src="img/p3.png" alt="" class="icns1"><span> ADD DRIVER</span></h5>
        </div>
        <div class="row">
            <div class="com col-md-12">
                <form action="submit_driver.php" method="post" enctype="multipart/form-data" style="background-color:rgba(255, 255, 255, 0.4)" >
                    <h5 class="group-form mb-2">Please Fill The Detail</h5><br>
            
                    <div class="row mt-2">
                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">First Name</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="fname" name="fname" required placeholder="Enter First Name">
                        </div>

                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name"> Last Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="lname" name="lname" required placeholder="Enter Last Name">
                        </div>
                    </div></br>

                    <div class="row mt-2">
                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Mobile Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="mobile1" name="mobile1" required placeholder="Enter Mobile Number">
                        </div>

                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Secondary Moble Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="mobile2" name="mobile2" required placeholder="Enter Mobile Number">
                        </div>
                        </div></br>

                    <div class="row mt-2">
                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Address</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="adds" name="adds" required placeholder="Enter Your Current Address">
                        </div>

                        <div class="group-form col-md-6">
                            <label class="form_label" for="company_name">Joining Date</label>
                            <input type="date"  value="" class="form-control form-control-sm" id="date" name="date" required placeholder="mm/dd/yyyy">
                        </div>
                    </div></br>
                    <h5 class="group-form mt-4 mb-2">Please Provide The Documents</h5><br>
                    <div class="row mt-2">
                        
                        <div class="group-form col-md-3">
                            <label class="form_label" for="company_name">Aadhar Number</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="adharno" required name="adharno" placeholder="Enter Number">
                        </div>
                        
                        <div class="group-form col-md-3">
                            <label class="form_label" for="company_name" style="color:white;">.</label>
                            <input type="file"  value="" id="adhar" name="adhar" class="form-control form-control-sm" >
                        </div>

                        <div class="group-form col-md-3">
                            <label class="form_label" for="company_name">Driving License</label>
                            <input type="text"  value="" class="form-control form-control-sm" id="lic_no" name="lic_no" placeholder="Enter Number">
                        </div>
                        
                        <div class="group-form col-md-3">
                            <label class="form_label" for="company_name" style="color:white;">.</label>
                            <input type="file"  value="" id="lic" name="lic" class="form-control form-control-sm" >
                            <input type="hidden"  value="driver" id="driver" name="driver">
                        </div>
                    </div><br>

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

