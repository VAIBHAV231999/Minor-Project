<?php include 'header.php' ?>
<div class="container pt-5"> 
    
    
<div class="row pt-3 pb-5">
    <div class="col-md-12">
        <hr/>
        <h5 class="text-center" style="color:mediumpurple">  MENTAL ABILITY TEST  </h5>
        <hr/>
    <p style="font-size:large; text-align:justify"> About 75–80 percent of mental retardation is familial (runs in families), and 20–25 percent is due to organic problems, such as chromosomal abnormalities or brain damage. Mild to severe mental retardation is a symptom of several hundred single-gene disorders and many chromosomal abnormalities, including small deletions. Based on twin studies, moderate to severe mental retardation does not appear to be familial, but mild mental retardation does. That is, the relatives of the moderate to severely mentally retarded have normal ranges of IQs, whereas the families of the mildly mentally retarded have IQs skewing lower.
</p>
    </div>
    
    <div class="col-md-12">
     
    <?php
    
$sql="SELECT * from questions group by type ASC;";
$resultt=$conn->query($sql);
$i=0;$count=0;
while($rowt=$resultt->fetch_assoc())
{    $type=$rowt['type']; 
     echo"<h3 class='bg-light text-center' >".$type."</h3>";
           
        $sql="SELECT * from questions where type='$type' order by quesid ASC;";
        $result=$conn->query($sql);
            $count+=$result->num_rows;
 ?>
        
       <form action="" method="post">
      <table class="table table-bordered table-striped table-hover">
       
       <tr class="text-white" style="background:mediumpurple;"><th> Question </th> <th> Mild </th> <th> Moderate </th> <th> Severe </th> <th> Profound </th> 
         </tr>     
   <?php      while($row=$result->fetch_assoc())
        {   
            $qid=$row['quesid'];
            $nm="Que".$i;
            echo"<tr>";
            echo"<td>".$row['question']."</td>";
            
            echo"<td><input type='radio' name='".$nm."' value='4' checked >  </td>";
            echo"<td><input type='radio' name='".$nm."' value='3'  >  </td>";
            echo"<td><input type='radio' name='".$nm."' value='2'>  </td>";
            echo"<td><input type='radio' name='".$nm."' value='1'>  </td>";
            
            echo"</tr>";
     $i++;
        }  ?>
</table>
<?php }
    ?> 
          
          

           <div class='row'>
           <div class="col-md-4 pt-4">
        <button type="submit" name="save" class="btn btn-outline-success btn-block rounded-0 "> SUBMIT & Procced </button> </div>
        <div class="col-md-4 pt-4"> <button type="reset" name="save" class="btn btn-outline-success btn-block rounded-0 "> CLEAR </button>
               </div></div>
        </form>
         <?php
        
    if(isset($_POST['save'])) {
        $rec=$_GET['formid'];
        $score=0;   
        for($i=0;$i<$count;$i++){
                $nm="Que".$i;
           $score+=$_POST[$nm]; 
        
        }
        echo $score;
        $sql="UPDATE iqtest set result='$score' where formid='$_GET[formid]'; ";
        if($conn->query($sql)){
            echo"<script>window.location='result.php?formid=$rec'</script>";
            
        }
        else
            echo"<div class='alert alert-warning'> ERROR IN QUERY ".$conn->error." </div>";
   
      
    }
    
    ?>
      
   
        

    </div></div>
</div>
<?php include 'footer.php' ?>