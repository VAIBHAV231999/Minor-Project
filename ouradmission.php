
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">ADMISSION ENQUIRY</h4>
                            <p class="card-category">Admission Requests </p>
                        </div>
                        <div class="card-body">
                    <table class="table">
        <tr class="text-white" style="background:mediumpurple;"><th> FIRST  NAME</th> <th> LAST  NAME</th> 
        <th> YOUR MAIL </th> <th> Apply Date </th><th> Class </th><th>Profile</th> </tr>
    <?php
        $sql="SELECT * from admission order by formid DESC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['formid'];
            echo"<tr>";
            echo"<td>".$row['first_name']."</td>";
            echo"<td>".$row['last_name']."</td>";
            echo"<td>".$row['email']."</td>";
            
            echo"<td>".$row['applydate']."</td>";
            
            echo"<td>".$row['class_name']."</td>";
            echo"<td><a href='adetails.php?id=$cid'><i class='icofont-page'></i></a> &nbsp; &nbsp;</td>";
            
            
           
            
            echo"</tr>";
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