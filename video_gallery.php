
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
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-4">              
            <input type="text" required name="title" placeholder="TITLE" class="form-control">
</div>
<div class="col-md-4">   
            <input type="url" required placeholder="Video URL" name="vid" class="form-control"> 
</div>

<div class="col-md-3">
    <select name="tag" class="form-control" >
    <option>Documentary</option>
        <option>Dr Inderjeet Kaur</option>
    <option>Celebration</option>
    <option>Stories of Pinaglwara </option>
    <option>Natural Farming</option>
    <option>Kirti Mela</option>
    <option>Other</option>
    </select>
             </div>
<div class="col-md-1">
             <button type="submit" class="btn btn-success" name="save"> Save </button>
             </div>   

                            </div>
                            </form>
                            
    <?php
    if(isset($_POST['save'])) 
    {
         $sql="insert into video_gallery (title,video,tag) values('$_POST[title]','$_POST[vid]','$_POST[tag]');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'> VIDEO SAVED SUCCESSFULLY </div>";
        else
            echo"<div class='alert alert-warning'> ERROR IN QUERY ".$conn->error." </div>";
       }
        
    ?>
    
                            
                        </div>
                    </div>
                     
                         <table class="table table-hover ">
        
    <?php
        $i=0;echo"<tr>";
        $sql="SELECT * from video_gallery order by title ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   $i++;
            $cid=$row['vid_id'];
            
           
           echo"<td class='text-center'><iframe src='".$row['video']."'width='70px' height='70px'></iframe><br/>";
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
        
<?php include 'footer.php';?>