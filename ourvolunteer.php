
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">VOLUNTEERING</h4>
                            <p class="card-category">Volunteer Requests </p>
                        </div>
                        <div class="card-body">
                    <table class="table">
        <tr class="text-white" style="background:mediumpurple;"><th> FIRST  NAME</th> <th> LAST  NAME</th> 
        <th> YOUR MAIL </th> <th> CONTACT </th><th> CITY</th><th>Profile</th> </tr>
    <?php
        $sql="SELECT * from volunteer order by volunteer_id DESC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['volunteer_id'];
            echo"<tr>";
            echo"<td>".$row['first_name']."</td>";
            echo"<td>".$row['last_name']."</td>";
            echo"<td>".$row['email']."</td>";
            
            echo"<td>".$row['contact']."</td>";
            
            echo"<td>".$row['city']."</td>";
            echo"<td><a href='Vdetails.php?id=$cid'><i class='icofont-page'></i></a> &nbsp; &nbsp;</td>";
            
            
           
            
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