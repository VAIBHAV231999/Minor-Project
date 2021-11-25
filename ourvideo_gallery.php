<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">VIDEO GALLERY</h4>
                            <p class="card-category">Videos of Pingalwara</p>
                        </div>
                        <div class="card-body">
                          <table class="table table-hover ">
        
    <?php
        $i=0;echo"<tr>";
        $sql="SELECT * from video_gallery order by title ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   $i++;
            $cid=$row['vid_id'];
            
           
           echo"<td class='text-center'><iframe src='../staff/".$row['video']."'width='70px' height='70px'></iframe><br/>";
             echo"".$row['title']."</td>";
            echo"<td><a href='ourvideo_gallery.php?del=$cid'><i class='icofont-trash'></i></a> &nbsp; &nbsp; </td>";
            if($i%4==0)
            echo"</tr><tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM video_gallery where vid_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ourvideo_gallery.php';</script>";
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