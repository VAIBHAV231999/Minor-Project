<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">E-BOOKS</h4>
                            <p class="card-category">E-Books of Pingalwara</p>
                        </div>
                        <div class="card-body">
                         <table class="table table-hover">
                    
        <?php
        echo"<tr>";
        $i=0;
        $sql="SELECT * from e_books order by title ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   $i++;
            $cid=$row['e_id'];
            
           echo"<td class='text-center p-2'><a href='../staff/".$row['e_book']."' target='_blank'> <i class='icofont-file-pdf icofont-3x'> </i></a><br/>";
           
            echo"".$row['title']."</td>";
            echo"<td><a href='e_book.php?del=$cid'><i class='icofont-trash'></i></a></td>";
            if($i%3==0)
            echo"</tr><tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM e_books     where e_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='e_book.php';</script>";
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