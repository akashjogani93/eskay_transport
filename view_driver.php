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
           <h5> <img src="img/p3.png" alt="" class="icns1"><span> VIEW DRIVER</span></h5>
        </div>
        <div class="row">
            <div class="com col-md-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name </th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                            <th>Joining Date</th>
                            <th>Aadhar</th>
                            <th>License</th>
                            <th>Actions</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            require_once("con.php");
                            $query="SELECT * FROM `employee` WHERE `status`='driver'";
                            $exc=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($exc))
                            {
                                ?>
                                    <tr>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['mobile1'].','.$row['mobile2']; ?></td>
                                        <td><?php echo $row['adds']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['adhar']; ?></td>
                                        <td><?php echo $row['lic_no']; ?></td>
                                        <td><a href="#" class="btn btn-sm btn-success">Edit</a><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                                    </tr>
                                <?php
                            } 
                        ?>
                    </tbody>
                </table>
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
</script>
</html>

