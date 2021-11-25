
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">IQ TEST</h4>
                            <p class="card-category">Iq Test for Mental retardation  </p>
                        </div>
                        <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped">
        <tr class="text-white" style="background:mediumpurple;"><th> Question </th> 
         </tr>
    <?php
    
$sql="SELECT * from questions group by type ASC;";
$resultt=$conn->query($sql);
while($rowt=$resultt->fetch_assoc())
{    $type=$rowt['type'];
     echo"<tr class='bg-light'><th>".$type."</th></tr>";
           
        $sql="SELECT * from questions where type='$type' order by quesid ASC;";
        $result=$conn->query($sql);3
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['quesid'];
            echo"<tr>";
            echo"<td>".$row['question']."</td>";
            echo"<td><a href='ourquestion.php?del=$cid'><i class='icofont-trash'></i></a> &nbsp; &nbsp; </td>";
            
            echo"</tr>";
        }
}
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM questions where quesid='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ourquestion.php';</script>";
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