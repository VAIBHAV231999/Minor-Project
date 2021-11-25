
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">CONTACT US</h4>
                            <p class="card-category">Contact Details of Pingalwara</p>
                        </div>
                        <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped">
        <tr class="text-white" style="background:mediumpurple;"><th> FULL  NAME</th> 
        <th> YOUR MAIL </th> <th> SUBJECT LINE </th><th> ADDRESS LINE </th><th> CITY</th> <th> STATE</th></tr>
    <?php
        $sql="SELECT * from contact_us order by full_name ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['contact_us'];
            echo"<tr>";
            echo"<td>".$row['full_name']."</td>";
            echo"<td>".$row['your_mail']."</td>";
            echo"<td>".$row['subject_line']."</td>";
            echo"<td>".$row['address_line']."</td>";
            echo"<td>".$row['city']."</td>";
            echo"<td>".$row['state']."</td>";
            echo"<td><a href='ourcontact.php?del=$cid'></a> &nbsp; &nbsp; <a href='editcontact.php?id=$cid'><i class='icofont-edit'></i></a></td>";
            
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