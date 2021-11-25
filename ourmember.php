
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">MEMBER</h4>
                            <p class="card-category">Member of Pingalwara</p>
                        </div>
                        <div class="card-body">
                        
                            <table class="table table-hover table-bordered table-stripped">
        <tr class="text-white" style="background:mediumpurple;"><th> Member Name </th> 
        <th> About</th> <th> Contact Info </th> <th> Image </th><th> ACTION </th> </tr>
    <?php
        $sql="SELECT * from members order by full_name ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['member_id'];
            echo"<tr>";
            echo"<td>".$row['full_name']."</td>";
            echo"<td> ".substr($row['about'],0,200)."</td>";
            echo"<td>".$row['contact']."<br/>";
            echo $row['email']."</td>";
            
            echo"<td><img src='".$row['image']."'width='70px' height='70px'></td>";
            echo"<td><a href='ourmember.php?del=$cid'><i class='icofont-trash'></i></a> &nbsp; &nbsp; <a href='editmember.php?id=$cid'><i class='icofont-edit'></i></a></td>";
            
            echo"</tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM members where member_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ourmember.php';</script>";
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