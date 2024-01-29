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
           <h5> <img src="img/p5.png" alt="" class="icns1"><span> VIEW TRIPSHEET</span></h5>
        </div>
        <div class="com row">
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="group-form col-md-3">
                        <label class="form_label" for="company_name">From Date</label>
                        <input type="date" class="form-control form-control-sm" id="from" name="from" placeholder="Truck Name">
                    </div>
                    <div class="group-form col-md-3">
                        <label class="form_label" for="company_name">To Date</label>
                        <input type="date" class="form-control form-control-sm" name="to" id="to" placeholder="Truck Name">
                    </div>
                    <div class="group-form col-md-3">
                        <button type="submit" name="submit" class="btn btn-primary" style="margin-top:25px;" >Search</button>
                        <a href="view_Single_report.php?tno=<?php echo $truc;?>" class="btn btn-primary" style="margin-top:25px;" >Back</a>
                    </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Slno</th>
                            <th>Truck Number</th>
                            <th>Date OF Maintenance</th>
                            <th>Total Amount</th>
                        </tr>
                    </thead>
                    <tbody id="tb">
                        <?php
                            require_once("con.php");
                            if(!isset($_POST['submit']))
                            {
                                $query="SELECT * FROM `maintain`";
                            }else
                            {
                                $from=$_POST['from'];
                                $to=$_POST['to'];
                                ?>
                                    <script>
                                        let to="<?php echo $to; ?>";
                                        let from="<?php echo $from; ?>";
                                       
                                        $("#to").val(to);
                                        $("#from").val(from);
                                    </script>
                                <?php
                                $query="SELECT * FROM `maintain` WHERE `date` BETWEEN '$from' AND '$to'";
                            }
                            $exc=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($exc))
                            {
                                $id=$row['id'];
                                $query1="SELECT SUM(amount) AS amt FROM maintain_amount WHERE id=$id";
                                $exc1=mysqli_query($con,$query1);
                                $row1=mysqli_fetch_array($exc1)
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['tno']; ?></td>
                                        <td><?php echo $row1[0]; ?></td>
                                        <!-- <td><a href="view_tripsheet_report.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">View</a></td> -->
                                    </tr>
                                <?php
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
                            var item_id = currow.find('td:eq(0)').html();
                            console.log(item_id);
                            window.location.href = 'maintenance_view.php?id='+item_id;
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
    
    <div id="sticky-footer" class="container-fluids">
        <div class="wthree-copyright m-3">
            <p class="text-center" style="font-weight:600; color:black;">Design & Developed By Evon IT solution..</p>
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

