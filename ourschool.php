
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">SCHOOL</h4>
                            <p class="card-category">School's of Pingalwara</p>
                        </div>
                        <div class="card-body">
                        
                            <table class="table table-hover table-bordered table-stripped">
        <tr class="text-white" style="background:mediumpurple;"><th> School Name </th> 
        <th> About</th> <th> Image </th><th>Phone</th><th>Email</th><th>Gallery</th><th> ACTION </th> </tr>
    <?php
        $sql="SELECT * from school order by school_name ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['school_id'];
            echo"<tr>";
            echo"<td>".$row['school_name']."</td>";
            echo"<td> ".substr(strip_tags($row['about']),0,200)."</td>";
            
            echo"<td><img src='".$row['image']."'width='70px' height='70px'></td>";
            echo"<td>".$row['phone']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td><a href='school_gallery.php?id=$cid'><i class='icofont-image'></i></a></td>";
            echo"<td><a href='ourschool.php?del=$cid'><i class='icofont-trash'></i></a> &nbsp; &nbsp; <a href='editschool.php?id=$cid'><i class='icofont-edit'></i></a></td>";
            
            echo"</tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM school where school_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ourschool.php';</script>";
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