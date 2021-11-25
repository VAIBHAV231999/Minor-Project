
<?php include 'header.php'; ?> 

<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                        </div>
                        <div class="card-body">
            <?php  
                $result=$conn->query("Select * from article");
                $article=$result->num_rows;
                
                $result=$conn->query("Select * from video_gallery");
                $video=$result->num_rows;
                
                $result=$conn->query("Select * from e_books");
                $ebook=$result->num_rows;
                
                $result=$conn->query("Select * from image_gallery");
                $image=$result->num_rows;
                            
                
                $result=$conn->query("Select * from activity");
                $activity=$result->num_rows;
                
                
                $result=$conn->query("Select * from members");
                $member=$result->num_rows;
                            
                            ?>
                            
            
                       <div class='row'>
                    <div class='col-md-8'>
                <h5 class="text-uppercase pb-2">Volunteer request</h5>
                        <?php
        $sql="SELECT * from volunteer order by volunteer_id DESC limit 1;";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();   
        $cid=$row['volunteer_id'];  ?>
        <div class="bg-white p-1">
        <h5 class="text-capitalize"> By - <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?>  ( From <?php echo $row['city'] ?>)</h5> 
        <p> Contact Details - <?php echo $row['email'] ?> <?php echo $row['contact'] ?> </p>    
        <h6 class='table-warning p-1'> Message Date  - <?php echo $row['reqdate'] ?> &nbsp; &nbsp; &nbsp; &nbsp; <?php echo"<a href='vdetails.php?id=$cid'> View Details </a>"; ?></h6> </div>
   
       <h5 class="text-uppercase pt-2 pb-2">Admission request</h5>
                        <?php
        $sql="SELECT * from admission order by formid DESC limit 1;";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();   
        $cid=$row['formid'];  ?>
        <div class="bg-white p-1">
        <h5 class="text-capitalize"> By - <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?>  ( From <?php echo $row['city'] ?>)</h5> 
        <p> Contact Details - <?php echo $row['email'] ?> <?php echo $row['contact_number'] ?> </p>    
        <h6 class='table-warning p-1'> Message Date  - <?php echo $row['applydate'] ?> &nbsp; &nbsp; &nbsp; &nbsp; <?php echo"<a href='adetails.php?id=$cid'> View Details </a>"; ?></h6> </div>
   
    <h5 class="text-uppercase pt-2 pb-2">Employee Job request</h5>
                        <?php
        $sql="SELECT * from job order by volunteer_id DESC limit 1;";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();   
        $cid=$row['volunteer_id'];  ?>
        <div class="bg-white p-1">
        <h5 class="text-capitalize"> By - <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?>  ( From <?php echo $row['city'] ?>)</h5> 
        <p> Contact Details - <?php echo $row['email'] ?> <?php echo $row['contact'] ?> </p>    
       <h6 class='table-warning p-1'> Message Date  -  &nbsp; &nbsp; &nbsp; &nbsp; <?php echo"<a href='jdetails.php?id=$cid'> View Details </a>"; ?></h6> </div>
       
                           
                    </div>        
            <div class="col-md-4">
                    <div class="p-1 pt-3 pb-1 bg-dark text-center text-white">
                <h5> <?php echo date('D d, M-Y') ?></h5>
                </div> <br>
    <h5 class="text-uppercase pt-2 pb-2">Quick Links </h5>       
           <table class='table'>
        <tr> <th><a class="text-decoration-none text-dark" href=ourarticle.php> Articles </a></th>
            <th class="text-center"> <?php  echo $article; ?> </th></tr>  
        
        <tr> <th><a class="text-decoration-none text-dark" href=ouractivity.php> Activities </a></th>
            <th class="text-center"> <?php  echo $activity; ?> </th></tr>  
               

        <tr> <th><a class="text-decoration-none text-dark" href=ourimage_gallery.php> Image Gallery </a></th>
            <th class="text-center"> <?php  echo $image; ?> </th></tr>  
        
        <tr> <th><a class="text-decoration-none text-dark" href=ourvideo_gallery.php>Video Gallery </a></th>
            <th class="text-center"> <?php  echo $video; ?> </th></tr>  
                

        <tr> <th><a class="text-decoration-none text-dark" href=oure_book.php> E Book </a></th>
            <th class="text-center"> <?php  echo $ebook; ?> </th></tr>  
               
            
        <tr> <th><a class="text-decoration-none text-dark" href=ourmember.php> Team Members </a></th>
            <th class="text-center"> <?php  echo $member; ?> </th></tr>  
        </table>                
                           
           </div>                
                            
                    </div>
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
                                </div>
        </div>
    </div>

<?php include 'footer.php';?>