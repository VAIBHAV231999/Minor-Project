
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">BRANCH</h4>
                            <p class="card-category">Branches of Pingalwara</p>
                        </div>
                        <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped">
        <tr class="text-white" style="background:mediumpurple;"><th> Branch Name </th> 
        <th> OVERVIEW </th> <th> Gallery </th><th> ACTION </th> </tr>
    <?php
        $sql="SELECT * from branches order by branch ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['branch_id'];
            echo"<tr>";
            echo"<td>".$row['branch']."</td>";
            echo"<td> ".substr($row['overview'],0,200)."</td>";
            echo"<td><a href='branch_gallery.php?id=$cid'><i class='icofont-image'></i></a></td>";

            echo"<td><a href='ourbranches.php?del=$cid'><i class='icofont-trash'></i></a> &nbsp; &nbsp; <a href='editbranches.php?id=$cid'><i class='icofont-edit'></i></a></td>";
            
            echo"</tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM branches where branch_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ourbranches.php';</script>";
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