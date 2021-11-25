
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">PAGE</h4>
                            <p class="card-category">Pages of Pingalwara</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-stripped">
        <tr class="text-white" style="background:mediumpurple;"><th> Page Title </th> <th> Content 1</th> <th> Content </th> <th> Image </th> <th> ACTION </th> </tr>
    <?php
        $sql="SELECT * from page order by page_title ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['page_id'];
            echo"<tr>";
            echo"<td>".$row['page_title']."</td>";
            echo"<td>".substr(strip_tags($row['content1']),0,250)."...</td>";
            echo"<td>".substr(strip_tags($row['content2']),0,250)."</td>";
            echo"<td><img src='".$row['featured_image']."'width='70px' height='70px'></td>";
            echo"<td><a href='ourpage.php?del=$cid'><i class='icofont-trash'></i></a> &nbsp; &nbsp;<a href='editpage.php?id=$cid'><i class='icofont-edit'></i></a></td>";
            
            echo"</tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM page where page_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ourpage.php';</script>";
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