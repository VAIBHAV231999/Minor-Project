
<h5><a href="video.php"  style='color:mediumpurple; text-decoration:none'> Video 's Gallery </a></h5>  

<?php
$result=$conn->query("SELECT * from video_gallery ;");
$row=$result->fetch_assoc();
?>
<iframe width="100%" height="200" src="<?php echo $row['video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



<h5 class="pt-4" style='color:mediumpurple;'> Recent Activities </h5>  
<?php
$result=$conn->query("SELECT * from activity order by activity_date DESC Limit 4;");
while($row=$result->fetch_assoc()){
    $aid=$row['activity_id'];
  echo"<p class='border-bottom pb-2'><a href='fullevent.php?id=$aid' style='color:#222; text-decoration:none;'>".$row['activity']."</a></p>";
    }
?>
<br/>
<h5 style='color:mediumpurple;'>Articles </h5>  <br/>
<?php
$result=$conn->query("SELECT * from article order by posted_on DESC limit 4 ;");
while($row=$result->fetch_assoc()){
    $aid=$row['a_id'];
  echo"<p class='border-bottom pb-2'><a href='fullarticle.php?id=$aid' style='color:#222; text-decoration:none;'>".$row['article']."</a></p>";
    }
?>