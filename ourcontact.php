
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">CONTACT US</h4>
                            <p class="card-category">Website Queries</p>
                        </div>
                        <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped">
        <tr class="text-white" style="background:mediumpurple;"><th> FULL  NAME</th> 
        <th> YOUR MAIL </th> <th> SUBJECT LINE </th><th> ADDRESS LINE </th><th> CITY</th> <th> STATE</th><th>MESSAGE DATE</th></tr>
    <?php
        $sql="SELECT * from contact_us order by contact_id DESC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $cid=$row['contact_id'];
            echo"<tr>";
            echo"<td>".$row['full_name']."</td>";
            echo"<td>".$row['your_mail']."</td>";
            echo"<td>".$row['subject_line']."</td>";
            echo"<td>".$row['address_line']."</td>";
            echo"<td>".$row['city']."</td>";
            echo"<td>".$row['state']."</td>";
            echo"<td>".$row['message_date']."</td>";
            
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