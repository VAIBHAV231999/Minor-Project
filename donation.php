<?php include 'header.php' ?>


<div class="container-fluid px-0" style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple'> 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'>Donation</h2>
    
    </div></div>
   
    
<div class="row pt-3 pt-5 pb-5">
    <div class="col-md-12">
        <hr/>
        <h5 class="text-center" style="color:mediumpurple"> DONATION's  </h5>
        <hr/>
    <p style="font-size:large; font-family:cursive"> Donors are kindly requested  not to send the donation through Western Union or Money Gram.</p>
        <ol type="A" style="color:mediumpurple; line-height:2em">
            <li style="color:#333">All donations to Pingalwara are exempted under Section 80G of Income Tax–II Amritsar letter No CIT-II/ASR/ITO(Tech.)/2011-12/4730 dated 11/12-01-2012</li>
            <li style="color:#333">PAN Number of the All India Pingalwara Charitable Society is AAATA 2237R</li>
            <li style="color:#333">Cheques &amp; Bank Drafts may be sent in favour of ‘All India Pingalwara Charitable Society (Regd.), Amritsar.</li>
        </ol>
    <p style="font-size:large; font-family:cursive"> 
        Indian Donors Donate Online Donation with Icicibank and PayUMoney </p>
    
<div class="row pt-1 pb-1">
        <div class="col-md-2"></div>
    
        <div class="col-md-4"><a href='https://www.payumoney.com/webfronts/#/index/PingalwaraCharitableSociety' target="_blank"> <img src="image/pay.png" width="100%" height="90px"> </a></div> <div class="col-md-4"><a href='https://eazypay.icicibank.com/eazypayLink?P1=jIYGtWxFse/bUbgNPxhiPQ==' target="_blank"> <img src="image/icic.png" width="100%" height="90px"> </a></div>
        <div class="col-md-2"></div>
        </div>  
    </div>
    <div class="col-md-12">
        <hr/>
        <h5 class="text-center" style="color:mediumpurple"> ACCOUNT NO’S WITH BANKS </h5>
        <hr/>
      <table class="table table-bordered table-striped table-hover">
          <tr><th colspan="4">Account Name :  All India Pingalwara Charitable Society (Regd.), Amritsar</th></tr>
          <tr><th> S.NO </th><th> ACCOUNT NO. </th> 
        <th> 	NAME OF THE BANK </th> <th> SWIFT (INTERNATIONAL TRANSFER /IFS CODE (INLAND TRANSFER) </th> </tr>
    <?php
    $i=0;
        $sql="SELECT * from account_detail order by account_id ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   $i++;
            $cid=$row['account_id'];
            echo"<tr>";
        
            echo"<td>".$i."</td>";
            echo"<td>".$row['account_no']."</td>";
            echo"<td>".$row['bank_name']."</td>";
            echo"<td>".$row['code']."</td>";
            
            echo"</tr>";
        }
    ?> 
        
        </table>    
    
    </div></div>
</div>
<?php include 'footer.php' ?>