

<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">BANK ACCOUNT</h4>
                            <p class="card-category"> Pingalwara's Bank Account </p>
                        </div>
                        <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped">
        <tr class="text-white" style="background:mediumpurple;"><th> Account Number </th> 
        <th> Bank Name </th> <th> Code </th> </tr>
    <?php
        $sql="SELECT * from account_detail order by account_id ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['account_id'];
            echo"<tr>";
            echo"<td>".$row['account_no']."</td>";
            echo"<td>".$row['bank_name']."</td>";
            echo"<td>".$row['code']."</td>";
            echo"<td><a href='ouraccount.php?del=$cid'><i class='icofont-trash'></i></a> &nbsp; &nbsp; </td>";
            
            echo"</tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM account_detail where account_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ouraccount.php';</script>";
         }
         else
         {
             echo "<div class='alert alert-danger'>Error In Query.$conn->error";
         }
    }
    ?>  
    </table>
            
                            
                
                            
                        </div>
                    </div>
                </div>
                                </div>
        </div>
    </div>
<?php include 'footer.php';?>