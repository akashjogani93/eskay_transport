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
    .abc{
        background-color:rgba(96, 194, 142, 1);
    }
    .def{
        background-color:rgba(245, 89, 79, 1);
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
    line-height: 30px;
    text-align: center;
    border-radius: 4px
}
.com{
    padding-top:30px;
    width:100%;
    height:100vh;
    background-color:white;

}
</style>


<!-- sidebar-wrapper  -->
<main class="page-content" >
    <div class="container-fluid" >
        <div class="row">
            <div class="topper col-md-12">
                <img src="img/img1.png" alt="" class="icns">
                <img src="img/usr.png" alt="" class="icns">
                <img src="img/img3.png" alt="" class="icns">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
           <h5> <img src="img/p7.png" alt=""> DASHBOARD</h5>
        </div>
        <div class="row">
            <div class="com col-md-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th>slno</th>
                            <th>Truck Name</th>
                            <th>Truck Number</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody id="tb">
                    <?php
                            require_once("con.php");
                            $query="SELECT DISTINCT `tripsheet`.`truc`,`add_vehical`.`tname` FROM `tripsheet`,`add_vehical` WHERE `tripsheet`.`truc`=`add_vehical`.`vno`";
                            $exc=mysqli_query($con,$query);
                            $i=0;
                            while($row=mysqli_fetch_array($exc))
                            {
                                ?>
                                    <tr>
                                        <td><?php echo $i+1; ?></td>
                                        <td><?php echo $row['tname']; ?></td>
                                        <td><?php echo $row['truc']; ?></td>
                                        <!-- <td><a href="view_Single_report.php?tno=<?php echo $row['truc'];?>" class="btn btn-sm btn-success">View</a></td> -->
                                    </tr>
                                <?php
                                $i++;
                            } 
                        ?>
                    </tbody>
                </table>
                <script>
                    $(document).ready(function() 
                    {
                        $("#example tbody").on('dblclick', 'tr', function() 
                        {
                            var currow = $(this).closest('tr');
                            var item_id = currow.find('td:eq(2)').html();
                            console.log(item_id);
                            window.location.href = 'view_Single_report.php?tno='+item_id;
                        });
                    });

                    $("#tb tr").hover(function() 
                    {
                        $(this).css('background-color', '#ABC4AA');
                    }, function() {
                        $(this).css('background-color', 'white');
                    });
                </script>
            </div>
        </div>
    </div>
</main>

 <!-- footer -->
    <div id="sticky-footer" class="container-fluids">
        <div class="wthree-copyright m-3">
            <p class="text-center" style="font-weight:600; color:black;"> Design & Developed By Evon IT solution..</p>
        </div>
   </div>
  <!-- / footer -->
  <?php
// include("./footer.php");
?>
</div>
</div>



</body>

</html>

