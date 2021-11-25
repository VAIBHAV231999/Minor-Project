<?php include 'header.php' ?>




<div class="container-fluid px-0" style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple'> 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'>E-books </h2>
    
    </div></div>


<div class="container pt-5"> 
<div class="row text-center pt-3 pb-5">
    <div class="col-md-12">
        <h5> View / Download  Books </h5> <br/>
      <table class="table table-hover">
          <tr><th> View  </th><th> Book Title </th> <th> View  </th><th> Book Title </th> </tr>          
        <?php
        echo"<tr>";
        $i=0;
        $sql="SELECT * from e_books order by title ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   $i++;
            $cid=$row['e_id'];
            
           echo"<td class='text-center p-2'><a href='staff/".$row['e_book']."' target='_blank'> <i class='icofont-file-pdf icofont-2x' style='color:mediumpurple'> </i></a></td>";
         
           
            echo"<td>".$row['title']."</td>";
            if($i%2==0)
            echo"</tr><tr>";
        }
    ?>   
        
        </table>    
    
    </div></div>
</div>
<?php include 'footer.php' ?>