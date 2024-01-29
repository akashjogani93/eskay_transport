<?php include("sidebar.php"); 
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}

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
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Slno</th>
                            <th>From Date</th>
                            <th>To Date</th>
                            <!-- <th>Driver Name</th> -->
                            <!-- <th>Actions</th> -->
                        </tr>
                    </thead>
                    <tbody id="tb">
                        <?php
                            require_once("con.php");
                            if(!isset($_POST['submit']))
                            {
                                $query="SELECT * FROM `maintain_amount` WHERE `id`='$id'";
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
                                $query="SELECT * FROM `tripsheet` WHERE `fromdate` BETWEEN '$from' AND '$to' AND `truc`='$truc'";
                            }
                            $exc=mysqli_query($con,$query);
                            $i=0;
                            $amt=0;
                            while($row=mysqli_fetch_array($exc))
                            {
                                ?>
                                    <tr>
                                        <td><?php echo $row['mid']; ?></td>
                                        <td><?php echo $row['dis_crip']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                    </tr>
                                <?php
                                $i=$i+1;
                                $amt=$amt+$row['amount'];
                            }
                            ?>
                        </tbody>
                        <tfoot>
                                <tr style="background-color: #ABC4AA">
                                    <td class="text-center">Quantity: <?php echo $i; ?></td>
                                    <td class="text-center">Total Amount:</td>
                                    <td><?php echo $amt; ?></td>
                                </tr>

                            <?php
                        ?>
                        </tfoot>
                    </table>
                <script>
                    $(document).ready(function() 
                    {
                        // $("#example tbody").on('dblclick', 'tr', function() 
                        // {
                        //     var currow = $(this).closest('tr');
                        //     var item_id = currow.find('td:eq(0)').html();
                        //     console.log(item_id);
                        //     window.location.href = 'view_tripsheet_report.php?id='+item_id;
                        // });
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

