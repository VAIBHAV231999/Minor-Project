
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">ACTIVITY</h4>
                            <p class="card-category">Activities of Pingalwara</p>
                        </div>
                        <div class="card-body">
                         <table class="table table-hover table-bordered table-stripped">
       <tr class="text-white" style="background:mediumpurple;"><th> Activity </th> 
        <th>Description</th> <th> Image </th><th> ACTION </th> </tr>
    <?php
        $sql="SELECT * from activity order by activity ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['activity_id'];
            echo"<tr>";
            echo"<td>".$row['activity']."</td>";
            echo"<td> ".substr($row['description'],0,200)."</td>";
            
            echo"<td><img src='".$row['image']."'width='70px' height='70px'></td>";
        echo"<td><a href='event_gallery.php?id=$cid'><i class='icofont-image'></i></a></td>";
            echo"<td><a href='ouractivity.php?del=$cid'><i class='icofont-trash'></i></a> &nbsp; &nbsp; <a href='editactivity.php?id=$cid'><i class='icofont-edit'></i></a></td>";
            
            echo"</tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM activity where activity_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ouractivity.php';</script>";
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